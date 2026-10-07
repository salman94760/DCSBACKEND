<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Barryvdh\DomPDF\Facade\Pdf; 
use Illuminate\Container\Attributes\Storage;
use App\Models\User;

use App\Models\userInfo;
use App\Models\Driver;
use App\Models\DriverDocument;
use App\Models\DriverDrugTest;
use App\Models\DriverMiscellaneous;
use App\Models\Employment;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\DriverEsignRequest;
use App\Mail\DriverApplicationForm;
use Illuminate\Support\Facades\File;

class DriverController extends Controller
{
    

    public function addDriver(Request $request){

        $fullname = $request->fname.' '.$request->lname;
        $randomPassword = Str::password(8,letters: true,numbers: false,symbols: false);
        $user = User::create([
            'name'      => $fullname,
            'email'     => $request->email,
            'password'  => Hash::make($randomPassword),
            'role'      => 'driver',
        ]);

        if ($user) {
            $user->userInfo()->create([
                'address'       => $request->currentcity??'',
                'phone'         => $request->phone,
                'zipcode'       => '',
                'landmark'      => '',
                'image'         => '',
                'company'       => $request->cname??'',
                'password_hint' => $randomPassword,
                'status'        => 1,
            ]);
        }

        $driver = Driver::create([
            'user_id'                   => $user->id,
            'company_id'                => $request->company_id,
            'fname'                     => $request->fname,
            'mname'                     => $request->mname??'',
            'lname'                     => $request->lname,
            'activedate'                => $request->activedate,
            'dob'                       => $request->dob,
            'phone'                     => $request->phone,
            'email'                     => $request->email,
            'drugnegativedate'          => $request->drugnegativedate??null,
            'socialsecurity'            => $request->socialsecurity,
            'appliedfor'                => $request->appliedfor,
            'driverstatus'              => $request->driverstatus,
            'pclearinghousedate'        => $request->pclearinghousedate,
            'terminationdate'           => $request->terminationdate??null,
            'emecontactno'              => $request->emecontactno,
            'emecontactperson'          => $request->emecontactperson,
            'reasonleavingortermination'=> $request->reasonleavingortermination,
            'legalrightsstatus'         => $request->legalrightsstatus,
            'workauthorization'         => $request->workauthorization,
            'permituscisno'             => $request->permituscisno,
            'permitexpdate'             => $request->permitexpdate??'',
            'currentstreet'             => $request->currentstreet,
            'currentcity'               => $request->currentcity,
            'currentstate'              => $request->currentstate,
            'currentzip'                => $request->currentzip,
            'currentyear'               => $request->currentyear,
            'mailingstreet'             => $request->mailingstreet,
            'mailingcity'               => $request->mailingcity,
            'mailingstate'              => $request->mailingstate,
            'mailingzip'                => $request->mailingzip,
            'mailingyear'               => $request->mailingyear,
            'previousstreet'            => $request->previousstreet,
            'previouscity'              => $request->previouscity,
            'previousstate'             => $request->previousstate,
            'previouszip'               => $request->previouszip,
            'previousyear'              => $request->previousyear,
            'currentcdlstate'           => $request->currentcdlstate,
            'currentcdllicenseno'       => $request->currentcdllicenseno,
            'currentcdlclass'           => $request->currentcdlclass,
            'currentcdlendorsements'    => $request->currentcdlendorsements,
            'currentcdlissuedate'       => $request->currentcdlissuedate,
            'currentcdlexpdate'         => $request->currentcdlexpdate,
            'oldcdlstate'               => $request->oldcdlstate,
            'oldcdllicenseno'           => $request->oldcdllicenseno,
            'oldcdlclass'               => $request->oldcdlclass,
            'oldcdlendorsements'        => $request->oldcdlendorsements,
            'oldcdlissuedate'           => $request->oldcdlissuedate,
            'oldcdlexpdate'             => $request->oldcdlexpdate,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Driver added successfully.',
            'user' => $driver,
        ], 200);
    }

    public function drivers(String $id){
        $drivers = Driver::with('employment')->where('company_id',$id)->get();
        return response()->json([
            'success' => true,
            'data' => $drivers,
        ], 200);
    }

    public function driverDetail(Request $request, $id){
        $driver = Driver::with([
            'employment',
            'accident',
            'document',
            'drugtest',
            'experience',
            'miscellaneous',
            'trafficconviction',
            'company',
            'user'
        ])->find($id);

        $companyId = $driver->company_id;
        $driverEmail = $driver->email;

        $company = Company::where('user_id',$companyId)->first();
        if ($company) {
            $company->logo = $company->image? asset('storage/' . $company->image): null;
        }

        $ip = Http::get('https://api4.ipify.org')->body();
        $location = Http::get("http://ip-api.com/json/{$ip}")->json();

        $location = [
            'ip' => $ip,
            'country' => $location['country'] ?? null,
            'state' => $location['regionName'] ?? null,
            'city' => $location['city'] ?? null,
            'zip' => $location['zip'] ?? null,
            'latitude' => $location['lat'] ?? null,
            'longitude' => $location['lon'] ?? null,
        ];

        if (!$driver) {
            return response()->json([
                'success' => false,
                'message' => 'Driver not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'driver' => $driver,
            'company' => $company,
            'location' => $location,
        ], 200);
    }

    public function driverApplicationPreview(Request $request, $id){
        $driver = Driver::with([
            'employment',
            'accident',
            'document',
            'drugtest',
            'experience',
            'miscellaneous',
            'trafficconviction',
            'company',
            'user'
        ])->find($id);

        $companyId = $driver->company_id;
        $driverEmail = $driver->email;

        $company = Company::where('user_id',$companyId)->first();
        if ($company) {
            $company->logo = $company->image? asset('storage/' . $company->image): null;
        }

        $ip = Http::get('https://api4.ipify.org')->body();
        $location = Http::get("http://ip-api.com/json/{$ip}")->json();

        $doc = $driver->document->firstWhere('slug', 'pre-employment-clearing-house');
        $cleHDate = !empty($doc?->expiration_date)? \Carbon\Carbon::parse($doc->expiration_date)->subYear()->format('Y-m-d'): '';

        $signature = $driver->user?->signature ?? ''; 

        if (!empty($signature)) { $signatureUrl = request()->getHost() === 'localhost' ? 'http://localhost:8000/storage/' . $signature : 'https://palegoldenrod-squid-977714.hostingersite.com/storage/app/public/' . $signature; }

        return view('emails.driver-esign-application',compact('driver','company','location','cleHDate','signatureUrl'));

       
    }

    public function companyDriverDetail($company_id,$driver_id){
        $driver = Driver::where(['id'=>$driver_id,'company_id'=>$company_id])->firstOrFail();
         return response()->json([
            'success' => true,
            'data' => $driver,
        ]);
    }

    public function AddDriverApplication(Request $request)
    {
        $path = '';

        if($request->hasFile('photo')){
            $path = $request->file('photo')->store('driver/'.$request->driver_id.'/profile','public');
        }

        $ip = Http::get('https://api4.ipify.org')->body();
        $location = Http::get("http://ip-api.com/json/{$ip}")->json();
        $driver = Driver::findOrFail($request->driver_id);
        $driver->update([
            'esign'      => 1,
            'esigndata'  => $request->all(),
            'ip_address' => $ip,
            'timezone'   => $location,
            'time_date'  => now()->format('Y-m-d H:i:s'),
        ]);

        $signature = $driver->user?->signature ?? '';
        $signatureUrl = '';
        $signatureBase64 = null;

        if (!empty($signature)) {

            $signatureUrl = request()->getHost() === 'localhost' ? 'http://localhost:8000/storage/' . $signature : 'https://palegoldenrod-squid-977714.hostingersite.com/storage/app/public/' . $signature;

            $signaturePath = storage_path('app/public/' . $signature);
            if (file_exists($signaturePath)) {
                $mime = mime_content_type($signaturePath);
                $signatureBase64 = 'data:' . $mime . ';base64,' .base64_encode(file_get_contents($signaturePath));
            }
        }

        $userInfo = userInfo::where('user_id', $driver->user_id)->first();
        if($driver->email){
            $driver = Driver::with([
                'employment',
                'accident',
                'document',
                'drugtest',
                'experience',
                'miscellaneous',
                'trafficconviction',
                'company',
                'user'
            ])->find($request->driver_id);
            
            $companyId = $driver->company_id;
            $driverEmail = $driver->email;

            $company = Company::where('user_id',$companyId)->first();
            if ($company) {
                $company->logo = $company->image? asset('storage/' . $company->image): null;
            }

            $doc = $driver->document->firstWhere('slug', 'pre-employment-clearing-house');
            $cleHDate = !empty($doc?->expiration_date)? \Carbon\Carbon::parse($doc->expiration_date)->subYear()->format('Y-m-d'): '';

             if ($userInfo) {
            $userInfo->update([
                'image' => $path ?? null,
            ]);
        }
  

            $pdf = Pdf::loadView('emails.driver-esign-application', [
                'driver'       => $driver,
                'company'      => $company,
                'location'     => $location,
                'cleHDate'     => $cleHDate,
                'signatureUrl' => $signatureBase64,
            ]);

   $pdf->setPaper('a4', 'portrait');



            $licenseNo = preg_replace('/[^A-Za-z0-9_-]/','-',$driver->currentcdllicenseno ?? 'Unknown');
          

            $fileName = 'Driver-Application-' . $licenseNo . '.pdf'; 
            $pdfPath = 'driver/' . $request->driver_id . '/application/' . $fileName; 

            $fullPdfPath = storage_path('app/public/' . $pdfPath);
            File::ensureDirectoryExists(dirname($fullPdfPath));

            
            $pdf->save($fullPdfPath);




        //     try {
        //         // Mail::to('salman94760@gmail.com')->send(
        //         //     new DriverApplicationForm(
        //         //         $driver,
        //         //         $company,
        //         //         $location,
        //         //         $cleHDate,
        //         //         $signatureUrl,
        //         //         $fullPdfPath
        //         //     )
        //         // );


        //         return response()->json([
        //             'success' => true,
        //             'message' => 'Mail sent successfully',
        //         ]);

        //     } catch (\Throwable $e) {
        //         \Log::error('Driver application mail failed', [
        //             'error' => $e->getMessage(),
        //             'file' => $e->getFile(),
        //             'line' => $e->getLine(),
        //         ]);

        //         return response()->json([
        //             'success' => false,
        //             'message' => $e->getMessage(),
        //         ], 500);
        //     }
        // }

       

            return response()->json([
                'success' => true,
                'msg' => 'E sign uploaded successfully',
            ]);
        }
    }

    public function updateDriver(Request $request, String $id){
        $fullname = $request->fname.' '.$request->lname;
        $driver = Driver::findOrFail($id);
        $user = User::findOrFail($driver->user_id);
        
        $user->update(['name'  => $fullname,'email' => $request->email]);
        
        $user->userInfo()->updateOrCreate(['user_id' => $user->id],
            [
                'address'       => $request->currentcity??'',
                'phone'         => $request->phone,
                'zipcode'       => '',
                'landmark'      => '',
                'image'         => '',
            ]
        );

        $driver->update([
            'fname'                     => $request->fname,
            'mname'                     => $request->mname??'',
            'lname'                     => $request->lname,
            'activedate'                => $request->activedate,
            'dob'                       => $request->dob,
            'phone'                     => $request->phone,
            'email'                     => $request->email,
            'drugnegativedate'          => $request->drugnegativedate??null,
            'socialsecurity'            => $request->socialsecurity,
            'appliedfor'                => $request->appliedfor,
            'driverstatus'              => $request->driverstatus,
            'pclearinghousedate'        => $request->pclearinghousedate,
            'terminationdate'           => $request->terminationdate??null,
            'emecontactno'              => $request->emecontactno,
            'emecontactperson'          => $request->emecontactperson,
            'reasonleavingortermination'=> $request->reasonleavingortermination,
            'legalrightsstatus'         => $request->legalrightsstatus,
            'workauthorization'         => $request->workauthorization,
            'permituscisno'             => $request->permituscisno,
            'permitexpdate'             => $request->permitexpdate??null,
            'currentstreet'             => $request->currentstreet,
            'currentcity'               => $request->currentcity,
            'currentstate'              => $request->currentstate,
            'currentzip'                => $request->currentzip,
            'currentyear'               => $request->currentyear,
            'mailingstreet'             => $request->mailingstreet,
            'mailingcity'               => $request->mailingcity,
            'mailingstate'              => $request->mailingstate,
            'mailingzip'                => $request->mailingzip,
            'mailingyear'               => $request->mailingyear,
            'previousstreet'            => $request->previousstreet,
            'previouscity'              => $request->previouscity,
            'previousstate'             => $request->previousstate,
            'previouszip'               => $request->previouszip,
            'previousyear'              => $request->previousyear,
            'currentcdlstate'           => $request->currentcdlstate,
            'currentcdllicenseno'       => $request->currentcdllicenseno,
            'currentcdlclass'           => $request->currentcdlclass,
            'currentcdlendorsements'    => $request->currentcdlendorsements,
            'currentcdlissuedate'       => $request->currentcdlissuedate,
            'currentcdlexpdate'         => $request->currentcdlexpdate,
            'oldcdlstate'               => $request->oldcdlstate,
            'oldcdllicenseno'           => $request->oldcdllicenseno,
            'oldcdlclass'               => $request->oldcdlclass,
            'oldcdlendorsements'        => $request->oldcdlendorsements,
            'oldcdlissuedate'           => $request->oldcdlissuedate,
            'oldcdlexpdate'             => $request->oldcdlexpdate,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Driver updated successfully.',
            'company' => $driver,
        ], 200);
    }

    public function deleteDriver(String $id){
        $driver = Driver::findOrFail($id);
        $user_id = $driver->user_id;
        
        $user = User::findOrFail($user_id);
        $user->userInfo()->delete();
        $user->delete();
        $driver->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'driver deleted successfully.',
        ], 200); 
    }
}

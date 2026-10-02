<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

use Spatie\LaravelPdf\Support\Pdf;
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

class DriverController extends Controller
{
    public function genPdf(){
        $html = view('drivers.driver-application', [
        'name' => 'John Doe',
        'amount' => 1500,
    ])->render();

    Browsershot::html($html)
        ->format('A4')
        ->savePdf(storage_path('app/invoice.pdf'));

    return response()->download(
        storage_path('app/invoice.pdf')
    );
    }

    public function generatePdf(){
        return Pdf('drivers.driver-application', [
            'invoiceNumber' => '1234',
            'customerName' => 'Grumpy Cat',
        ]); 
        $data = [
            'name' => 'John Doe',
            'amount' => 1500,
        ];

        $pdf = Pdf::loadView('drivers.driver-application', $data);
  
        $path = storage_path('app/invoice.pdf');
  
        $pdf->save($path);

        return response()->download($path);
    }

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
            'permitexpdate'             => $request->permitexpdate,
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

    public function driverDetail($id){
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
        ], 200);
    }

    public function companyDriverDetail($company_id,$driver_id){
    //      $driver = Driver::findOrFail($driver_id);

    // if ((int) $driver->company_id !== (int) $user->company_id) {
    //     return response()->json([
    //         'message' => 'Unauthorized'
    //     ], 403);
    // }






        $driver = Driver::where(['id'=>$driver_id,'company_id'=>$company_id])->firstOrFail();
         return response()->json([
            'success' => true,
            'data' => $driver,
        ]);




 
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
            'permitexpdate'             => $request->permitexpdate,
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
        $company = Company::findOrFail($id);
        $user_id = $company->user_id;
        
        $user = User::findOrFail($user_id);
        $user->userInfo()->delete();
        $user->delete();
        $company->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Company deleted successfully.',
        ], 200); 
    }
}

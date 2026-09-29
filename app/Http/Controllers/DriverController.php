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
            'drugnegativedate'          => $request->drugnegativedate,
            'socialsecurity'            => $request->socialsecurity,
            'appliedfor'                => $request->appliedfor,
            'driverstatus'              => $request->driverstatus,
            'pclearinghousedate'        => $request->pclearinghousedate,
            'terminationdate'           => $request->terminationdate,
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
        $company = Company::with('user.userInfo')->find($id);
        if (!$company) {
            return response()->json([
                'success' => false,
                'message' => 'Company not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'company' => $company,
        ]);
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
            'drugnegativedate'          => $request->drugnegativedate,
            'socialsecurity'            => $request->socialsecurity,
            'appliedfor'                => $request->appliedfor,
            'driverstatus'              => $request->driverstatus,
            'pclearinghousedate'        => $request->pclearinghousedate,
            'terminationdate'           => $request->terminationdate,
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

    public function addDriverEmployment(Request $request){
        $cname      = $request->cname;
        $cid        = $request->company_id;
        $driver_id  = $request->driver_id;
        $via        = $request->via;

        if ($via === "driver_detail_page") {
            Employment::where('driver_id', $driver_id)
            ->where('company_id', $cid)
            ->delete();
        }

        if(is_array($request->employers)){
            foreach ($request->employers as $key => $emp) {
                $employment = Employment::create([
                    'cname'             => $cname,
                    'company_id'        => $cid,
                    'driver_id'         => $driver_id,
                    'contactno'         => $emp['contactno'],
                    'email'             => $emp['email'],
                    'currentstreet'     => $emp['currentstreet'],
                    'currentcity'       => $emp['currentcity'],
                    'currentzip'        => $emp['currentzip'],
                    'currentstate'      => $emp['currentstate'],
                    'positionheld'      => $emp['positionheld'],
                    'startdate'         => $emp['startdate'],
                    'enddate'           => $emp['enddate'],
                    'reasonleaving'     => $emp['reasonleaving'],
                    'employmentgap'     => $emp['employmentgap'],
                    'fmcsr'             => $emp['fmcsr'],
                    'safetysensitive'   => $emp['safetysensitive'],
                ]);
            }
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Driver employment added successfully.',
        ], 200); 
    }

    public function DriverEmploymentHistory($driverid){
        $driver = Driver::with('employment')->findOrFail($driverid);
         return response()->json([
            'success' => true,
            'message' => 'Driver employment fetched',
            'data'=> $driver->employment
        ], 200); 
    }

    public function addDriverDocument(Request $request){
        $compname   = $request->cname ?? '';
        $compId     = $request->company_id ?? '';
        $driverId   = $request->driver_id ?? '';

        if ($request->hasFile('files')) {
            $docfiles = $request->file('files');
            foreach ($docfiles as $k => $file) {
                $filename = Str::slug($request->title[$k]) . '_' . $driverId . '_' . time() . '.' . $file->getClientOriginalExtension();
                $folder = str_replace(' ', '', $request->title[$k]);
                if ($file->isValid()) {
                    $path = $file->storeAs('driver/'.$driverId.'/document/'.$folder.'',$filename,'public');
                }

                DriverDocument::create([
                    'driver_id'         => $driverId, 
                    'title'             => $request->title[$k] ?? null,
                    'subtitle'          => $request->subtitle[$k] ?? null,
                    'expiration_date'   => $request->docdate[$k] ?? null,
                    'file'              => $path
                ]);
            }
        }

        if ($request->hasFile('randomdrugfile')) {
            $drugfiles = $request->file('randomdrugfile');
            foreach ($drugfiles as $k => $file) {
                $filename = Str::slug($request->drugtitle[$k]) . '_' . $driverId . '_' . time() . '.' . $file->getClientOriginalExtension();

                $folder = str_replace(' ', '', $request->quarter[$k]);

                if ($file->isValid()) {
                    $path = $file->storeAs('driver/'.$driverId.'/drugtest/'.$folder.'',$filename,'public');
                }
                DriverDrugTest::create([
                    'driver_id' => $driverId, 
                    'quarter'   => $request->quarter[$k] ?? null,
                    'title'     => $request->drugtitle[$k] ?? null,
                    'date'      => $request->drugdate[$k] ?? null,
                    'result'    => '',
                    'file'      => $path
                ]);
            }
        }

        if ($request->hasFile('misfile')) {
            $misfiles = $request->file('misfile');
            foreach ($misfiles as $k => $file) {

                $filename = Str::slug($request->miscellaneoustitle[$k]) . '_' . $driverId . '_' . time() . '.' . $file->getClientOriginalExtension();
                if ($file->isValid()) {
                    $path = $file->storeAs('driver/'.$driverId.'/miscellaneous/',$filename,'public');
                }

                DriverMiscellaneous::create([
                    'driver_id' => $driverId, 
                    'title'   => $request->miscellaneoustitle[$k] ?? null,
                    'date'     => $request->miscellaneousdate[$k] ?? null,
                    'file'      => $path
                ]);
            }
        }


        return response()->json([
            'success'   => true,
            'message'   => 'Document Updated successfully.',
        ], 200);
    }

    public function DriverDocument($id){
        $data = [];
        $data['document']       = DriverDocument::where('driver_id',$id)->get();
        $data['drugtest']       = DriverDrugTest::where('driver_id',$id)->get();
        $data['miscellaneous']  = DriverMiscellaneous::where('driver_id',$id)->get();

        return response()->json([
            'success'   => true,
            'message'   => 'Document fetched successfully.',
            'data'      => $data
        ], 200);
    }
}

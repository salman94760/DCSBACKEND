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
use App\Mail\DriverEsignRequest;

class DriverDocumentController extends Controller
{

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
                    'cname'             => $emp['cname'],
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
        $company = Company::where('user_id',$cid)->first();
        $esignUrl = '';

        if (!empty($employment->email)) {
            $driver = Driver::with([
                'employment',
                'accident',
                'document',
                'drugtest',
                'experience',
                'miscellaneous',
                'trafficconviction',
                'company',
            ])->find($driver_id);

            Driver::where('id', $driver_id)->update(['driverstatus' => 'active']);



            // Mail::to($employment->email)->send(new DriverEsignRequest($driver,$esignUrl,$company));
        
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
                $slug = strtolower(str_replace(' ', '-', $request->title[$k]));
                if ($file->isValid()) {
                    $path = $file->storeAs('driver/'.$driverId.'/document/'.$folder.'',$filename,'public');
                }

                DriverDocument::create([
                    'driver_id'         =>  $driverId, 
                    'title'             =>  $request->title[$k] ?? null,
                    'slug'              =>  $slug ?? null,
                    'subtitle'          =>  $request->subtitle[$k] ?? null,
                    'expiration_date'   =>  $request->docdate[$k] ?? null,
                    'file'              =>  $path
                ]);
                Driver::where('id', $driverId)->update(['driverstatus' => 'active']);
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
                Driver::where('id', $driverId)->update(['driverstatus' => 'active']);
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
                Driver::where('id', $driverId)->update(['driverstatus' => 'active']);
            }
        }


        return response()->json([
            'success'   => true,
            'message'   => 'Document Updated successfully.',
        ], 200);
    }

    public function DriverDocument($id){
        $data = [];
        $data['driver']         = Driver::where('id',$id)->get();
        $data['document']       = DriverDocument::where('driver_id',$id)->get();
        $data['drugtest']       = DriverDrugTest::where('driver_id',$id)->get();
        $data['miscellaneous']  = DriverMiscellaneous::where('driver_id',$id)->get();

        return response()->json([
            'success'   => true,
            'message'   => 'Document fetched successfully.',
            'data'      => $data
        ], 200);
    }


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

    public function documentInformation($slug,$id){
        $data = DriverDocument::where(['driver_id'=>$id,'slug'=>$slug])
        ->get();
        return response()->json([
            'success'   => true,
            'message'   => 'Document fetched successfully.',
            'data'      => $data,
       
        ], 200);
    }
}

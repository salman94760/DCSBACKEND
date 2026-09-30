<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DriverExperience;
use App\Models\DriverAccident;
use App\Models\DriverTrafficConviction;
use App\Models\Driver;

class DriverExperienceController extends Controller
{
    public function addDriverExperience(Request $request, $id){
        DB::beginTransaction();
        try {

        $driverId = $request->driver_id ?? $id;

        DriverExperience::where('driver_id', $driverId)->delete();
        DriverAccident::where('driver_id', $driverId)->delete();
        DriverTrafficConviction::where('driver_id', $driverId)->delete();

        DriverExperience::create([
            'driver_id'               => $driverId,
            'equipment'               => $request->equipment,
            'equipment_type'          => $request->equipmenttype,
            'from_date'               => $request->fromdate,
            'to_date'                 => $request->todate,
            'miles'                   => $request->miles,
            'accidenthistory'         => $request->noaccidents??0,
            'convictionhistory'       => $request->notrafficconvictions??0,
            'licensedeniedstatus'     => $request->licensedenied,
            'licensesuspendedstatus'  => $request->licensesuspended,
            'licensedeniedremarks'    => $request->licensedeniedexplanation,
            'licensesuspendedremarks' => $request->licensesuspendedexplanation,
        ]);

        if (is_array($request->accidents)) {
            foreach ($request->accidents as $accident) {
                if (
                    empty($accident['date']) &&
                    empty($accident['nature']) &&
                    empty($accident['remark']) &&
                    (int) ($accident['fatalities'] ?? 0) === 0 &&
                    (int) ($accident['injuries'] ?? 0) === 0
                ) {
                    continue;
                }

                DriverAccident::create([
                    'driver_id'  => $driverId,
                    'date'       => $accident['date'] ?? null,
                    'nature'     => $accident['nature'] ?? null,
                    'fatalities' => (int) ($accident['fatalities'] ?? 0),
                    'injuries'   => (int) ($accident['injuries'] ?? 0),
                    'remark'     => $accident['remark'] ?? null,
                ]);
            }
        }

        if (is_array($request->traffic)) {
            foreach ($request->traffic as $traffic) {
                if (
                    empty($traffic['state']) &&
                    empty($traffic['violationType']) &&
                    empty($traffic['ticketDate']) &&
                    empty($traffic['convictionDate']) &&
                    empty($traffic['remark'])
                ) {
                    continue;
                }

                DriverTrafficConviction::create([
                    'driver_id'       => $driverId,
                    'state'           => $traffic['state'] ?? null,
                    'violation_type'  => $traffic['violationType'] ?? null,
                    'ticket_date'     => $traffic['ticketDate'] ?? null,
                    'conviction_date' => $traffic['convictionDate'] ?? null,
                    'remark'          => $traffic['remark'] ?? null,
                ]);
            }
        }
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Driver experience updated successfully.',
            ], 200);
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    public function DriverExperience($id)
    {
        try {
            $driver = Driver::findOrFail($id);
            if($driver){
                $experience = DriverExperience::where('driver_id',$id)->first();
                $accidents = DriverAccident::where('driver_id',$id)->orderBy('date', 'desc')->get();

                $trafficConvictions = DriverTrafficConviction::where('driver_id',$id)->orderBy('ticket_date', 'desc')->get();

                return response()->json([
                    'success' => true,
                    'data' => [
                        'experience'        => $experience,
                        'accidents'         => $accidents,
                        'trafficConvictions'=> $trafficConvictions,
                    ],
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Driver not found.',
                    'error' => $e->getMessage(),
                ], 500);
            }
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to fetch driver experience.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
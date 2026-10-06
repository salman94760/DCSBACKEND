<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permit;

class PermitController extends Controller
{
    public function addCompanyPermit(Request $request)
    {
        $path = '';
        $servicefee = (float) ($request->servicefee ?? 0);
        $govfee = (float) ($request->govfee ?? 0);
        $processingfee = (float) ($request->processingfee ?? 0);
        $discount = (float) ($request->discount ?? 0);

        $total = ($servicefee + $govfee + $processingfee) - $discount;

        $permit = Permit::create([
            'company_id'    => $request->companyId ?? null,
            'permitname'    => $request->permitname ?? '',
            'jurisdiction'  => $request->jurisdiction ?? '',
            'assignto'      => $request->assignto ?? null,
            'status'        => $request->status ?? '',
            'expirydate'    => $request->expirydate ?? null,
            'servicefee'    => $servicefee,
            'govfee'        => $govfee,
            'processingfee' => $processingfee,
            'discount'      => $discount,
            'total'         => $total,
            'docremarks'    => $request->docremarks ?? '',
            'notes'         => $request->notes ?? '',
            'docimage'      => $path
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Permit added successfully.',
            'data' => $permit,
        ], 200);
    }

    public function CompanyPermit(){
        $permit = Permit::with('company')->get();
        return response()->json([
            'success' => true,
            'message' => 'Permit added successfully.',
            'data' => $permit,
        ], 200);
    }
}

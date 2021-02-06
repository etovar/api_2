<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\zipcodes;

class ZipCodesController extends Controller
{
    public function show($id)
    {
        $zipcodeId = $id;
        $zc = zipcodes::where('d_codigo', $zipcodeId)->get();
        if (count($zc)==0) {
            //zip code no encontrado
            return response(['result'=>false, 'message'=>'Zip code does not exist', 'errors'=>'404'],404);
        }else{
            $dataSettlements = [];
            foreach ($zc as $zcOne) {
                $dataSettlements[] = [
                    'key' => $zcOne->id_asenta_cpcons,
                    'name' => $zcOne->d_asenta,
                    'zone_type' => $zcOne->d_zona,
                    'settlement_type' => [
                        'name' => $zcOne->d_tipo_asenta
                    ]
                ];
            }
            return response()->json([
                'zip_code' => $zc[0]->d_codigo,
                'locality' => $zc[0]->d_ciudad,
                'federal_entity' => [
                    'key' => $zc[0]->c_estado,
                    'name' => $zc[0]->d_estado,
                    'code' => $zc[0]->d_estado
                ],
                "settlements" => $dataSettlements,
                'municipality' => [
                    'key' => $zc[0]->c_mnpio,
                    'name' => $zc[0]->d_mnpio
                ]
            ]);
        }
    }
}


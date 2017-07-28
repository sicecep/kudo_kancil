<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class PrimeFactorsController extends BaseController
{
    public function getPrimeFactors(Request $request)
    {
        $result = array();
        $number = $request->input('number');

        if(!is_numeric($number))
        {
            $result['number'] = $number;
            $result['error'] = 'not a number';
            return response()->json($result);
        }  

        if($number > 1000000){
            $result['number'] = (int)$number;
            $result['error'] = 'too big number (>1e6)';
            return response()->json($result);
        }

        $decomposition=array();
        $result['number'] = (int)$number;   
        
        for($candidate = 2; $number > 1; $candidate++){
            for(; $number % $candidate == 0; $number /= $candidate){
                $decomposition[] = $candidate;
            }
        }                                                                               
        $result['decomposition'] = $decomposition;
        return response()->json($result);
    }
}

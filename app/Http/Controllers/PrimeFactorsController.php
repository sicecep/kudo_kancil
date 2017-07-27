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
    	$result['number'] = (int)$number;
    	$decomposition=array();
    	while((($number%2) == 0) && $number > 1){
    		$number /= 2;
    		array_push($decomposition,2);
    	}                                                                                      
    	$result['decomposition'] = $decomposition;
    	return response()->json($result);
    }
}

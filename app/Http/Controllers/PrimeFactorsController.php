<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class PrimeFactorsController extends BaseController
{
    public function getPrimeFactors(Request $request)
    {
    	$result = array();
    	$number = (int)$request->input('number');

    	if(!is_int($number))
    		return response()->json($result);	

    	$result['number'] = $number;
    	$decomposition=array();
    	while((($number%2) == 0) && $number > 1){
    		$number /= 2;
    		array_push($decomposition,2);
    	}                                                                                      
    	$result['decomposition'] = $decomposition;
    	return response()->json($result);
    }
}

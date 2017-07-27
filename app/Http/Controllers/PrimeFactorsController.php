<?php

namespace App\Http\Controllers;

use Input;
use Laravel\Lumen\Routing\Controller as BaseController;

class PrimeFactorsController extends BaseController
{
    public function getPrimeFactors()
    {
    	$input = Input::all();
    	
    	return $input['number'];
    }
}

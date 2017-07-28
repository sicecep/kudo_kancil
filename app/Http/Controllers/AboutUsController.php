<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AboutUsController extends BaseController
{
    public function aboutus()
    {
      return view('welcome');
    }

    public function readme()
    {
      return view('readme');
    }
}

<?php

namespace App\Http\Helpers;

use DB;
use Request;

class Helper
{
    public static function prettyJson($inputArray, $statusCode)
    {
        return response()->json($inputArray, $statusCode, array('Content-Type' => 'application/json'), JSON_PRETTY_PRINT);
    }

    public static function isLogged(){
      if (Request::session()->has('logged', true) && Request::session()->get('logged', true)) {
      $data = Request::session()->all();
      }else {
        Request::session()->put('logged', false);
        return redirect('login');
      }
    }
}

 ?>

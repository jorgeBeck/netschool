<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;

class helpertestController extends Controller
{
  public function getIndex()
      {
          return Helper::prettyJson(['asdf' => 'qwerty'], 200);
      }
}

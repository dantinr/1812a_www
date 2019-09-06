<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function ss()
    {
        $s = Session::all();
        echo '<pre>';print_r($s);echo '</pre>';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $message= "HELLO";
        return view('test', compact('message'));
    }

}

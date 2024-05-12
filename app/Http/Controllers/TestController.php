<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $message= json_encode(User::all());
        return view('test', compact('message'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MathController extends Controller
{
    public function show($num) {
        return view('prime', compact('num'));
//        return view('welcome');
    }
}

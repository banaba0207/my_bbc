<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
        return "Hello World!";
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about() {
        $data = [];
        $data["first"] = 'Yama';
        $data["last"] = 'Taku';
        $last = 'Taku';
        return view('pages.about', compact('last'));
    }
}

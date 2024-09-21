<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index(){
        $data = About::where('id', 1)->first();

        return view('about', compact('data'));
    }
}

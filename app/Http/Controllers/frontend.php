<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class frontend extends Controller
{
    public function index()
    {
        return view("frontend.index");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navigationController extends Controller
{
    public function main(){
        return view('index');
    }
}

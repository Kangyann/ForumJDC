<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function sidebar(){
        return view('components/sidebar');
    }
}

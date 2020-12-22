<?php

namespace App\Http\Controllers;

class FrontBaseController extends Controller
{
    public function renderView($viewPath){
        return view("fe.$viewPath");
    }
}

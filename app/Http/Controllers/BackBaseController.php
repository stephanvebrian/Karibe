<?php

namespace App\Http\Controllers;

class BackBaseController extends Controller
{
    public function renderView($viewPath){
        return view("be.$viewPath");
    }
}

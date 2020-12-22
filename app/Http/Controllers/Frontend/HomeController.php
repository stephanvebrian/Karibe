<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontBaseController;
use Illuminate\Http\Request;

class HomeController extends FrontBaseController
{
    public function home(){
        return view('fe.home');
    }
}

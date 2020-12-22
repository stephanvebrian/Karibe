<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontBaseController;
use Illuminate\Http\Request;
use App\Traits\Controllers\FrontendControllerMethod; 

class HomeController extends FrontBaseController
{
    use FrontendControllerMethod;

    public function home()
    {
        // return view('fe.home');
        return $this->renderView('home');
    }
    
}

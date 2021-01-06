<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackBaseController;
use Illuminate\Http\Request;
use App\User;

class UserController extends BackBaseController
{
    public function index()
    {
        $users = User::all();
        return $this->renderView('user.index')
                        ->with('users', $users);
    }
}

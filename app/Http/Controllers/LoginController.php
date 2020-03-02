<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    public function create()
    {
        if (Gate::allows('crud-user')){
            return view('index');
        }
        abort(403,'Bạn đéo đủ tuổi ');
    }
}

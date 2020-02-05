<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * 用户界面
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function docs() {
        return view('docs');
    }
}

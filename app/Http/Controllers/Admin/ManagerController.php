<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    /*管理员登录*/
    public function login(){
        return view('admin.manager.login');
    }
}

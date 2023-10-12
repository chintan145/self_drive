<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [];
        return view('/admin/index',$data);
    }
    public function login()
    {
        $data = [];
        return view('admin/login',$data);
    }
    public function register()
    {
        $data = [];
        return view('admin/register',$data);
    }
}

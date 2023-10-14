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
    public function car_list_data()
    {
        $data = [];
        return view('admin/car_list',$data);
    }
    public function add_car()
    {
        // $data = [];
        return view('admin/add_car');
    }
}

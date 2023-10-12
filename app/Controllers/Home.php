<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('auth-login/login');
    }
    public function termsandconditions()
    {
        return view('/terms-and-conditions');
    }
    public function carlist() {
        return view('carlist');
    }
    public function myorder() {
        return view('myorder');
    }
    public function carview() {
        return view('carview');
    }
    public function register() {
        return view('register');
    }
}

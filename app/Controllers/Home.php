<?php

namespace App\Controllers;
use App\Models\MasterInformationModel;

class Home extends BaseController
{
    protected $db;
    public function __construct()
    {
        helper('custom');
        $db = db_connect();
        $this->MasterInformationModel = new MasterInformationModel($db);
        
    }
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
        $data['car_features'] = $this->MasterInformationModel->display_all_records('car_features');
        return view('carlist',$data);
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

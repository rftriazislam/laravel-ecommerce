<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_Controller extends Controller{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
 
    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function adminDashboard()
    {
        return view('admin.dash');
    }


public function index(){
    return view('admin.admin_master');//page load name
}
}

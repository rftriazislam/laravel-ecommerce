<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:poweradmin');
    }
 
    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function clientDashboard()
    {
        return view('admin.client');
    }


    public function index()
    {
        return view('admin.login_page');
    }

}

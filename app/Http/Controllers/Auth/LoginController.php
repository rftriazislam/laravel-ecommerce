<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:poweradmin')->except('logout');
    }
 
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }
     
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);
     
        if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
     
            return redirect()->intended('/');
        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
     
            return redirect()->intended('/admin');
        }
        if (Auth::guard('poweradmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
     
            return redirect()->intended('/client');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
     
     
    public function showClientLoginForm()
    {
        return view('auth.login', ['url' => 'poweradmin']);
    }
     
    public function clientLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
     
        if (Auth::guard('poweradmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
     
            return redirect()->intended('/poweradmin');
        }
        return back()->withInput($request->only('email', 'remember'));








    }

}

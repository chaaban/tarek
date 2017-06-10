<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    
    public function __construct(){
        $this->middleware('guest:admin' , ['except' =>['logout']]);
    }
    
    
    public function showLoginForm() {
        return view('auth.admin-login');
    }


    public function login(Request $request) {
        
        // validate the form data
        $this->validate($request , [
              'email'    => 'required|email',
              'password' => 'required|min:6'
        ]);
        
        // Attempt to log the user in
        // remember is optional
        // Auth::guard('admin')->attempt($credentials,$remember);
        if(Auth::guard('admin')->attempt(['email' => $request->email , 'password' => $request->password] , $request->remember)) {
          // if Success , then redirect to their location
          // if intended fail (where they came from) -> they will be redirected to admin.dashboard
          return redirect()->intended(route('admin.dashboard'));  
        }    
        // if unsuccessfull , then redirect to the login with the form data 
        else {
          // return to the form , with the input except ..
          return redirect()->back()->withInput($request->only('email', 'remember')); 
        }
    }
    
    
    //Logout from admin
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
    

}

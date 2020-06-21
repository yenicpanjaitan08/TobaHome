<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

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
    

    // check if authenticated, then redirect to dashboard
    protected function authenticated(Request $request, $user) {
        if ($user->role == "Admin") {
            return redirect('admin');
        } else if ($user->role="Owner") {
            return redirect('owner');
        } else {
            return redirect('visitor');
        }
   }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $username = 'username';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

    protected function redirectTo()
    {
        switch(Auth::user()->role){
            case "Admin":
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;
            case "Owner":
                    $this->redirectTo = '/owner';
                return $this->redirectTo;
                break;
            case "Visitor":
                $this->redirectTo = '/visitor';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }

}
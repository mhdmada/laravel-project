<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use App\Notifications\UserRegisteredSuccessfully;

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
    
    protected $redirectTo = '/products'; //ini default


    // protected function authenticated(Request $request, $user)
    // {
    //     if ( $user->type === 'admin') {
    //         return redirect('/admin');
    //     }

    //     if ( $user->type === 'kurir') {
    //         return redirect('/kurir');
    //     }

    //     if ( $user->status_user === '1') {
    //        return redirect('/products');
    //     }

        
    // }

    // protected function credentials(Request $request)
    // {
    //       return [

    //         'email' => $request->{$this->username()},
    //         'password' => $request->password,
    //         'status_user' => '1',

    //     ];

    // }


     public function username()
    {
        $identity  = request()->get('identity');
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        request()->merge([$fieldName => $identity]);
        return $fieldName;
    }

    protected function validateLogin(Request $request)
    {
            $this->validate(
                $request,
                [
                    'identity' => 'required|string',
                    'password' => 'required|string',
                ],
                [
                    'identity.required' => 'Username or email is required',
                    'password.required' => 'Password is required',
                ]
            );

    }



        /**
         * @param Request $request
         * @throws ValidationException
         */
    

    protected function sendFailedLoginResponse(Request $request)
        {
            $request->session()->put('login_error', trans('auth.failed'));
            throw ValidationException::withMessages(
                [
                    'error' => [trans('auth.failed')],
                ]
            );
        }





    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}


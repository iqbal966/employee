<?php

namespace App\Http\Controllers\Auth;

use App\Rules\Captcha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        $login = request()->input('staff_id');

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'staff_id';
        request()->merge([$field => $login]);

        return $field;
    }


    protected function validateLogin(Request $request)
    {
        $messages = [
            'staff_id.required' => 'Email or username cannot be empty',
            'email.exists' => 'Email or username already registered',
            'password.required' => 'Password cannot be empty',
        ];

        $request->validate([
            'staff_id' => 'required|string',
            'password' => 'required|string',
            'email' => 'string|exists:users',
        ], $messages);
    }
}

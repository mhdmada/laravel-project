<?php

namespace App\Http\Controllers\Auth;


use App\Notifications\UserRegisteredSuccessfully;
use App\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }


    /**
     * Register new account.
     *
     * @param Request $request
     * @return User
     */


     protected function register(Request $request)
    {
        /** @var User $user */
        $photo ='user.png';

        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'photo'    =>  $photo,
            'nik'      => 'required|string|max:255',
            'nama_ktp' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        try {
            $validatedData['password']        = bcrypt(array_get($validatedData, 'password'));
            $validatedData['activation_code'] = str_random(30).time();
            $user                             = app(User::class)->create($validatedData);
        } catch (\Exception $exception) {
            dd($exception);
            logger()->error($exception);
            return redirect()->back()->with('message', 'Gagal daftar user.');
        }
        $user->notify(new UserRegisteredSuccessfully($user));
        return redirect()->back()->with('message', 'Berhasil membuat akun baru. Silahkan cek email dan aktifkan akun anda.');
    }


    /**
     * Activate the user with given activation code.
     * @param string $activationCode
     * @return string
     */

    public function activateUser(string $activationCode)
    {
        try {
            $user = app(User::class)->where('activation_code', $activationCode)->first();
            if (!$user) {
                return "The code does not exist for any user in our system.";
            }
            $user->status_user     = 1;
            $user->activation_code = null;
            $user->save();
            auth()->login($user);
        } catch (\Exception $exception) {
            logger()->error($exception);
            return "Whoops! something went wrong.";
        }
        return redirect()->to('/');
    }


}

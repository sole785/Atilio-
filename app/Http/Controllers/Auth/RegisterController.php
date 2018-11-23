<?php

namespace AtilioDominguez\Http\Controllers\Auth;

use AtilioDominguez\User;
use AtilioDominguez\Http\Controllers\Controller;
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
<<<<<<< HEAD
    protected $redirectTo = '/productos'; //redireccionar a /mail cuando se solucione el problema del registro
=======
    protected $redirectTo = '/home';
>>>>>>> parent of 77f2aab... 1

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'cuit' => 'required|max:12|unique:users',
            'razon_social'=>'required|string|max:255',
            'telefono'=> 'required|max:10',
            'celular'=> 'required|max:12',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \AtilioDominguez\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cuit' => $data['cuit'],
            'razon_social' => $data['razon_social'],
            'telefono' => $data['telefono'],
            'celular' => $data['celular'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

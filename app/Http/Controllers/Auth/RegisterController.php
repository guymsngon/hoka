<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
    protected $redirectTo = RouteServiceProvider::CONFIRM;

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
            'last_name' => [],
            'code_postal' => [],
            'courrie' => [],
            'name_societe' => [],
            'siret' => [],
            'name' => ['required', 'string', 'max:255'],
            'town' => ['required', 'string', 'max:25'],
            'country' => ['required', 'string', 'max:25'],
            'phone' => ['required', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(isset($data['name_societe']) && isset($data['siret'])){
            return User::create([
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'code_postal' => $data['code_postal'],
                'town' => $data['town'],
                'country' => $data['country'],
                'courrie' => $data['courrie'],
                'name_societe' => $data['name_societe'],
                'siret' => $data['siret'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);    
        }else{
            return User::create([
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'code_postal' => $data['code_postal'],
                'town' => $data['town'],
                'country' => $data['country'],
                'courrie' => $data['courrie'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}

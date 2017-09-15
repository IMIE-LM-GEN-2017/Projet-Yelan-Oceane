<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pseudo' => 'required|string|max:60',
            'email' => 'required|string|email|max:60|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'lastname' => 'required|string|max:60',
            'firstname'=>'required|string|max:60',
            'birthdate'=>'required|string|max:60',
            'description' =>'required|string|max:500',
            'adressname' =>'required|string|max:100',
            'pc'=>'required|string|max:10',
            'city'=>'required|string|max:60',
            'department'=>'required|string|max:60',
            'region'=>'required|string|max:60',
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
        return User::create([
            'pseudo' => $data['pseudo'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'lastname' => $data['lastname'] ,
            'firstname'=> $data['firstname'],
            'birthdate'=> $data['birthdate'],
            'description'=>$data['description'],
            'adressname'=>$data['adressname'],
            'pc'=> $data['pc'],
            'city'=> $data['city'],
            'department'=> $data['department'],
            'region'=> $data['region'],
        ]);
    }
}

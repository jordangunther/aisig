<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\UserCreated;
use App\Mail\Welcome;
use App\Mail\AdvanceRequest;
use App\Mail\AdminRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

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
    protected $redirectTo = '/courses';

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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'background_image' => 'required',
            'description' => 'required|min:100',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'user_type' => $data['user_type'],
            'user_image' => 'user_sky.jpg',
            'background_image' => $data['background_image'],
            'password' => bcrypt($data['password']),
            'description' => $data['description'],
        ]);
        
//        *** Commented out until mail server is functioning ***
//        if ($data['user_type'] === 'request_advance'){
//            Mail::to('jordankgunther@gmail.com')->send(new AdvanceRequest($user));
//        }
//        if ($data['user_type'] === 'request_basic_admin'){
//            Mail::to('jordankgunther@gmail.com')->send(new AdminRequest($user));
//        }
//        Mail::to($user)->send(new Welcome($user));
//        Mail::to('jordankgunther@gmail.com')->send(new UserCreated($user));

        return $user;

    }
}

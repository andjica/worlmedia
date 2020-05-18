<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Account;
use App\Skill;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'category_id' => null,
            'city_id' => null
            
        ]);

        $userId = $user->id;

        if($user)
        {
            Account::create([
                'user_id' => $user->id,
                'acc_type_id' => 1,
                'valid_until' => Carbon::now()->addDay(3)
            ]);

            Skill::create([
                'skill_one' => "write some skill",
                'percent_one' => 98,
                'skill_two' => "like html",
                'percent_two' => 89,
                'skill_three' => "add your skill",
                'percent_three' => 89,
                'skill_four' => "html",
                'percent_four' => 89,
                'skill_five' => "html",
                'percent_five' => 89,
                'skill_six' => "html",
                'percent_six' => 89,
                'skill_seven' => "html",
                'percent_seven' => 89,
                'skill_eight' => "html",
                'percent_eight' => 89,
                'skill_nine' => "html",
                'percent_nine' => 89,
                'skill_ten' => "html",
                'percent_ten' => 89,
                'user_id' => $userId
        
            ]);
        }
        return $user;
    }
}

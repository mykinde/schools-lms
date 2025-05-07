<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
            'lastname' => 'required|string|max:25',
            'firstname' => 'required|string|max:25',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'level' => ['required', 'string', 'max:255'],
            'academic_session' => ['required', 'string', 'max:255'],
            'matriculation_number' => 'required|string|min:11|unique:users|confirmed',
           // 'matriculation_number' => 'required|string|min:11||max:11|unique:users|confirmed',
            'college' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'gender' => 'required',
       //     'accesscode' => ["required" , "max:255", "regex:(20242025|2024/2025)"],
        ],

        [
            'lastname.required' => "Surname field is required",
            'lastname.required' => "Firstname/Personal field is required",
            'email.email' => "Invalid Email Format ",
            'email.unique' => "User Email Already Exist",
            'password.size' => "Form Password Must Be 8 Characeters or More",
            'vocations.required' => "You must select a Vocation",
            'level.required' => "You must select a Level",
            'academic_session.required' => "You must select Aacademic Session",
            'department.required' => "You must select a Department",
            'college.required' => "You must belong to a College",
            'matriculation_number.required' => "You must supply Matriculation Number",
            //'department.*.required' => "You must select a Department", array
			'matriculation_number.size' => "Matric-No can't be less than 11 Characeters e.g 2410xxxxxxx / Applicatn No is not allowed",
         ]


    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
           'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'name' =>$data['firstname']. ' ' . $data['lastname'] . ' ' . $data['middlename'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'keyword' => $data['password'],
        //    'imail' => $data['firstname'].$data['lastname'].'@mtu.edu.ng',
            'matriculation_number' => $data['matriculation_number'],
            'level' => $data['level'],
            'academic_session' => $data['academic_session'],
            'gender' => $data['gender'],
            'college' => $data['college'],
            'department' => $data['department'],
            'birthyear' => $data['birthyear'],
            'entryyear' => $data['entryyear'],
            'nationality' => $data['nationality'],
            'stateoforigin' => $data['stateoforigin'],
           'localgovt' => $data['localgovt'],
          'religion' => $data['religion'],
          'region' => $data['region'],

        'denominations' => $data['denominations'],
        'parish' => $data['parish'],
        'clocation' => $data['clocation'],
        'stateoforigin' => $data['stateoforigin'],
       'parents' => $data['parents'],
      'address_state' => $data['address_state'],

        ]);
    }
}

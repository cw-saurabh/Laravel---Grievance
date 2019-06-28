<?php

namespace App\Http\Controllers\Auth;

use Session;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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

    protected $redirectTo = '/p';

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
        $n=7;
        $pw=0;
        $num_str = sprintf("%06d", mt_rand(1, 999999));
        while($n>0){
            
            $p=mt_rand(1, 9);
            $q=mt_rand(1, 9);
            $r=$p*$q;
            $r=$r*$r*($p+$q);
            $pw=($pw*10)+$p+$q+$r;
            $n=$n-1;
        }
        
        $pw=(string)$pw;
        
        Session::put('pw', $pw);
        Session::put('email',$data['email']);
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            
            'password' => Hash::make($pw),
        ]);
        

        // return $email;
        // Mail::send(['text'=>'mail','name'=>$name,'email'=>$email,'password'=$password], $data, function($message) use ($email,$name,$password){
        //     $message->to($remail, $rename)->subject
        //        ('New Grievance');
        //     $message->from('ss.abcbe.0506@gmail.com','Grievance Cell VESIT');
        //  });

    }

    
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;

class SessionController extends Controller
{
    public function set(Request $request){

        $email=$request->input('email');    
        $request->session()->put('email', $email);
        
        $role=$request->input('role');    
        $request->session()->put('role', $role);
        
        $cat=$request->input('cat');    
        $request->session()->put('cat', $cat);

        if($role==0)
        return redirect('/a');
        else if($role==2)
        return redirect('/u');
        else if($role==1)
        return redirect('/c');
    }
}

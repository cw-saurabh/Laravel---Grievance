<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notification;
use Illuminate\Support\Facades\DB;
use App\user;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=Auth::id();
        $user = user::find($id);
        $id=$user->email;
        $role=$user->role;
        
        $notis = DB::table('notifications')->select('id','send_email','msg','subject')->where('rec_email',$id)->where('status',0)->orderBy('created_at','Desc')->get();
        $vnotis = DB::table('notifications')->select('id','send_email','msg','subject')->where('rec_email',$id)->where('status',1)->orderBy('created_at','Desc')->get();
        $data = [
            'notis'  => $notis,
            'vnotis' => $vnotis,
            'id' => $id
        
        ];
        
        
        if($role==0)
        return view('admin.notifications')->with('data',$data);
        else if($role==1)
        return view('cm.notifications')->with('data',$data);
        else if($role==2)
        return view('user.notifications')->with('data',$data);
    }
    
    

    public function changeStatus(Request $request)
    {
        $id=$request->id;
        $id2=Auth::id();
        $user = user::find($id2);
        $id2=$user->email;
        $role=$user->role;
        
        DB::table('notifications')
            ->where('id', $id)
            ->update(['status' => 1]);
      
        if($role==0)
        return redirect('/a/notifications');
        else if($role==2)
        return redirect('/u/notifications');
        else if($role==1)
        return redirect('/c/notifications');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

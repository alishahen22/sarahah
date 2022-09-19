<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Postcontroller extends Controller
{
    
    public function ali()
    {
        $info = User::all();
              return $info;
    }
    public function index()
    {
        $info = User::find(Auth::id());
        $messages = $info->masseges;



        return view('home',compact('messages'));
    }


    public function create($id)
    {
            $name = User::where('username',$id)->firstOrFail();
            return view ('message',compact('name'));
    }


    public function store(Request $request)
    {
       $posts = new message();
       $posts->body = $request->body;
       $posts->user_id = $request->user_id;
        $posts->save();
       return redirect()->back()->with('msg','تم ارسال الرسالة بنجاح');


    }

    public function show()
    {

    }


    public function edit()
    {
        $info = User::find(Auth::id());

        return view('setting',compact('info'));
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
        if(Auth::user()->username !=$request->username){
        $request->validate([
            'username' => ['required', 'string','alpha_dash', 'max:255', 'unique:users']
        ]);
    }
       $user = User::find($id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->username = $request->username;
       $user->save();
       return redirect()->back()->with('msg','تم تعديل بياناتك بنجاح');
    }


    public function destroy($id)
    {
         message::destroy($id);
         return redirect()->back()->with('msg','تم حذف الرسالة بنجاح');

    }
}

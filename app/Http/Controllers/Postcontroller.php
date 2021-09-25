<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = User::find(Auth::id());
        $messages = $info->masseges;



        return view('home',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
            $name = User::findOrFail($id);
       // return "hi " . $name->name;
        return view ('message',compact('name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $posts = new message();
       $posts->body = $request->body;
       $posts->user_id = $request->user_id;
        $posts->save();
       return redirect()->back()->with('msg','تم ارسال الرسالة بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
       $user = User::find($id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->save();
       return redirect()->back()->with('msg','تم تعديل بياناتك بنجاح');
    }


    public function destroy($id)
    {
         message::destroy($id);
         return redirect()->back()->with('msg','تم حذف الرسالة بنجاح');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
        $this->middleware('admin',['except'=> ['edit','update']]);
    }

    public function index()
    {
        $users = User::where('level','<',2)->get();
        return view('admin.users',compact('users'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.user');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $user = User::find($id);
        foreach($user->comments as $comment)
            $comment->delete();

        $user->delete();
        return redirect('users');
    }
    public function setwriter($id)
    {
        $user = User::find($id);
        if($user->level == 0)
            $user->level = 1;
        $user->save();
        return redirect('users');
    }
    public function unsetwriter($id)
    {
        $user = User::find($id);
        if($user->level == 1)
            $user->level = 0;
        $user->save();
        return redirect('users');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function users(){
        $users = User::all();
        return view('admin.users')->with('users',$users);
    }

    public function EditUser(Request $req , $id){
        $user = User::find($id);

        return view('admin.editUser')->with('user',$user);
    }

    public function UpdateUser($id,Request $req){
        $user = User::find($id);

        // $user->name = $req->name;
        $user->usertype = $req->usertype;
        $user->update();

        return redirect('/admin/users')->with('success','Your data is updated.');
    }

    public function DeleteUser($id){
        $user = User::find($id);

        $user->delete();

        return redirect('/admin/users')->with('success','User has been deleted.');
    }
}

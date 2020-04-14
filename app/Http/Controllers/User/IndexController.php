<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user(){
        $user = Auth::user();
        return view('user.index')->with('user',$user);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $user = Auth::user();
        if (implode($user->roles()->get()->pluck('name')->toArray()) != 'admin'){
            return view('user.update')->with('user',$user);
        }else{
            return redirect('/user')->with('denied','You cant change data of admin');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $req
     * @return \Illuminate\Http\Response
     */
    public function submit(UserRequest $req){
        $user = Auth::user();


        if ($req->has('image')){
            $uploadedimage = $req->file('image');
            $imagename = time().'.'. $uploadedimage->getClientOriginalExtension();
            $imagepath = public_path('/user_images/');
            $uploadedimage->move($imagepath,$imagename);
            $user->image = $imagename;
        }
        $user->email = $req->email;
        $user->name = $req->name;
        $user->phone = $req->phone;
        $user->birthday = $req->birthday;
        $user->sex = $req->sex;

        $user->update();


        return redirect('/user')->with('success','Your data has been changed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
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

<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')->with(['feeds'=>Contact::paginate(2)]);
    }

    public function create(){
        return view('admin.create');
    }

    public function submit(ContactRequest $req){

        if ($req->has('image')){
            $image = $req->file('image');
            $name = time().'.'. $image->getClientOriginalExtension();
            $path = public_path('/images/');
            $image->move($path,$name);
            Contact::create([
                'subject' => $req->subject,
                'text' => $req->text,
                'image' => $name,
            ]);
        }else{
            Contact::create([
                'subject' => $req->subject,
                'text' => $req->text,
                'image' => '/default/default-image.jpg'
            ]);
        }



        return redirect('admin/dashboard')->with('success','You have created new Post.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function EditFeed($id,Request $req)
    {
        $feed = Contact::find($id);

        return view('admin.editFeed')->with('feed',$feed);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateFeed(ContactRequest $req, $id)
    {
        $feed = Contact::find($id);

        $image = $req->file('image');
        $name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $name);

        $feed->subject = $req->subject;
        $feed->text = $req->text;
        $feed->image = $req->image;

        $feed->update();

        return redirect('admin/dashboard')->with('success','Your contact data is updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteFeed($id)
    {
        $feed = Contact::find($id);

        if(File::exists(public_path('images/' . $feed->image))){
            File::delete(public_path('images/'. $feed -> image));
        }

        $feed->delete();
        return redirect('admin/dashboard')->with('success',"Your contact data has been deleted.");
    }
}

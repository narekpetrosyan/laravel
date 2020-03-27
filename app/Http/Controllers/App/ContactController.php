<?php

namespace App\Http\Controllers\App;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth',['except' => ['getData','showData']]);
    // }

    public function index(){
        return view('contact.index');
    }

    // public function create(ContactRequest $req){

    //     $image = $req->file('image');
    //     $name = uniqid() . '.' . $image->getClientOriginalExtension();
    //     $image->move(public_path('images'), $name);

    //     Contact::create([
    //         'name' => $req->name,
    //         'email' => $req->email,
    //         'subject' => $req->subject,
    //         'text' => $req->text,
    //         'image' => $name
    //     ]);
    //         return redirect(route('contact.getData'))->with('success','Успешно добавлено.');
    // }

    public function getData(){
        return view('contact.feedback',['data' => Contact::paginate(2)]);
    }

    public function showData($id){
        $one_feed = Contact::find($id);
        return view('contact.one_feed',['data' => $one_feed]);
    }

    // public function editData($id){
    //     $data = Contact::find($id);

    //     return view('contact.editData',['data' => $data]);
    // }

    // public function updateData($id,ContactRequest $req){  //id first parametr
    //     $data = Contact::find($id);

    //         $data->name = $req->name;
    //         $data->email = $req->email;
    //         $data->subject = $req->subject;
    //         $data->text = $req->text;
    //         $data->save();

    //         return redirect()->route('contact.showData',$id)->with('success','Данные успешно обнавлены.');
    // }

    // public function destroyData($id){
    //     $contact = Contact::find($id);

    //     if(File::exists(public_path('images/' . $contact->image))){
    //         File::delete(public_path('images/'. $contact -> image));
    //     }

    //     $contact -> delete();

    //     return redirect()->route('contact.getData')->with('success','Сообщение было удалено.');
    // }
}

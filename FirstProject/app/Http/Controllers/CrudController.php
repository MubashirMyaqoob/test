<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
   public function first(){
    $user = "";
    $url = url('/register');
    $title = "Register Form";
    $simple = compact('url','title','user');
    return view('form')->with($simple);
   }
   public function second(Request $req){
    $user = new Crud;
    $req -> validate([
    'email' => 'required|email',
    'pwd' => 'required',
    'cpwd' => 'required|same:pwd'     
    ]);
    $user->email = $req['email'];
    $user->password = $req['pwd'];
    $user->save();
   }
   public function show(){
    $data = Crud::all();
    $simple = compact('data');
    return view('/table')->with($simple);
   }
   public function update(Request $req,$id){
    $user = Crud::find($id);
    if (is_null($user)) {
        return view('table');
    }else{
    $title = 'Update Your Information';
    $url = url('/update').$id;
    $simple = compact('title','url','user');
    return view('/form')->with($simple);
   }
  
   }
   public function fourth(Request $req , $id){
    $users = Crud::find($id);
    $users->email = $req['email'];
    if (is_null($req['pwd'])) {
        //not found
        $users->save();
    }else{
        //found
    $users->password = $req['pwd'];
    $users->save();
    }
    return redirect('/view');
   }
   public function delete($id){
    $users = Crud::find($id)->delete();
    return redirect()->back();
   }
}

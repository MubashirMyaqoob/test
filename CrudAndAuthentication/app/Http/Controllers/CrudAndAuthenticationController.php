<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
class CrudAndAuthenticationController extends Controller
{
    public function home(){
        $url = url('/');
        $title = 'Registration Form';
        $data = '';
        $simple = compact('url','title','data');
        return view('form')->with($simple);
    }
    public function register(Request $request){
        $request -> validate([
            'email' => 'required|email',
            'pwd' => 'required',
            'cpwd' => 'required|same:pwd',
            'image'=> 'required'
        ]);
        $users = new Crud;
        $users->email = $request['email'];
        $users->password= $request['pwd'];
        $pimage = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'),$pimage);
        $users->image = $pimage;
        $users->save();
        return redirect('/show');
    }
    public function view(){
        $users = Crud::all();
        $simple = compact('users');
        return view('table')->with($simple);
    }
    public function delete($id){
        $find = Crud::find($id);
        if (is_null($find)) {
            //not found 
            return redirect()->back();
        }else{
            //found
            $find->delete();
            return redirect()->back();
        }
    }
    public function check($id){
        $data = Crud::find($id);
        if (is_null($data)) {
            //not found 
            return redirect()->back();
        }else{
            //found
        $url = url('/')."/update/".$id;
        $title = 'Update your information';
        
        $simple = compact('url','title','data');
        return view('form')->with($simple);
    }
    }
    public function update($id,Request $request){
        $data = Crud::find($id);
        if (is_null($data)) {
            //not found 
            return redirect()->back();
        }else{
            //found
            $request -> validate([
                'email'=>'required|email',
                'pwd'=> 'required',
                'cpwd'=>'required|same:pwd' 
            ]);
            $data->email = $request['email'];
            $data ->password = $request['pwd'];
            if (is_null($request->file('image')) ) {
                // empty
                $data->save();
            return redirect('/show');
            }else{
            $data->image = $request->file('image')->store('upload');
            $data->save();
            return redirect('/show');
        }
     }
    }

    public function new(Request $request){
        $request->session()->put('user_name','mubashir');
        return redirect('show');
        }

        public function showTrash(){
            $users = Crud::onlyTrashed()->get();
            $simple = compact('users');
            return view('trash')->with($simple);
        }

        public function restore($id){
        $data = Crud::withTrashed()->find($id);
        if (is_null($data)) {
            //not found 
            return redirect()->back();
        }else{
            //found
        $data->restore();
        return redirect('/trash');
    }
    }

    public function forceDelete($id){
        $data = Crud::withTrashed()->find($id);
        if (is_null($data)) {
            //not found 
            return redirect()->back();
        }else{
            //found
        $data->forceDelete();
        return redirect('/trash');
    }
    }
}

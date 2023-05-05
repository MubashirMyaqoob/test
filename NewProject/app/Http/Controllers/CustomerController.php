<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function first(){
        $users = "";
        $url = url('/register');
        $title = 'User Registration';
        $simple = compact('url','title','users');
        return view('/form')->with($simple);
    }
    public function second(Request $req){
        
        $req-> validate([
            'email'=> 'required|email',
            'pwd'=> 'required',
            'Cpwd' => 'required|same:pwd'
        ]);
        $users = new Customers;
        $users->email = $req['email'];
        $users->password = md5($req['pwd']);
        $users->save();
        return redirect('/register');
    }
    public function third(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
           $select = Customers::where('email','LIKE',"%$search%")->orwhere('password','LIKE',"%$search%")->get();
        }
        else{
           $select = Customers::paginate(20); 
        }
        $button1 = 'Update';
        $button2 = 'Trash';
        $button3 = 'Trash List';
        $url1 = url('/update');
        $url2 = url('/trash');
        $url3= url('/showtrash');
        $simple = compact('select','button1','button2','button3','url1','url2','url3',"search");
        return view('view')->with($simple); 
    }
    public function fourth($id){
        $users = Customers::find($id);
        if (is_null($users)) {
            //not found
            return redirect('/view');
        }else{
            //found
        $url = url('/update/').$id;
        $title = "Update Your Details";

        $simple = compact('users','title','url');
        return view('form')->with($simple);
    }
    }
    public function fifth($id,Request $req){
        $users = Customers::find($id);
        $users->validate([
            'email'=> 'required|email',
            'pwd'=> 'required',
            'Cpwd'=>'required|same:pwd'
        ]);
        $users->email = $req['email'];
        if (is_null($req['pwd'])) {
            //not change pwd
        }else{
            $users->password = md5($req['pwd']);
        }
        $users->save();
        return redirect('/view');
    }
    public function sixth($id){
        $users = Customers::find($id);
        if(is_null($users)){
            //not found
            return redirect('/view');
        }else{
        $users = Customers::find($id)->delete();
        return redirect()->back();
    }
    }
    public function showTrash(){
        $select = Customers::onlyTrashed()->get();
        $button1 = 'Restore';
        $button2 = 'Delete';
        $button3 = 'User List';
        $url1 = url('/Restore');
        $url2 = url('/Delete');
        $url3 = url('/view');
        
        return view('view',compact('select','button1','button2','button3','url1','url2','url3'));
    }
    public function delete($id){
        $users = Customers::withTrashed()->find($id);
        if (is_null($users)) {
            // not fount
            return redirect()->back();
        }else{
            //found
            $users->forcedelete();
            
            return redirect('/showtrash');
        }
    }
    public function restore($id){
        $users = Customers::withTrashed()->find($id);
        if (is_null($users)) {
            // not found
            return redirect()->back();
        }else{
            // found
            $users->restore();
            
            return redirect('/showtrash');
        }
    }
}

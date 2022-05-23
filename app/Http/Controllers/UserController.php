<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        
        //$user=Auth::user();
        //return view('moncompte',compact('user'));
        return view('moncompte');
    }

    public function updatecompte(Request $request){
        
        $filename=$request->photo;
        if($request->hasFile('pdp')){
            $file=$request->file('pdp');
            //$extention=$file->getClientOriginalExtension();
            //$name=$file->getClientOriginalName();
            $filename=$file->getClientOriginalName();
            $file->move('uploads/comptes/',$filename);
            
            
        }
        $user = User::find($request->id)
            ->update([
                'name' =>$request->name, 
                'email'=>$request->email, 
                
                'photo'=>$filename,
                'surnom'=>$request->surname,
                'tel'=>$request->tel,
                'adresse'=>$request->adresse, 
            ]);

        session()->flash('message1',"MA compte bien enregistré");
        

        return redirect()->back();
    }
}

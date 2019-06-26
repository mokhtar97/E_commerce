<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use Auth;
use Hash;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }  
    
    
   
    
    public function checklogin(Request $request)
    {
        $this->validate($request,[
            'email' =>'required|email',
            'password' =>'required|alphaNum|min:3'
        ]);

        $user_data=array(
            'email' =>$request->get('email'),
            'password' =>$request->get('password')
        );
        
        if(Auth::attempt($user_data))
        {
           return redirect('user');
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
    }
        public function logout()
        {
            Auth::logout();
            return redirect('login');
        }

        public function checksign(Request $request)
        {
            
            $this->validate($request,[
                'name'=>'required',
                'email' =>'required|email',
                'password' =>'required|alphaNum|min:3'
            ]);
    
                $user=new User;
                $user->name=$request->get('name');
                $user->email=$request->get('email');
                $user->password=Hash::make($request->get('password'));
                $user->save();
               return redirect('login');
        }
    }


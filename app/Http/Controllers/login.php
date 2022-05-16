<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function login(Request $req){
        echo "authentication logic to be written here.";
        // validation logic
        $req->validate([
            'username'=>'required',
            'password'=>'required | min:5'
        ]);
        $data = $req->input();

        // return ($_SESSION);
        $req->session()->put('session', $data);
        // return session('session')['username'];
        $req->session()->flash('user', $data['username']);
        return redirect('/');
    }
}

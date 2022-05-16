<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($id){
        echo $id." ";
        echo "Hello from controller";
        // return ['id'=>$id, 'age'=>26];
        // return array('id'=>$id, 'age'=>26);
        return view('hello', ['id'=>$id, 'name'=>'Tuktuk']);
    }
}

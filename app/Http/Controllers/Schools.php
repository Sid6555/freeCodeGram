<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class Schools extends Controller
{
    public function listSchools(){
        School::all();
        return "List schools";
    }
}

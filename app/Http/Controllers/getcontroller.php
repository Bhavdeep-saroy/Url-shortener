<?php

namespace App\Http\Controllers;
use App\Models\getdatamodel;
use Illuminate\Http\Request;

class getcontroller extends Controller
{
    public function getdata(){
        $data = getdatamodel::all();
        return view('shortUrlView', ['data' => $data]);
    }
    
}

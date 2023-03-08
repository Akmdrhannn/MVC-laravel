<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\mhs;

class userController extends Controller
{
    public function index()
    {
        #simple variable
        $data['array'] = 'Raihan'; 
        $data['modelUser']=User::find(1);
        $data['modelMhs']=mhs::all();
        return view('index',$data);
    }
}

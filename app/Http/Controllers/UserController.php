<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('user.index',['users'=>$data]);
        //user.index [user => folder name , index => file name] on views
    }

}

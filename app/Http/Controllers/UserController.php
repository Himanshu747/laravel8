<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }
    public function create(){
        return ['id'=>'1','name'=>'himanshu','designation'=>'software engineer'];
    }
    public function update($userid){
        echo $userid;
    }
}

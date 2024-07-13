<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view("login");
    }

    public function store(Request $request){
        $data = $request->validate([
            'fname'=>'required',
            'lname'=>'required',
        ]);
        Student::create($data);
        return view('welcome');
    }
}

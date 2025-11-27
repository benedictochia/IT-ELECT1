<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            (object)['name'=>'John','email'=>'john@mail.com','bio'=>'Hi','active'=>1],
            (object)['name'=>'Anna','email'=>'anna@mail.com','active'=>0],
        ];

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = (object)[
            'name'=>'John Doe',
            'email'=>'john@mail.com',
            'bio'=>'Developer',
            'active'=>1,
            'phone'=>null
        ];

        return view('users.show', compact('user'));
    }
}

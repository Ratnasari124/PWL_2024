<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }
    /*public function greeting()
    {
        return view('blog.hello', ['name' => 'Ratnasari']);
    }*/
    public function greeting()
    {
        return view('blog.hello')
            ->with('name', 'Ratnasari')
            ->with('occupation', 'Astronaut');
    }
}

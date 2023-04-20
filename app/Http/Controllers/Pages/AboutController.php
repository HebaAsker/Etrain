<?php

namespace App\Http\Controllers\Pages;

use App\Models\User;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $users=User::first(); //to get number of students and teachers
        return view('pages.about',compact('users'));
    }
}

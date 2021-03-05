<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileConntroller extends Controller
{
    public function index()
    {
        return view('account.profile');
    }
}

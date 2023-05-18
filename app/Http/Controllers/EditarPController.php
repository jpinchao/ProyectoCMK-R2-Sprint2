<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarPController extends Controller
{
    public function index()
    {
        return view('profile.edit_profile');
    }
}

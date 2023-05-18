<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class UserPController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        return view('home', compact('user'));
       
    }
}

<?php

namespace App\Http\Controllers\NormalController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //---------- REDIRECT HOME/ADMIN ---------
    public function redirect()
    {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('normal.home');
    }


    //---------- ABOUT ---------
    public function about()
    {
        return view('normal.about');
    }


    //---------- CONTACT ---------
    public function contact()
    {
        return view('normal.contact');
    }
}

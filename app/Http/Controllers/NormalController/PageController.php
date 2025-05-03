<?php

namespace App\Http\Controllers\NormalController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function redirect()
    {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } 
        return redirect()->route('normal.home');
    }


    public function about() {
        return view('normal.about');
    }


    public function contact() {
        return view('normal.contact');
    }
}

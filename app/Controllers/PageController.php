<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function profile() {
        if(session()->get('email'))
            return view('profile');
        else return redirect()->to('login');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }
}

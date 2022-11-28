<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webcontroller extends Controller
{
    //
    public function home(){
        return redirect('carrent');
    }
    public function beranda(){
        return view('beranda');
    }
    public function tentang(){
        return view('tentang');
    }
    public function cars(){
        return view('cars');
    }
    public function blog(){
        return view('blog');
    }
    public function kontak(){
        return view('kontak');
    }
    public function tips(){
        return view('tips');
    }
    public function pw(){
        return view('pw');
    }
    public function am(){
        return view('adminmobil');
    }
    public function ab(){
        return view('adminblog');
    }
    public function admin(){
        return view('admin');
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
}

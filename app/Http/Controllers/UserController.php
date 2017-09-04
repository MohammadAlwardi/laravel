<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage()  // فانكشن لعرض صفحة الهوم بيج
    {
        return view('welcome');
}
public function about(){          // فانكشن لعرض صفحة الاباوت
    return view('about');
}
}


//يتم استدعاء الفاكشن في  الراوتس داخل صفحة الويب
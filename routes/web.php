<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'UserController@homepage');  //استدعاء الفاكشن واظافة راوت لها
Route::get('aboutus', 'UserController@about');



//  يتم اظافة الفانكشن في فولدر الاب في يوز كونترول
// يتم خلق اليوزر كونترول باستخدام الامر المذكور في التتوريال
//'/', 'UserController@homepage' اي الراوت هو الصفحة الرئيسية واستخدم الفايل يوزر كونترول واسم الفانكشن هو هوم بيج
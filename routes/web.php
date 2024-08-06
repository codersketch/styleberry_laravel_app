<?php

use App\Models\job;
use App\Models\Service;
use App\Models\services;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        'services' =>service::all()
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/saloon', function () {
    return view('saloon');
});

Route::get('/services', function () {
    return view('services',[
        'services' =>service::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/careers', function ()  {
    // $jobs = job::all();
    // dd($jobs[0]->salary);
    return view('careers', [
        'jobs' => job::all()
    ]);
});
Route::get('/careers/{id}', function ($id)  {
    $job=job::find($id);

    return view('career', ['career' => $job]);
});


Route::get('/admin', function () {
    return view('admin');
});
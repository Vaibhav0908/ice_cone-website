<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Cartcontroller;
// use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;


Route::get('/', function(){
    return view('sign_in');
});

Route::POST('/', function(Request $request){
    session()->flush();
    return redirect("/main");
});

Route::get('/common_page', function(){
    return view('com_layouts');
});

Route::POST('/common_page', function(Request $request){
    $user=$request->user;

    session(['user' => $user]);
    return redirect('/main');
    // ->with('user', $user);
});

Route::get('/main', function () {
    return view('index');
});

Route::get('/about_page', function(){
    return view('about');
});

Route::get('/service_page', function(){
    return view('services');
});


Route::get("/contact_page", function(){
    return view("contact");
});

Route::get("/enquiry_page", function(){
    return view("enquiry");
});

Route::POST("/contact_page", function(Request $request){
    $fname = $request->Fname;
    $lname = $request->Lname;
    $mail = $request->email;
    $desc = $request->desc;

    return redirect("/enquiry_page")
        ->with('firstname', $fname)
        ->with('lastname', $lname)
        ->with('email', $mail)
        ->with('desc', $desc);
});

Route::get("/powerbi_page", function(){
    return view("powerbi");
});

Route::get('reset_pass_page', function(){
    return view('reset_pass');
});

Route::POST('/reset_pass_page', function(Request $request){
    $pass = $request->password;
    $conf_pass = $request->conf_password;
        
    return redirect('/')
        ->with('pass', $pass)
        ->with('conf_pass', $conf_pass);
});

Route::get("/cart_page", function(){
    return view('cartview');
});

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/auth/google', [GoogleController::class, 'redirect']);

Route::get('/auth/google/callback', [GoogleController::class, 'callback']);


Route::post('/add-to-cart', [CartController::class, 'add']);

Route::get('/cart-items', [CartController::class, 'items']);

Route::post('/remove-cart-item', [CartController::class, 'remove']);
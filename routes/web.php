<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route to show hello
Route::get('/hello', function () {
    return 'Hello this is my blog project';
});

// This is Home Page
// Route::get('/home', function () {
//     return 'This is my Home Page';
// });


// About Route
// Route::get('/about', function () {
//     return 'This is About Page';
// });

// Dynamic Routing
Route::get('/user/{id}', function ($id) {
    return 'User Profile ID : ' . $id;
});

Route::get('/student/{id}', function ($roll_no) {
    return 'This is Student Roll No' . $roll_no;
});

Route::get('/employee/{id}', function ($id) {
    return 'Employee ID' . $id;
});


// Optional Parameters

Route::get('/post/{id?}', function ($id = null) {
    return $id ? "Post ID" . $id : 'No Post ID Provided';
});

Route::get('/student_id/{id?}', function ($id = null) {
    return $id ? 'Student ID ' . $id : 'No Student ID Provided';
});


Route::get('/employee_id/{emp_id?}', function ($empId = null) {
    return $empId ? 'Employee ID' . $empId : 'Not Available';
});


// Named Routes

Route::get('/contact', function () {
    return "contact Page";
})->name('contact');

Route::get('/go-contact', function () {
    return redirect()->route('contact');
});

// Route Group Basic 
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome To Dashboard';
    });

    Route::get('/user', function () {
        return "User Route is here";
    });
});


// Pages Route
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact',[PageController::class,'contact']);

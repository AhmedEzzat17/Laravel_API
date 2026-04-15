
<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MyBookingsController;
use App\Http\Middleware\CheckUser;



Route::get('/', function () {
    return view('welcome');    //ويلكم دا اسم ملف موجود
});

// Route::view('about', 'about');     // url , اسم الملف الى فيه المحتوى

Route::view('contact', 'contact', [
    'page_contact' => 'Contact home11',
    'page_discripion' => 'Contact description11',
]);

// Route::get('about/{id}', function ($id) {
//     return $id;
// });


Route::get('categories/{id}', function ($id) {

    $library = [
        '1' => 'books',
        '2' => 'games',
        '3' => 'ahmed'
    ];

    return view('Categories', [
        'category_id' => $library[$id] ?? 'No ID provided',
    ]);
});



Route::get('about', function () {
    $students = ['ahmed', 'mohamed', 'ali', 'mahmoud', 'khalid', 'sara', 'lara', 'marwa', 'aya', 'nour'];
    return view('about')->with('students', $students);
});


// Controller
Route::get('/mybookings', [MyBookingsController::class, 'index1']);
// Route::get('/login', [MyBookingsController::class, 'login'])->name('login');
Route::get('/sayhello/{name}', [MyBookingsController::class, 'sayhello'])->middleware(CheckUser::class);
// MyBookingsController   اسم الصفحه
// index  اسم الفانكشن
// '/mybookings'  اسم الرابط
// ::class دى مفتاحية لتحديد الصفحه بدل كتابه الرابط كله

// Route::get('/api/test', function () {
//     return response()->json([
//         'message' => 'API working'
//     ]);
// });


// Google routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyBookingsController extends Controller
{
    public function index1(Request $request){
        // return $request->all();
        return 'my bookings';
    }

    // public function login(){
    //     return 'login page';
    // }

//     public function sayhello($name){
//     if ($name == 'ahmed') {
//         return 'ahmed ezzat';
//     } else {
//         return redirect('login');
//         // return back();

//     }
// }
}

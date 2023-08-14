<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        // $users = DB::select('select * from user where id > ?', [1]);

        // dd($users);
        return view('Clients/home');

    }

    // public function index(){
    //     $users = DB::select('select * from user where id > ?', [1]);

    //     dd($users);
    // }
}

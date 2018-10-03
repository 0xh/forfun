<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = User::paginate();
//        $usr = User::where('id',1)->first();
//        if ($usr) {
//
//        }
//        try {
//            $user = User::where('id', 1)->findOrFail();
//        } catch (\Exception $e) {
//
//            $user = User::create([
//                'id'=>1,
//            ]);
//            $user->id = 2;
//            $user->update();
//            $id = $user->id;
//        }
        return view('home');
    }
}

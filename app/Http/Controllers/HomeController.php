<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foods;
use App\Models\drinks;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foods = foods::all();
        $drinks = drinks::all();
        return view('admin.admin', ['foods' => $foods], ['drinks' => $drinks]);
    }
}

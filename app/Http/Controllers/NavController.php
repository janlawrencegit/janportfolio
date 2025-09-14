<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function __construct()
    {
        $navbar = Navbar::all();
        view()->share('navbar', $navbar);
    }

    public function index()
    {
        $navbar = Navbar::all();
        return view('layouts.app', compact('navbar'));
    }
}

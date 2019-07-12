<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class pagesController extends Controller
{
    //
    public function aseg()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.ase');
        }
    }
    public function drivers()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.cho');
        }
    }
    public function clients()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.cli');
        }
    }
    public function equipos()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.equ');
        }
    }
    public function mantG()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.fMant');
        }
    }

    public function mantP()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.fMantPrev');
        }
    }
    public function jobs()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.fTrab');
        }
    }
    public function seguros()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.seg');
        }
    }
    public function users()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.usu');
        }
    }
}

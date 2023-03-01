<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return '2141720095, Muhammad Syahidan Nuron J';
    }
    public function articles($id)
    {
        return "Artikel dengan ID $id";
    }
}

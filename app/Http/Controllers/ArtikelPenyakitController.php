<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelPenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
}

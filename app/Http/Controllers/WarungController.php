<?php

namespace App\Http\Controllers;

class WarungController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('warung', ['judul' => 'WARUNG BUMDES']);
    }

    //
}

<?php

namespace App\Http\Controllers;

class IkanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('ikan', ['judul' => 'KOLAM IKAN BUMDES']);
    }

    //
}

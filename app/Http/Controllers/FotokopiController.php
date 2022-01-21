<?php

namespace App\Http\Controllers;

class FotokopiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('fotokopi', ['judul' => 'FOTOKOPI BUMDES']);
    }

    //
}

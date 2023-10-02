<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $film = Movie::all();
        // dd( $film);
        return view('welcome', ['film' => $film]);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Movie; // importare il model movie
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {

        $dati = Movie::all(); // recuperare tutti i film dal database

        // dd($dati);


        return view('home', [
            "Movies" => $dati
        ]);

    }
}

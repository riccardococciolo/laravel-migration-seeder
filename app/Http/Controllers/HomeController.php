<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $today = now()->format('Y-m-d');  // Ottieni la data odierna nel formato MySQL

        $trains = Train::whereDate('departure_date', '=', $today)->get();

        return view('home', compact('trains'));
    }
}

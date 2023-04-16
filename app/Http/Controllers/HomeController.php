<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Install;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get(){
        return view('home', ['installations' => Install::all(), 'portfolios' => Portfolio::all(), 'clients' => Client::all()]);
    }
}

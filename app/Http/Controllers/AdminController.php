<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Client;
use App\Models\Install;
use App\Models\Portfolio;

class AdminController extends Controller
{
    public function requests()
    {
        return view('admin.admin', ['data' => Application::all()->sortByDesc('created_at')]);
    }

    public function portfolio()
    {
        return view('admin.portfolio', ['data' => Portfolio::all()]);
    }

    public function install()
    {
        return view('admin.install', ['data' => Install::all()]);
    }

    public function client()
    {
        return view('admin.client', ['data' => Client::all()]);
    }
}

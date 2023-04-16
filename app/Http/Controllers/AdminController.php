<?php

namespace App\Http\Controllers;

use App\Models\Application;

class AdminController extends Controller
{
    public function get()
    {
        return view('admin', ['data' => Application::all()->sortByDesc('created_at')]);
    }
}

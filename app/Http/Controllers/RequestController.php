<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RequestController extends Controller
{
    public function send(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'tel' => [
                    'required',
                    'max:12',
                ],
            ],
            [
                'name.required' => 'Имя обязателено',
                'tel.required' => 'Телефон обязателен',
            ]
        )->validate();

        Application::create(['name' => $request->name, 'tel' => $request->tel]);

        return response()->json();
    }
}

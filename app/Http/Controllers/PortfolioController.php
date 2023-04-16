<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{

    public function add(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'title' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'photo' => [
                    'required',
                    'image',
                ],
            ],
            [
                'title.required' => 'Имя обязателено',
                'photo.required' => 'Фото обязательно',
                'photo.image' => 'Неверный тип файла',
            ]
        )->validate();

        $fileName = Storage::disk('public')->put('Portfolios', $request->file('photo'));

        Portfolio::create(['title' => $request->title, 'photo' => $fileName, 'text' => $request->text]);

        return redirect(url('/'));
    }

    public function one(int $id)
    {
        if ($item = Portfolio::where('id', '=', $id)->first()) {
            return view('/updatePortfolio', ['id' => $id, 'data' => $item]);
        }

        return redirect(url('/'));
    }

    public function update(Request $request)
    {

        Validator::make(
            $request->all(),
            [
                'title' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'photo' => [
                    'image',
                ],
            ],
            [
                'title.required' => 'Имя обязателено',
                'photo.image' => 'Неверный тип файла',
            ]
        )->validate();

        if ($request->file('photo') != '') {
            Storage::disk('public')->delete($request->old_img);
            $fileName = Storage::disk('public')->put('Portfolios', $request->file('photo'));
            Portfolio::where('id', $request->id)->update([
                'title' => $request->title,
                'photo' => $fileName,
                'text' => $request->text,
            ]);
        } else {
            Portfolio::where('id', $request->id)->update([
                'title' => $request->title,
                'text' => $request->text,
            ]);
        }

        return redirect(url('/'));
    }

    public function delete(int $id)
    {
        if ($item = Portfolio::where('id', '=', $id)->first()) {
            Portfolio::destroy($id);
            Storage::disk('public')->delete($item->photo);
        }

        return redirect(url('/'));
    }
}

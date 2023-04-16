<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Install;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class InstallController extends Controller
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
                'price' => [
                    'required',
                    'numeric',
                ],
            ],
            [
                'title.required' => 'Имя обязателено',
                'photo.required' => 'Фото обязательно',
                'photo.image' => 'Неверный тип файла',
                'price.required' => 'Цена обязателена',
                'price.numeric' => 'Цена некорректна',
            ]
        )->validate();

        $fileName = Storage::disk('public')->put('installs', $request->file('photo'));

        Install::create(['title' => $request->title, 'photo' => $fileName, 'price' => $request->price]);

        return redirect(url('/'));
    }

    public function one(int $id)
    {
        if ($item = Install::where('id', '=', $id)->first()) {
            return view('/updateInstall', ['id' => $id, 'data' => $item]);
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
                'price' => [
                    'required',
                    'numeric',
                ],
            ],
            [
                'title.required' => 'Имя обязателено',
                'photo.image' => 'Неверный тип файла',
                'price.required' => 'Цена обязателена',
                'price.numeric' => 'Цена некорректна',
            ]
        )->validate();

        if ($request->file('photo') != '') {
            Storage::disk('public')->delete($request->old_img);
            $fileName = Storage::disk('public')->put('installs', $request->file('photo'));
            Install::where('id', $request->id)->update([
                'title' => $request->title,
                'photo' => $fileName,
                'price' => $request->price,
            ]);
        } else {
            Install::where('id', $request->id)->update([
                'title' => $request->title,
                'price' => $request->price,
            ]);
        }

        return redirect(url('/'));
    }

    public function delete(int $id)
    {
        if ($item = Install::where('id', '=', $id)->first()) {
            Install::destroy($id);
            Storage::disk('public')->delete($item->photo);
        }

        return redirect(url('/'));
    }
}

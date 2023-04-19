<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

    public function add(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'photo' => [
                    'required',
                    'image',
                ],
            ],
            [
                'photo.required' => 'Фото обязательно',
                'photo.image' => 'Неверный тип файла',
            ]
        )->validate();

        $fileName = Storage::disk('public')->put('clients', $request->file('photo'));

        Client::create(['photo' => $fileName]);

        return redirect(url('/admin/client'));
    }

    public function one(int $id)
    {
        if ($item = Client::where('id', '=', $id)->first()) {
            return view('admin/updateClient', ['id' => $id, 'data' => $item]);
        }

        return redirect(url('/admin/client'));
    }

    public function update(Request $request)
    {

        Validator::make(
            $request->all(),
            [
                'photo' => [
                    'image',
                    'required'
                ],
                'old_img' => [
                    'required'
                ],
            ],
            [
                'photo.image' => 'Неверный тип файла',
                'photo.required' => 'Фото обязательно',
            ]
        )->validate();

        Storage::disk('public')->delete($request->old_img);
        $fileName = Storage::disk('public')->put('clients', $request->file('photo'));
        Client::where('id', $request->id)->update([
            'photo' => $fileName,
        ]);

        return redirect(url('/admin/client'));
    }

    public function delete(int $id)
    {
        if ($item = Client::where('id', '=', $id)->first()) {
            Client::destroy($id);
            Storage::disk('public')->delete($item->photo);
        }

        return redirect(url('/admin/client'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;

class UploadPhotoController extends Controller
{
    public function __invoke($id)
    {
        dd($id);
        if (empty($id)) {
            abort(400, 'id не может быть пустым');
        }
        $user = User::find($id);
        if (empty($user)) {
            abort(404, 'Пользователь не найден');
        }
        //toDo создать request и вытащить фото
    }
}

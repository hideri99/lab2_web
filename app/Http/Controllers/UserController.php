<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Список пользователей.
     * @return array[]
     */
    public function list()
    {
        return User::query()->get();
    }

    /**
     * Информация о пользователе
     * @param $id
     * @return array
     */
    public function info($id)
    {
        return User::query()->where(['id' => $id])->first();
    }

    public function authorization(Request $request)
    {
        $arr = User::query()->where(['name' => $request->get('name')])->first();
        if ($arr == NULL) {
            return [
                'userId' => -1
            ];
        } else {
            if ($arr['password'] == $request->get('password')) {
                return [
                    'userId' => $arr['id']
                ];
            } else {
                return [
                    'userId' => -1
                ];
            }
        }

    }
}

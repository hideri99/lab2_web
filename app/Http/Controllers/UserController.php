<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public $arr = array(
        [
        'id' => 1,
        'login' => 'admin',
        'password' => 'password'
         ],
        [
        'id' => 2,
        'login' => 'bill',
        'password' => '12345'
        ],
        [
        'id' => 3,
        'login' => 'bob',
        'password' => 'qwerty'
        ]
        );

     /**
     * Список пользователей.
     * @return array[]
     */
     public function list()
     {
         return $this->arr;
     }

     /**
     * Информация о пользователе
     * @param $id
     * @return array
     */
     public function info($id)
     {
         return  $this->arr[$id-1];
     }

     public function authorization(Request $request)
     {
        foreach ($this->arr as $value) {
            if ($value['login'] == $request->get('login') && $value['password']== $request->get('password')){
                    return [
                        'userId'=> $value['id']
                    ];
            }
        }
                return [
                    'userId'=> -1
                ];
     }
}

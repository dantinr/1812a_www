<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;

class UserController extends Controller
{
    public function add()
    {
        $data = [
            'u_name'    => 'zhangsan',
            'u_email'   => 'zhangsan@qq.com'
        ];

        $uid = UserModel::insertGetId($data);
        var_dump($uid);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Model\UserModel;
use Illuminate\Support\Str;
use DB;
use phpseclib\Net\SSH2;

class TestController extends Controller
{
    public function ss()
    {
        $s = Session::all();
        echo '<pre>';print_r($s);echo '</pre>';
    }

    /**
     * 批量生成数据
     */
    public function insert10k()
    {

        $arr_email = [
            1 => '@qq.com',
            2 => '@163.com',
            3 => '@gmail.com',
            4 => '@sohu.com',
            5 => '@sina.com'
        ];

        $mobile_arr = [
            1 => 136,
            2 => 137,
            3 => 138,
            4 => 139,
            5 => 150,
            8 => 151,
            6 => 152,
            7 => 153,
        ];

        for($i=0;$i<100000;$i++)
        {
            $data = [
                'user_name' => Str::random(10),
                'email'     => Str::random(12) . $arr_email[mt_rand(1,5)],
                'mobile'    => $mobile_arr[mt_rand(1,8)] . mt_rand(11111111,99999999),
                'age'       => mt_rand(1,99)
            ];

            $uid = UserModel::insertGetId($data);
            //$uid = DB::connection()->table('p_users')->insertGetId($data);
            echo "UID: ".$uid;echo '</br>';
        }
    }


    public function insert10k2()
    {

        $arr_email = [
            1 => '@qq.com',
            2 => '@163.com',
            3 => '@gmail.com',
            4 => '@sohu.com',
            5 => '@sina.com'
        ];

        $mobile_arr = [
            1 => 136,
            2 => 137,
            3 => 138,
            4 => 139,
            5 => 150,
            8 => 151,
            6 => 152,
            7 => 153,
        ];

        for($i=0;$i<10000;$i++)
        {
            $data = [
                'user_name' => Str::random(10),
                'email'     => Str::random(12) . $arr_email[mt_rand(1,5)],
                'mobile'    => $mobile_arr[mt_rand(1,8)] . mt_rand(11111111,99999999),
                'age'       => mt_rand(1,99)
            ];

            $uid = UserModel::insertGetId($data);
            //$uid = DB::connection()->table('p_users')->insertGetId($data);
            echo "UID: ".$uid;echo '</br>';
        }
    }

    public function testSsh()
    {
        $ssh = new SSH2('192.168.91.130');
        $info = $ssh->login('liwei','123456abcd');
        var_dump($info);
        $rs = $ssh->exec('ls -l');
        echo '<pre>';print_r($rs);echo '</pre>';
    }
}

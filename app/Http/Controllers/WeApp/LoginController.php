<?php
/**
 * Created by PhpStorm.
 * User: jianjungki
 * Date: 2018/4/1
 * Time: 12:00
 */

namespace App\Http\Controllers\WeApp;

use App\Http\Controllers\Controller;
use jmluang\weapp\Constants;
use jmluang\weapp\LoginInterface;

class LoginController extends Controller
{
    /**
     * 首次登陆
     * @param LoginInterface $login
     * @return array
     */
    public function login(LoginInterface $login)
    {
        $result = $login::login();

        if ($result['loginState'] === Constants::S_AUTH) {
            return [
                'code' => 0,
                'data' => $result['userinfo']
            ];
        } else {
            return [
                'code' => -1,
                'error' => $result['error']
            ];
        }
    }

    /**
     * 登陆过就使用这个接口
     * @param LoginInterface $login
     * @return array
     */
    public function user(LoginInterface $login)
    {
        $result = $login::check();

        if ($result['loginState'] === Constants::S_AUTH) {
            return [
                'code' => 0,
                'data' => $result['userinfo']
            ];
        } else {
            return [
                'code' => -1,
                'data' => []
            ];
        }
    }

}
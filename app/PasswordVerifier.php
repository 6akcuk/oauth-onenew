<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 19.12.2015
 * Time: 0:03
 */

namespace App;

use Illuminate\Support\Facades\Auth;

class PasswordVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'name'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}
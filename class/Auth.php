<?php
/**
 * Created by PhpStorm.
 * User: dia1
 * Date: 3/23/2019
 * Time: 5:40 PM
 */

class Auth
{
  const session_name='email';

    public static function chekLogin()
    {
        $is_login=isset($_SESSION[self::session_name]);
        if (!$is_login) {
            Session::CreateMassage('دسترسی به این صفحه محدود شد! باید وارد حساب خود شوید');
            Url::redirect('login.php');
        }
    }

    public static function logout($page,$is_admin=false)
    {
        unset($_SESSION);
        Url::redirect($page,$is_admin);
    }
}
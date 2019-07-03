<?php
/**
 * Created by PhpStorm.
 * User: dia1
 * Date: 3/12/2019
 * Time: 10:52 AM
 */

class Session
{
    private static $session_name="dia_project";

    public static function CreateMassage($message)
    {
    $_SESSION[self::$session_name]=$message;
    }

    public static function getMessage($destroy=true)
    {
        if (!isset($_SESSION[self::$session_name])){
            return "";
        }
        $message=$_SESSION[self::$session_name];
        if ($destroy) {
            unset($_SESSION[self::$session_name]);
        }
        return $message;
    }


}
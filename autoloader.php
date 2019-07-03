<?php
//function AutoLoader($ClassName)
//{
//    require_once "class/{$ClassName}.php";
//}
//spl_autoload_register('AutoLoader');

function __autoload($class_name)
{
    $class_name = ucfirst($class_name);
    require_once base_dir ."class/". $class_name .".php";
}
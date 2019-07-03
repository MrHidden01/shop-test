<?php
require_once '../config.php';

$product = new Register();
$model = $product->select()->from(Register::table_name)->where("email='$_SESSION[email]'")->asArray()->one();
if ($model['access'] !=1)
{
    Session::CreateMassage('دسترسی به این صفحه محدود شده است !');
    Url::redirect('Message.php');
}else {
    echo Html::a('product', 'محصولات', 'style="text-decoration: none; text-align: right" class="link"');
    echo Html::space();
    echo Html::space();
    echo Html::space();
    echo Html::a('category', ' دسته ها', 'style="text-decoration: none; text-align: right" class="link"');
    echo Html::br();
    echo Session::getMessage();
}
<?php
$page_title='ورود';
require_once "../../config.php";
include_once '../template/head.php';
if (isset($_SESSION['email']))
{
    Session::CreateMassage('شما قبلا وارد حساب خود شده اید .'.'<br>'.'ایمیل :'.$_SESSION['email']);
    Url::redirect('Message.php');
}else {
    echo Html::startCenter();
    echo Html::start_div('input');
    echo Html::startForm('signin.php', 'post');
    echo Html::body();
    echo Html::startTable('border="1px solid white";');
    echo Html::start_tr();
    echo Html::start_td();
    echo Html::input('email', 'email', 'autocomplete="off"; placeholder="Email"; autofocus');
    echo Html::end_td();
    echo Html::end_tr();
    echo Html::br();
    echo Html::start_tr();
    echo Html::start_td();
    echo Html::input('password', 'password', 'placeholder="Password"');
    echo Html::end_td();
    echo Html::end_tr();
    echo Html::br();
    echo Html::endTable();
    echo Html::start_tr();
    echo Html::start_td();
    echo Html::submit('submit', 'class="btn btn-info"');
    echo Html::end_td();
    echo Html::end_tr();
    echo Html::endForm();
    echo Html::end_div();
    echo Session::getMessage();
    echo Html::endCenter();
    echo Html::br();
    echo Html::br();
    echo Html::br();
}
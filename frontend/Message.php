<?php

require_once "../config.php";
$page_title = 'Massage';
require_once '../config.php';
include_once 'template/head.php';
echo Html::start_div('head');
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/register.php'), 'signup');
echo Html::space();
echo Html::space();
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/login.php'), 'signin');
echo Html::end_div();
echo Html::start_div('row');
echo Html::start_div('col-xs-12 col-lg-9 pull-left');
echo Html::start_div('row');
echo Html::start_div('col-xs-12');
echo Html::start_div('titlemain');
echo Html::h4(' نمایش پیغام');
echo Html::end_div();
echo Html::startCenter();



        echo Session::getMessage();


echo Html::br();
echo Html::br();
echo Html::br();
echo Html::br();
echo Html::br();
echo Html::br();
echo Html::br();
echo Html::br();
echo Html::a(Url::createFrontUrl(''),"بازگشت به صفحه اصلی","class='btn btn-danger'");
echo Html::endCenter();
echo Html::br();
echo Html::br();
echo Html::end_div();
echo Html::end_div();
echo Html::end_div();
    include_once 'template/widget.php';
    include_once 'template/footer.php';

<?php
require_once "../../config.php";
include_once '../template/header.php';
echo Html::startCenter();
$columns=[
    'cat_title'=>[
        'header'=>'نام دسته',
        'index'=>'cat_title',
        'type'=>'text',
    ]
];

$grid=new Grid();
$result=$grid
    ->setColumens($columns)
    ->setTable(category::table_name)
    ->setUrl('category/')
    ->show();

echo $result;
echo Html::br();
echo Session::getMessage();
echo Html::br();
echo Html::hr();
echo Html::a(Url::createBackendUrl('category/insert.php'),"اضافه کردن دسته جدید","class='btn btn-info'");
echo Html::br();
echo Html::br();
echo Html::a(Url::createBackendUrl(''),"بازگشت","class='btn btn-danger'");
echo Html::hr();
echo Html::endCenter();
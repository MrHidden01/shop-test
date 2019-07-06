<?php
require_once "../../config.php";
include_once '../template/header.php';

$model= new  Product();
$query= $model->select()->from(Category::table_name)->all();

echo Html::startCenter();
$columns=[
    'cat_id'=>[
        'header'=>'ایدی دسته',
        'index'=>$id ='cat_id',
        'type'=>'text',
    ],
    'cat_title'=>[
        'header'=>'نام دسته',
        'index'=>'cat_title',
        'type'=>'text',
    ]
];


$actions="<a onclick='return confirm(\"آیا برای حذف مطمئن هستید ؟\")'class='btn btn-danger'href='".Url::createBackendUrl("category/delete.php?cat_id=".$id)."'
            onclick>";
$actions.="حذف</a> | ";
$actions.="<a class='btn btn-info' href='".Url::createBackendUrl("category/update.php?cat_id=".$id)."'>";
$actions.="ویرایش</a>";

$grid=new Grid();
$result=$grid
    ->setColumens($columns)
    ->setTable(category::table_name)
    ->setUrl('category/')
    ->setAction($actions)
    ->show($query);

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

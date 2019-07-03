<?php
require_once "../../config.php";
include_once '../template/header.php';
$id=(int)$_GET['cat_id'];
$link=new Category();
$model=$link->select()->where("cat_id= $id")->one()->asArray();


echo Html::startCenter();
echo Html::startForm('do_update.php','post');
echo Html::label('cat_title','cat title');
echo Html::br();
echo Html::input('cat_title','text',"value='{$model->cat_title}' class='form form-control' id='title' autofocus");
echo Html::br();
echo Html::input("id","hidden","value='{$model->id}'");
echo Html::submit('update',"class='btn btn-success'");
echo Html::endForm();
echo Html::a(Url::createBackendUrl('link/index.php'),"back","class='btn btn-danger'");
echo Html::endCenter();
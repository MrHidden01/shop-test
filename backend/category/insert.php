<?php
require_once "../../config.php";
include_once '../Template/header.php';
echo Html::startCenter();
echo Html::startForm(Url::createBackendUrl('category/save.php'),'post');
echo Html::label('Cat title','cat_title');
echo Html::input('cat_title','text','class="form form-control" autofocus');
echo Html::br();
echo Html::submit('save',"class='btn btn-success'");
echo Html::endForm();
echo Html::a(Url::createBackendUrl('category/index.php'),"back","class='btn btn-danger'");
echo Html::br();
echo Session::getMessage();
echo Html::endCenter();

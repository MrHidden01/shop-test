<?php
require_once "../../config.php";
$cat = new Category();
$data=$_POST;
$id=$data['cat_id'];
unset($data['cat_id']);
$cat->load($data);
$res = $cat->save();

if ($res) {
    session::CreateMassage('دسته ویرایش شد ');
}else {
    session::CreateMassage('خطا: ویرایش دسته ناموفق بود');
}
Url::redirect('category',true);

<?php
require_once "../../config.php";
if (isset($_GET['cat_id'])){
    $id=(int)$_GET['cat_id'];
    $delete = new Category();
    $delete->select()->where(['cat_id' => $id])->one();
    $delete->delete();
    Session::CreateMassage('دسته با موفقیت حذف شد');
    Url::redirect('category',true);
}
else{
    Session::CreateMassage('خطا : دسته حذف نشد!');
    Url::redirect('category',true);
}

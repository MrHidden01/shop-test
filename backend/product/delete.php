<?php
require_once "../../config.php";
if (isset($_GET['product_id'])){
    $id=(int)$_GET['product_id'];
    $delete = new Product();
    ///$delete->product_id = $id;
    $delete->select()->where(['product_id' => $id])->one();
    $delete->delete();
    Session::CreateMassage('محصول با موفقیت حذف شد');
    Url::redirect('product',true);
}
else{
    Session::CreateMassage('خطا : محصول حذف نشد!');
    Url::redirect('product',true);
}

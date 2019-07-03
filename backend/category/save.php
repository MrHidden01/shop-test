<?php
require_once "../../config.php";

if(isset($_POST)){
    $categories = $_POST;
    $category = new Category();
    $category->load($categories);
    $result=$category->save();

    Session::CreateMassage('دسته با موفقیت اضافه شد');
    Url::redirect('category/insert.php',true);
//$insertTest->getLastInsertId();

}
else{
    echo 'خطا : دسته اضافه نشد !';
}

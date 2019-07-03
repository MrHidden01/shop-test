<?php
require_once "../config.php";

if(isset($_SESSION['email'])) {
    $order = new Order();
    $model = $order->select()->from(Order::table_name)->orderBy('order_id desc')->asArray()->one();


    $profile = new Profile();
    $profile->Lname_Fname = $_POST['LFName'];
    $profile->mobile_num = $_POST['mobileNum'];
    $profile->province = $_POST['province'];
    $profile->city = $_POST['city'];
    $profile->postal_code = $_POST['PostalCode'];
    $profile->postal_address = $_POST['PostalAddress'];
    $profile->user_email = $_SESSION['email'];
    $profile->order_id = $model['order_id'];
    $result = $profile->save();
    if ($result) {

        Url::redirect('Message.php');
        Session::CreateMassage('ثبت سفارش با موفقیت انجام شد ');
    }
}
else{
    echo 'خطا در ثبت سفارش !';
}
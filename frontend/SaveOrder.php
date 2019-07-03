<?php
require_once "../config.php";

if(isset($_SESSION['email'])){

    $order = new Order();
    $order->total_price = $_POST['total_price'];
    $order->product_ids = $_POST['product_ids'];
    $order->user_email = $_SESSION['email'];
    $order->is_pay = 0;
    $result=$order->save();

    Url::redirect('CustomerSpec.php');
//$insertTest->getLastInsertId();

}
else{
    echo 'خطا در ثبت سفارش !';
}

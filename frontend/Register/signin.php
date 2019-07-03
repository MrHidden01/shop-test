<?php
require_once "../../config.php";
if (isset($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $obj = new Register;
    $obj->signIn($email, $password);
}
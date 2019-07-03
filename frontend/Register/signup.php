<?php
require_once '../../config.php';
if (isset($_POST)) {
    $data = $_POST;
    $obj = new Register();
    $obj->signUp($data);

}
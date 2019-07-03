<?php
require_once "../../config.php";
unset($_SESSION['products']);
Auth::logout('index.php');
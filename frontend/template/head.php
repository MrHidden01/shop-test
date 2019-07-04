<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?php
        if (isset($page_title)){
            echo "<title>$page_title</title>";
        }else{
            echo "<title>page title is undefined</title>";
        }

        ?>
    <!-- Bootstrap -->
    <link href="<?=Url::createUrl('asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=Url::createUrl('asset/css/bootstrap-rtl.min.css')?>" rel="stylesheet">
    <link href="<?=Url::createUrl('asset/style.css')?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../../asset/js/html5shiv.min.js"></script>
    <script src="../../asset/js/respond.min.js"></script>
    <![endif]-->
</head>
<a  class="btn-danger" style="border-radius: 3px; float: left; margin-top: 10px;margin-left: 10px" href="<?=Url::createFrontUrl('Register/logout.php')?>">خروج</a>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="logoarea">
                <a href="#">
                    <img src= <?=Url::createUrl('asset/image/logo3.PNG')?>>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="pull-right respmenu">
                        <div class="collapse navbar-collapse topmenu" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?=Url::createFrontUrl('')?>">خانه</a></li>
                                <li><a href="#">موبایل</a>
                                    <ul>
                                        <li><a href="#">اپل</a></li>
                                        <li><a href="#">سامسونگ</a></li>
                                        <li><a href="#">اچ تی سی</a></li>
                                        <li><a href="#">سونی</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">ساعت</a></li>
                                <li><a href="#">تبلت</a></li>
                                <li><a href="#">ارتباط با ما</a></li>

                            </ul>

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>

                    <div class="searcharea pull-left hidden-xs">
                        <form action="#">
                            <input type="text" name="name" value="" placeholder="جستجو ...">
                            <button>
                                <span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>



    <?php


if (isset($_POST)){

    echo Html::img('');
}

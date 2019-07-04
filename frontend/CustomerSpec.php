<?php

require_once "../config.php";
$page_title='تکمیل مشخصات';
require_once '../config.php';
include_once 'template/head.php';
echo Html::start_div('head');
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/register.php'),'signup');
echo Html::space();
echo Html::space();
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/login.php'),'signin');
echo Html::end_div();
echo Html::start_div('row');
echo Html::start_div('col-xs-12 col-lg-9 pull-left');
echo Html::start_div('row');
echo Html::start_div('col-xs-12');
echo Html::start_div('titlemain');
echo Html::h4('تکمیل مشخصات');
echo Html::end_div();

                    echo Html::start_div('');
                        echo Html::startForm('SaveCustomerData.php','post');
                        echo Html::startCenter();
                         echo Html::br();
                            echo Html::input('LFName','text','placeholder=" نام و نام خانوادگی *"');
                            echo Html::space();
                            echo Html::input('mobileNum','number','placeholder="شماره موبایل * "');
                            echo Html::space();
                            echo Html::input('province','text','placeholder="استان *"');
                            echo Html::space();
                            echo Html::input('city','text','placeholder="شهر *"');
                            echo Html::space();echo Html::br();echo Html::br();
                            echo Html::input('PostalCode','number','placeholder="کد پستی *"');
                            echo Html::space();
                            echo Html::input('PostalAddress','text','placeholder="آدرس پستی *"');
                            echo Html::br();
                            echo Html::br();
                            echo Html::submit('اتمام فرایند ','class="btn btn-info"');
                            echo Html::endCenter();
                        echo Html::endForm();




                    echo Html::end_div();
                    echo Html::end_div();
                    echo Html::end_div();
                    echo Html::end_div();
                   
include_once 'template/widget.php';   
include_once 'template/footer.php';

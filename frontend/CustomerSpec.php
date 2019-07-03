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
                ?>
    <div class="col-xs-12 col-lg-3 pull-right">

        <div class="widgetbox">
            <div class="headarea">
                <h4>دسته ها</h4></div>
            <div class="contentarea">
                <?php

                $product = new Category();
                $model = $product->select()->from(Category::table_name)->orderBy('cat_id desc')->asArray()->all();

                foreach ($model as $cat) {

                    // var_dump($rows);
                    echo Html::start_div('col-xs-12 col-sm-4');
                    echo Html::p(Html::a("Product_by_category.php?cat_id=$cat[cat_id]",$cat['cat_title']));
                    echo Html::br();
                    echo Html::end_div();

                }
                ?>


            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-3 pull-right">

        <div class="widgetbox">
            <div class="headarea">
                <h4>درباره ما</h4></div>
            <div class="contentarea">
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ی دستاوردهای اصلی و جوابگوی
                    سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'template/footer.php';

<?php
require_once "../config.php";
include_once 'template/head.php';
?>
<div class="row">
    <div class="col-xs-12 col-lg-9 pull-left">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../asset/image/slideimage.jpg" alt="Slider">
                    <div class="carousel-caption">
                        <h3>میز کار خلاقانه داشته باشید ...</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="../asset/image/slideimage.jpg" alt="Slider">
                    <div class="carousel-caption">
                        <h3>میز کار خلاقانه داشته باشید ...</h3>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="titlemain">
                    <h4>جدیدترین محصولات</h4>
                </div>

                <?php
                $cat_id=$_GET['cat_id'];
                var_dump($cat_id);
                $product = new Product();
                $model = $product->select()->from('products')->leftJoin(["categories","categories.cat_id","products.product_category"])->
                    where("categories.cat_id=$cat_id")->asArray()->all();

                foreach ($model as $rows) {

                    // var_dump($rows);
                    echo Html::start_div('col-xs-12 col-sm-4');
                    echo Html::start_div('productbox');
                    echo Html::img(Url::createUrl('asset/image/').$rows['product_image'],'style="max-width: 240px;max-height: 210px;"');
                    echo Html::h2($rows['product_name']);
                    echo Html::span('قیمت :'.$rows['product_price'].'تومان');
                    echo Html::a("single_product.php?product_id=".$rows['product_id'],'اطلاعات بیشتر','class="add_to_cart"');
                    echo Html::end_div();
                    echo Html::end_div();

                }
                ?>
            </div>
        </div>
        <div class="moreproduct">
            <a href="#">مشاهده‌ی همه‌ی محصولات</a>
        </div>
    </div>
    <?php
        include_once 'template/widget.php';
        include_once 'template/footer.php';

<?php
$page_title='محصول';
require_once "../config.php";
include_once 'template/head.php';
?>
<body>
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-lg-9 pull-left">

            <div class="row">
                <div class="col-xs-12">
                    <div class="titlemain">
                        <p>
                            خانه > محصولات > الکترونیک > موبایل
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="singlecontent">
                        <?php
                        echo Html::start_div('row');
                        echo Html::start_div('col-xs-12 col-sm-6 titleproduct');
                        $product_id = $_GET['product_id'];
                        $product = new Product();
                        $model = $product->select()->from('products')->leftJoin(["categories", "categories.cat_id", "products.product_category"])
                            ->where("products.product_id=$product_id")->asArray()->one();

                        echo Html::h1($model['product_name']);
                        echo Html::span('قیمت :' . $model['product_price'] . '  تومان');
                        echo Html::startForm('cart.php', 'post');
                       /// echo Html::input('productId', 'hidden', "value='$product_id'");
                       /// echo Html::input('', 'submit', 'value="سفارش دهید" class="add-to-cart"');
                        echo Html::a('cart.php?product_id='.$product_id,'سفارش دهید ', 'class=add-to-cart');
                        echo Html::endForm();
                        echo Html::end_div();
                        echo Html::start_div('col-xs-12 col-sm-6 imageproduct');
                        echo Html::img(Url::createUrl('asset/image/') . $model['product_image']);
                        echo Html::end_div();
                        echo Html::end_div();

                        ?>

                        <div class="row">
                            <div class="col-xs-12">

                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#desc" aria-controls="desc"
                                                                                  role="tab"
                                                                                  data-toggle="tab">توضیحات</a></li>
                                        <li role="presentation"><a href="#comment" aria-controls="comment" role="tab"
                                                                   data-toggle="tab">دیدگاه‌ها</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="desc">
                                            <?=$model['product_desc']?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="comment">


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="titlemain">
                        <h4>محصولات مرتبط</h4>
                    </div>
                    <?php

                    $product = new Product();
                    $model = $product->select()->from(product::table_name)->limit('0,3')->asArray()->all();

                    foreach ($model as $rows) {

                        // var_dump($rows);
                        echo Html::start_div('col-xs-12 col-sm-4');
                        echo Html::start_div('productbox');
                        echo Html::img(Url::createUrl('asset/image/').$rows['product_image'],'style="max-width: 240px;max-height: 210px;"');
                        echo Html::h2($rows['product_name']);
                        echo Html::span('قیمت :'.$rows['product_price'].'تومان');
                        echo Html::a("SingleProduct.php?product_id=$rows[product_id]",'اطلاعات بیشتر','class="add_to_cart"');
                        echo Html::end_div();
                        echo Html::end_div();
                    }
                    ?>
                </div>
            </div>

        </div>
       
<?php
            include_once 'template/widget.php';
            include_once 'template/footer.php';

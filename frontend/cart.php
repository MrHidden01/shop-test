<?php
$page_title = 'سبد خرید';
require_once '../config.php';
include_once 'template/head.php';
echo Html::start_div('head');
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/register.php'), 'signup');
echo Html::space();
echo Html::space();
echo Html::space();
echo Html::a(Url::createFrontUrl('Register/login.php'), 'signin');
echo Html::end_div();
echo Html::start_div('row');
echo Html::start_div('col-xs-12 col-lg-9 pull-left');
echo Html::start_div('row');
echo Html::start_div('col-xs-12');
echo Html::start_div('titlemain');
echo Html::h4('سبد خرید');
echo Html::end_div();
                if (isset($_SESSION['email'])) {
                    if (isset($_GET['product_id'])) {
                        $id = $_GET['product_id'];
                        if (isset($_SESSION['products'][$id])) {
                            $_SESSION['products'][$id] += 1;
                        } else {
                            $_SESSION['products'][$id] = 1;
                        }
                    }
                } else {
                    Session::CreateMassage('برای خرید محصول باید اول وارد ' . Html::a('Register/login.php', 'حساب خود') . ' شوید!' . Html::a('Register/register.php', 'حساب ندارید ؟'));
                }
                echo Html::startTable('border="1px"');
                echo Html::startThead();
                echo Html::start_tr();
                echo Html::th('نام محصول');
                echo Html::th('قیمت محصول');
                echo Html::th('تعداد محصول');
                echo Html::th('قیمت کل هر محصول');
                echo Html::th('اقدامات');
                echo Html::end_tr();
                echo Html::endThead();
$total=0;
$ids='';

                    if (isset($_SESSION['products'])) {
                        foreach ($_SESSION['products'] as $id2 => $key) {
                            $model = new Product();
                            $data = $model->select()->from('products')->where("product_id=$id2")->asArray()->all();
                            foreach ($data as $obj) {
                              echo Html::startTbody();
                                echo Html::start_tr();
                                $ids.=$obj['product_id'].',';
                                echo Html::td($obj['product_name']);
                                echo Html::td($obj['product_price']);
                                echo Html::td($key);
                                echo Html::td($total =  $key * $obj['product_price']);

                                echo Html::td('<a href="cart.php?deleteId=' . $obj['product_id'] . '">Delete</a>');
                                echo Html::end_tr();
                              echo Html::endTbody();
                            }
                        }
                    }
                    if (isset($_GET['deleteId'])) {
                        unset($_SESSION['products'][$_GET['deleteId']]);
                    }
                echo Html::endTable();
                echo Html::startCenter();

                echo Html::startForm('SaveOrder.php', 'post');
              //  echo implode(',',$_SESSION['products']);
                echo Html::input('total_price', 'hidden', "value='$total'");
                echo Html::input('product_ids', 'hidden', "value='$ids'");
                echo Html::submit('تکمیل فرایند خرید', 'class="btn btn-success"');
                echo Html::endForm();

                echo Html::endCenter();
                echo Session::getMessage();
                echo Html::br();
                echo Html::br();
                echo Html::br();
                echo Html::br();
                echo Html::br();
                echo Html::br();
                echo Html::br();
                echo Html::end_div();
                echo Html::end_div();
                echo Html::end_div();
<?php
      include_once 'template/widget.php';

      include_once 'template/footer.php';

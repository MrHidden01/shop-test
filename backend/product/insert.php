<meta charset="UTF-8">
<?php
include_once '../template/header.php';
require_once '../../config.php';
echo Html::startCenter();
echo Html::body('style="background-color: beige"');
echo Html::startForm('save.php', 'post','enctype="multipart/form-data"');
echo Html::startTable('class="table" width="650" align="center" style="color: darkslategray; border-radius: 5px"');
echo Html::caption(Html::b('اطلاعات مربوط به محصول را در این جدول اضافه کنید'));
echo Html::start_tr();
echo Html::th(Html::b('ویژگی های محصول'));
echo Html::th(Html::b('مقدار ورودی برای هرکدام از ویژگی ها'));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('نام محصول'));
echo Html::td(Html::input('product_name','text','size="70" required autofocus'));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('قیمت محصول'));
echo Html::td(Html::input('product_price','text','size="70" required'));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('توصیف محصول'));
echo Html::td(Html::textarea('product_desc','required'));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('عکس محصول'));
echo Html::td(Html::input('product_image','file','required'));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('دسته بندی محصول'));
echo Html::start_td();
    $option=new Category();
    $res = $option->select()->all();
    echo Html::start_select('product_category','required');
    echo Html::option('','لطفا یک دسته برای محصول انتخاب کنید');
    if ($res) {
        foreach ($res as $rows) {
        echo Html::option($rows['cat_id'],$rows['cat_title']);
        }
    }
echo Html::end_select();
echo Html::end_td();
echo Html::end_tr();
echo Html::endTable();
echo Html::td(Html::input('','submit','value="بارگذاری" class="btn btn-info"'));
echo Html::space();
echo Html::td(Html::input('','reset','value="ریست کردن" class="btn-warning"'));
echo Html::endForm();
echo Html::a(Url::createBackendUrl('product'),"بازگشت","class='btn btn-danger'");
echo Html::endCenter();
<?php
require_once "../../config.php";
include_once '../template/header.php';
$id=(int)$_GET['product_id'];
$link=new product();
$model=$link->select()->where("product_id= $id")->one()->asArray();



echo Html::startCenter();
echo Html::body('style="background-color: beige"');
echo Html::startForm('do_update.php', 'post','enctype="multipart/form-data"');
echo Html::startTable('class="table" width="650" align="center" style="color: darkslategray; border-radius: 5px"');
echo Html::caption(Html::b('اطلاعات جدید مربوط به محصول را در این جدول اضافه کنید'));
echo Html::start_tr();
echo Html::th(Html::b('ویژگی های محصول'));
echo Html::th(Html::b('مقدار ورودی برای هرکدام از ویژگی ها'));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('نام محصول'));
echo Html::td(Html::input('product_name','text',"value='{$model->product_name}' size='70' required autofocus'"));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('قیمت محصول'));
echo Html::td(Html::input('product_price','text',"value='{$model->product_price}' size='70' required"));
echo Html::end_tr();
echo Html::start_tr();
echo Html::td(Html::b('توصیف محصول'));
echo Html::td(Html::textarea('product_desc','required',$model->product_desc));
echo Html::end_tr();
echo Html::start_tr();



echo Html::td(Html::b('عکس محصول'));
$img_html=Html::img("../../asset/image/$model->product_image",'height=100 px;width=100px');
if(strlen($model->product_image)<5){
    $img_html="";
}
    echo Html::td($img_html.Html::input('old_image','hidden',"value='$model->product_image'") .
        Html::input('product_image','file') );

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
        $rows['cat_id']==$model->product_category?$attr=" selected ":$attr="";
        echo Html::option($rows['cat_id'],$rows['cat_title'],$attr);
    }
}
echo Html::end_select();
echo Html::end_td();
echo Html::end_tr();
echo Html::endTable();
echo Html::td(Html::input('','submit','value="بارگذاری" class="btn btn-info"'));
echo Html::space();
echo Html::td(Html::input('','reset','value="ریست کردن" class="btn-warning"'));
echo Html::input("product_id",Html::TYPE_HIDDEN,"value='{$id}'");
echo Html::endForm();
echo Html::a(Url::createBackendUrl('product'),"بازگشت","class='btn btn-danger'");
echo Html::endCenter();
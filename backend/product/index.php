
<?php
require_once "../../config.php";
include '../Template/header.php';
echo Html::startCenter();

//$cat = new Category();
//$cat->select('cat_title')->from('categories,products')->where('product.product_category=categories.id');


$columns=
    [

        'product_name'=>[
            'index'=>'product_name',
            'header'=>'نام محصول',
            'type'=>'text'
        ],
        'product_price'=>[
            'index'=>'product_price',
            'header'=>'قیمت محصول',
            'type'=>'text'
        ],
        'product_desc'=>[
            'index'=>'product_desc',
            'header'=>'توضیحات محصول',
            'type'=>'text'
        ],
        'product_image'=>[
            'index'=>'product_image',
            'header'=>'عکس محصول',
            'type'=>'image'
        ],
        'product_category'=>[
            'index'=>'cat_title',
            'header'=>'دسته محصول',
            'type'=>'text'
        ]
    ];
$grid=new Grid();
$grid->
setTable(product::table_name)
    ->setColumens($columns)
    ->setUrl('product/')
    ->show();

echo Html::a(Url::createBackendUrl('product/insert.php'),"اضافه کردن محصول جدید","class='btn btn-info'");
echo Html::br();
echo Html::br();
echo Html::a(Url::createBackendUrl(''),"بازگشت","class='btn btn-danger'");
echo Session::getMessage();
echo Html::endCenter();

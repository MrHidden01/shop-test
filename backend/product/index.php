<?php
require_once "../../config.php";
include '../Template/header.php';
        $model= new  Product();
        $query= $model->select()->leftJoin(["categories", "categories.cat_id", "products.product_category"])->all();
foreach ($query as $ids) {
    $id = $ids['product_id'];
        $actions = "<a onclick='return confirm(\"آیا برای حذف مطمئن هستید ؟\")'class='btn btn-danger'href='" . Url::createBackendUrl("product/delete.php?product_id=" . $id) . "'
            onclick>";
        $actions .= "حذف</a> | ";
        $actions .= "<a class='btn btn-info' href='" . Url::createBackendUrl("product/update.php?product_id=" . $id) . "'>";
        $actions .= "ویرایش</a>";
}

echo Html::startCenter();
$columns =
    [

        'product_id' => [
            'index' => 'product_id',
            'header' => 'ایدی محصول',
            'type' => 'text'
        ], 'product_name' => [
        'index' => 'product_name',
        'header' => 'نام محصول',
        'type' => 'text'
    ],
        'product_price' => [
            'index' => 'product_price',
            'header' => 'قیمت محصول',
            'type' => 'text'
        ],
        'product_desc' => [
            'index' => 'product_desc',
            'header' => 'توضیحات محصول',
            'type' => 'text'
        ],
        'product_image' => [
            'index' => 'product_image',
            'header' => 'عکس محصول',
            'type' => 'image'
        ],
        'product_category' => [
            'index' => 'cat_title',
            'header' => 'دسته محصول',
            'type' => 'text'
        ]
    ];

$grid = new Grid();
$grid->
setTable(product::table_name)
    ->setColumens($columns)
    ->setUrl('product/')
    ->setAction($actions)
    ->show($query);

echo Html::a(Url::createBackendUrl('product/insert.php'), "اضافه کردن محصول جدید", "class='btn btn-info'");
echo Html::br();
echo Html::br();
echo Html::a(Url::createBackendUrl(''), "بازگشت", "class='btn btn-danger'");
echo Session::getMessage();
echo Html::endCenter();

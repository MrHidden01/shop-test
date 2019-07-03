<?php
class Product extends Model
{

    const table_name = 'products';

    public function tableName()
    {
        return self::table_name;
    }

    public function attributes()
    {
        return ['product_id','product_name','product_price','product_desc','product_image','product_category'];
    }
}
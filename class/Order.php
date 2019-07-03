<?php
/**
 * Created by PhpStorm.
 * User: dia1
 * Date: 3/30/2019
 * Time: 4:43 PM
 */

class Order extends Model
{
    const table_name='orders';
    public function tableName()
    {
        return 'orders';
    }
    public function attributes()
    {
        return ['order_id', 'total', 'product_ids', 'user_email', 'is_paid'];
    }
}
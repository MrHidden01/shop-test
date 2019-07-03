<?php
/**
 * Created by PhpStorm.
 * User: dia1
 * Date: 3/30/2019
 * Time: 4:43 PM
 */

class Profile extends Model
{
    public function tableName()
    {
        return  'shipping_address';
    }
    public function attributes()
    {
        return ['address_id', 'Lname_Fname', 'mobile_num', 'province', 'city', 'postal_code','postal_address','user_email','order_id'];
    }
}
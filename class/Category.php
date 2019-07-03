<?php
/**
 * Created by PhpStorm.
 * User: dia1
 * Date: 3/30/2019
 * Time: 4:43 PM
 */

class Category extends Model
{
    const table_name='categories';
    public function tableName()
    {
        return 'categories';
    }
    public function attributes()
    {
        return ['cat_id', 'cat_title'];
    }
}
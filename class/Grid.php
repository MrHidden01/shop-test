<?php
class Grid
{

    private $column;
    private $table;
    private $url;

    public function setColumens(array $data)
    {
        $this->column=$data;
        return $this;
    }
    public function setUrl($url)
    {
        $this->url=$url;
        return $this;
    }

    public function setTable($table)
    {
        $this->table=$table;
        return $this;
    }

    private function assignType($type,$value)
    {
        switch ($type){
            case "text";
                return $value;
                break;
            case "link";
                return Html::a($value,$value," target='_blank' style='color:blue' ");
                break;
            case "image";
                return "<img src=../../asset/image/$value style='max-width: 100px;max-height: 120px;'>";
            case "date";
                return date('Y/m/d H:i:s',$value);
                break;
            default:
                throw new Exception("type not found",500);
                break;
        }
    }

    private function makeData($data)
    {
        $columns=$this->column;
        $html="<table class='table'>";
        $html.="<thead>";
        $html.="<tr>";
        foreach ($columns as $column){
            $html.="<td>";
            $html.=$column['header'];
            $html.="</td>";
        }
        $html.="<td>";
        $html.='اقدامات';
        $html.="</td>";
        $html.="</tr>";
        $html.="</thead>";
        //end head
        $html.="<tfoot>";
        foreach ($data as $d){
            $html.="<tr>";
                foreach ($columns as $col){
                    $html.="<td>";
                    $current_data=$d[$col['index']];
                     $html.=$this->assignType($col['type'],$current_data);
                    $html.="</td>";
                }
            $html.="<td>";
            $html.="<a onclick='return confirm(\"آیا برای حذف مطمئن هستید ؟\")' class='btn btn-danger' href='".Url::createBackendUrl($this->url."delete.php?product_id=".$d['product_id'])."'
            onclick>";
            $html.="حذف</a> | ";
            $html.="<a class='btn btn-info' href='".Url::createBackendUrl($this->url."update.php?product_id=".$d['product_id'])."'>";
            $html.="ویرایش</a>";
            $html.="</td>";
            $html.="</tr>";
        }
        $html.="</tfoot>";
        $html.="</table>";
        return $html;
    }
    public function show(){
//        $res = new Category();
//        $data = ($res->select()->from($this->table)->all());
        $model = new  product;
        $data=$model->select()->leftJoin(["categories","categories.cat_id","products.product_category"])->all();
        $html=$this->makeData($data);
        echo $html;
    }
}

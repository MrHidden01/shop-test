<?php
/**
 * Created by PhpStorm.
 * User: dia1
 * Date: 3/30/2019
 * Time: 5:02 PM
 */

class Html
{
    const TYPE_HIDDEN="hidden";
    const TYPE_TEXT="text";

    public static function p($value)
    {
        return "<p>$value</p>";
    }
    public static function h1($value)
    {
        return "<h1>$value</h1>";
    }
    public static function h2($value)
    {
        return "<h2>$value</h2>";
    }
    public static function h3($value)
    {
        return "<h3>$value</h3>";
    }
    public static function h4($value)
    {
        return "<h4>$value</h4>";
    }
    public static function h5($value)
    {
        return "<h5>$value</h5>";
    }
    public static function start_div($class,$attr='')
    {
        return "<div class='$class' $attr>";
    }
    public static function end_div()
    {
        return "</div>";
    }
    public static function a($link,$title,$attr='')
    {
        $str="<a $attr href='$link'>$title</a>";
        return $str;
    }
    public static function br()
    {
        $str = "<br>";
        return $str;
    }
    public static function hr($attr='')
    {
        $str = "<hr $attr>";
        return $str;
    }
    public static function img($src,$attr='')
    {
        $str = "<img src='$src' $attr>";
        return $str;
    }

    public static function startForm($action, $method= 'product', $attr='')
    {
        return "<form action='$action' method='$method' $attr >";
    }
    public static function endForm()
    {
        return "</form>";
    }
    public static function input($name,$type,$attr='')
    {
        return "<input type='$type' name='$name' $attr>";
    }
    public static function textarea($name,$attr='',$value='')
    {
        return "<textarea name='$name' $attr>$value</textarea>";
    }
    public static function submit($lable,$attr='')
    {
        return "<button $attr>$lable</button>";
    }
    public static function label($for,$label,$attr='')
    {
        return "<label for='$for' $attr>$label</label>";
    }

    public static function startCenter()
    {
        return "<center>";
    }
    public static function endCenter()
    {
        return "</center>";
    }
    public static function start_select($name,$attr='')
    {
        return "<select name='$name' $attr>";
    }
    public static function end_select()
    {
        return "</select>";
    }
    public static function option($value,$label,$attr='')
    {
        return "<option $attr value='$value'>$label</option>";
    }
    public static function script($value,$type='')
    {
        return "<script type='$type'>$value</script>";
    }
    public static function link($rel,$type,$href)
    {
        return "<link rel='$rel' type='$type' href='$href' >";
    }
    public static function start_head()
    {
        return "<head>";
    }
    public static function end_head()
    {
        return "</head>";
    }
    public static function start_tr()
    {
        return "<tr>";
    }
    public static function end_tr()
    {
        return "</tr>";
    }
    public static function td($label)
    {
        return "<td>$label</td>";
    }
    public static function start_td()
    {
        return "<td>";
    }
    public static function end_td()
    {
        return "</td>";
    }
    public static function body($attr='')
    {
        return "<body $attr></body>";
    }
    public static function startTable($attr='')
    {
        return "<table $attr>";
    }
    public static function endTable()
    {
        return "</table>";
    }
    public static function startThead($attr='')
    {
        return "<thead $attr>";
    }
    public static function endThead()
    {
        return "</thead>";
    }
    public static function startTbody($attr='')
    {
        return "<tbody $attr>";
    }
    public static function endTbody()
    {
        return "</tbody>";
    }

    public static function space()
    {
        return"&nbsp;";
    }
    public static function caption($label)
    {
        return"<caption>$label</caption>";
    }
    public static function b($label)
    {
        return"<b>$label</b>";
    }
    public static function th($label)
    {
        return"<th>$label</th>";
    }

    public static function span($label)
    {
        return "<span>$label</span>";
    }
    public static function button($name,$type,$label,$attr='')
    {
        return "<button name='$name' type='$type' $attr>$label</button>";
    }







}
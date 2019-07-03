<?php
class Url
{
    /**
     * @param $page
     * @return string
     */
    public static function createUrl($page)
    {
        return base_url.$page;
    }


    /**
     * @param $page
     * @return string
     */
    public static function createFrontUrl($page){
      return  self::createUrl("frontend/".$page);
    }

    /**
     * @param $page
     * @return string
     */
    public static function createBackendUrl($page){
      return  self::createUrl("backend/".$page);
    }

    /**
     * @param $page
     */
    public static function redirect($page,$is_admin=false)
    {
        if ($is_admin) {
            header('location:' . self::createBackendUrl($page));
        }else{
            header('location:' . self::createFrontUrl($page));
        }


        }

    public static function homeUrl()
    {
        return self::createUrl("");
    }
    public static function getAssetFile($file)
    {
        return self::homeUrl()."asset/".$file;
    }

}














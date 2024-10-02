<?php

if(!function_exists('Delete')){
    function Delete($string)
    {
        $paths = [
            "img/slider/",
            "img/about/",
            "img/kategori/",
            "img/icon/",
            "img/work/"
        ];
        if($string == null){
            return true;
        }
        $temp = false;

        foreach ($paths as $path){
            $filePath = public_path($path.$string);

            if(file_exists($filePath)){
                if(!empty($string)){
                    $temp = true;
                    unlink($filePath);
                    return $temp;
                }
            }
        }

        return $temp;
    }
}

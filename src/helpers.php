<?php

if (!function_exists('routeBack')) 
{
    /**
     * Get the url to route to provide back id
     */
    function routeBack($route, $param)
    {
        return route('routeBack', array_merge([$route], $param));
    }
}

if (!function_exists('backUrl')) 
{
    /**
     * Generate the back url
     */
    function backUrl($request,$defaultUrl=null)
    {
        $backId = $request->get('back');
        $backUrls = session('backUrls', []);
        if(!empty($backId)&&isset($backUrls[base64_decode($backId)])){
            return $backUrls[base64_decode($backId)];
        }else if(!empty($default)){
            return $defaultUrl;
        }else{
            return '#';
        }
    }
}

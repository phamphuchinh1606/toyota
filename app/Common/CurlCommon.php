<?php

namespace App\Common;

use Storage;
use Curl;

class CurlCommon{

    public static function curl_get_page_to_dom_xpath($url){
        $response = Curl::to($url)->get();
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $internalErrors = libxml_use_internal_errors(true);
        $dom->loadHTML($response);
        $finder = new \DOMXPath($dom);
        return $finder;
    }

}
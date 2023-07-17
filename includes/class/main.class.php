<?php

// Main website functions go in this class

Class Main {

  public static function httpRequest($url) {
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.91 Safari/537.36');
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
     curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
     $data = curl_exec($ch);
     curl_close($ch);
     return $data;
  }

  public static function cacheJson()
    {
        global $request_type, $purge_cache, $limit_reached, $request_limit;
        $cache_file = dirname(__FILE__) . '/cache/faucets.json';
        $expires    = time() - '6000';
        $api_results  = json_decode(self::httpRequest('https://coinfaucets.co/api'), 2);
        $json_results = json_encode($api_results, JSON_UNESCAPED_SLASHES);
        if (!file_exists($cache_file))
            @fwrite($cache_file, $json_results);
        if (@filectime($cache_file) < $expires || file_get_contents($cache_file) == '' || $purge_cache && intval($_SESSION['views']) <= $request_limit) {
            if ($api_results && $json_results)
                file_put_contents($cache_file, $json_results);
            else
                unlink($cache_file);
        } else {
            $json_results = file_get_contents($cache_file);
            $request_type = 'JSON';
        }
        return json_decode($json_results, 2);
    }


}

?>

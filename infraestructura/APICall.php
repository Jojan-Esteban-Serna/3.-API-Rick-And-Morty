<?php
function api_call($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $res = curl_exec($ch);
    curl_close($ch);
    return $res;
}

function multi_api_call($urls){
    $mh = curl_multi_init();
    $chs = array();
    foreach ($urls as $url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
        curl_multi_add_handle($mh, $ch);
        array_push($chs, $ch);
    }
    $running = null;
    do {
        curl_multi_exec($mh, $running);
    } while ($running);
    $res = array();
    foreach ($chs as $ch) {
        $res[] = curl_multi_getcontent($ch);
        curl_multi_remove_handle($mh, $ch);
    }
    curl_multi_close($mh);
    return $res;
}
?>
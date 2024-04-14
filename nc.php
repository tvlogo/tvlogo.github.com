<?php
$id = urldecode($_GET['id']);
if (preg_match('/^[1-9]\d*$/', $id)) {
    $data = file_get_contents('https://gapi.nctvcloud.com/zsnc/liveurl');  
    $json = json_decode($data, true);  
    $liveurl = $json[$id - 1]['liveurl'];  
    $live_wx_url = $json[$id - 1]['live_wx_url'];  
  
    $id = str_replace('\u0026', '&', $id);  
    header('Location: ' . $liveurl);  
    header('Location: ' . $live_wx_url);  
    exit();  
} else {  
}
?>

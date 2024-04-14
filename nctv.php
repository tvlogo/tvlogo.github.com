<?php
$id = $_GET['id']; // 获取 id 参数

// 判断 id 是否在 1-12 范围内
if ($id >= 1 && $id <= 12) {
    // 读取对应的响应体
    $data = file_get_contents('https://gapi.nctvcloud.com/zsnc/liveurl');
    $json = json_decode($data, true);
    $live_wx_url = $json[$id - 1]['live_wx_url'];
   
    // 跳转到直播链接
    header('Location: ' . $live_wx_url);
    exit();
} else {
    // id 参数不合法，返回错误页面或者其他处理
    // ...
}

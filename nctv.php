<?php
// 检查是否存在id参数
if (!isset($_GET['id'])) {
    echo "请输入合法的id值（1-7）";
    exit;
}

// 获取id参数
$id = $_GET['id'];

// 检查id值是否合法
if ($id < 1 || $id > 7) {
    echo "请输入合法的id值（1-7）";
    exit;
}

// 发起请求获取接口数据
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://gapi.nctvcloud.com/cutv/list");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// 解析JSON数据
$data = json_decode($response, true);

// 根据id获取对应的liveurl
$liveurl = $data['url'][$id-1]['liveurl'];

// 跳转到对应的liveurl
header("Location: {$liveurl}");
exit;
?>

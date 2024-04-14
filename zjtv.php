<?php

function get_id($id): string
{
    $id_list = [
        "1" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAwMS8xMDgwcC5tM3U4",
        "2" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAwMi8xMDgwcC5tM3U4",
        "3" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAwMy8xMDgwcC5tM3U4",
        "4" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAwNC8xMDgwcC5tM3U4",
        "5" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAwNy8xMDgwcC5tM3U4",
        "6" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAwNi8xMDgwcC5tM3U4",
        "7" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAwOC8xMDgwcC5tM3U4",
        "8" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAxMi8xMDgwcC5tM3U4",
        "9" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAxMC8xMDgwcC5tM3U4",
        "10" => "L2NoYW5uZWxzL2xhbnRpYW4vY2hhbm5lbDAxMS8xMDgwcC5tM3U4",
    ];
    if (array_key_exists($id, $id_list)) {
        return $id_list[$id];
    } else {
        return '';
    }

}

function get_u($e): string
{
    return base64_decode('aHR0cDovL2FsaS1tLWwuY3p0di5jb20=') . base64_decode($e);
}


$id = $_GET['id'] ?? '';
$abc = get_id($id);

if ($abc) {
    $url = get_u($abc);
    header("HTTP/1.1 301 Moved Permanently");
    header('Location:'.$url);
} else {
    echo 'id错误';
}
exit;

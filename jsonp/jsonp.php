<?php
    $username = $_GET["username"];
    $cb = $_GET["cb"];
    $json = file_get_contents("json/a.json");
    $json = json_decode($json);

    $arr = array("code" => "200", "msg" => "成功", "data" => $json);
    $arr = json_encode($arr);
    echo "$cb(".$arr.")";
    //  "fn({code: 200, msg: "成功", data: []})"
?>
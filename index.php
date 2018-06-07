<?php
// JSON形式のテキストを生成する
$json = <<< JSON_DOC
{
    "hosts" : [
        "mcms.zendesk.com",
        "mcms1517905809.zendesk.com"
    ],
    "targetWords" : {
        "common" : ["いつもお世話になっております。"],
        "mcms.zendesk.com": ["gtr", "test"],
        "mcms1517905809.zendesk.com": ["テスト"]
    }
}
JSON_DOC;

// JSON用のヘッダを定義して出力
header("Content-Type: text/javascript; charset=utf-8");
echo $json;
exit();
?>

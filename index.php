<?php
header('Access-Control-Allow-Origin: *');
// JSON形式のテキストを生成する
$json = <<< JSON_DOC
{
    "hosts" : [
      {
        host : "mcms.zendesk.com",
        id : 1,
        name : "zendesk本番"
      },
      {
        host : "mcms1517905809.zendesk.com",
        id : 2,
        name : "サンドボックス"
      }
    ],
    "targetWords" : [
      {
        common : [
          "いつもお世話になっております。",
          "ClickM@ilerテクニカルサポート"
        ]
      },
      {
        mcms.zendesk.com : [
          "いつもお世話になっております。",
          "ClickM@ilerテクニカルサポート"
        ]
      },
      {
        mcms1517905809.zendesk.com : [
          "いつもお世話になっております。",
          "ClickM@ilerテクニカルサポート"
        ]
      }
    ]
}
JSON_DOC;

// JSON用のヘッダを定義して出力
header("Content-Type: text/javascript; charset=utf-8");
echo $json;
exit();
?>

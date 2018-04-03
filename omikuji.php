<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ポプテみくじ</title>
  <link rel="stylesheet" href="top.css">
</head>
<body>

<?php
//乱数
$omikuji = rand(0,4);
//mt_randおみくじ結果設定
if ($omikuji == 0) {
  $fuda = "kyou.png";
} else if ($omikuji == 1) {
  $fuda = "kiti.png";
} else if ($omikuji == 2) {
  $fuda = "syoukiti.png";
} else if ($omikuji == 3) {
  $fuda = "cyuukiti.png";
} else {
  $fuda = "daikiti.png";
}
//結果表示
echo "<p>あなたの運勢は</p>";
echo "<img src=\"$fuda\">";
echo "<p>です！</p>";
?>

</body>
</html>

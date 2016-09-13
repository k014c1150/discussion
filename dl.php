<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
		<style>
		</style>
		<title>ＤＬ</title>
	</head>
	<body>
	<div class=room>
		<p>ディスカッションが終了しました。お疲れさまでした</p>
		<a href="aaa.txt">議事録のダウンロード</a><br>
		<button type="submit" name="end" value="end">戻る</button>
	</div>
<?php
$file = "test.txt";
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$file");
readfile($file);
exit;
?>
	</body>

</html>

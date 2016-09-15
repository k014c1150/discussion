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
<script>
function loadContent(){
var loaded = window.sessionstorage.getItem("saveeditor");
document.getElementById("textarea").innerText = loaded;
clssw = 1;
}

</script>
</div>
<input type="button" name="loadbtn" value="load" onclick="loadContent()" />



	</body>

</html>

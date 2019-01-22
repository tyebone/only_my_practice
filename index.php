<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

?>



<!DOCTYPE html>
<html lang = "ja">
<head>
	<title>サインアップ練習</title>
	<meta charset="utf-8">
</head>
<body>
	練習中	
	<form action = "timeline.php" method="POST">

		<div>ユーザー名:
			<input type = "text" name = "username">
		</div>



		<div>メールアドレス:
			<input type = "email" name = "email">
		</div>

		<div>パスワード:
			<input type ="password" name = "password">
		</div>

		<div>画像:
			<input type = "file" name = "user_img">
		</div>
		<input type = "submit" nmae = "submit">
	
	</form>	
</body>
</html>
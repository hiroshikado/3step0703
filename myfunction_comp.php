<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>オリジナルの関数を作ろう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>オリジナルの関数を作ろう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php 
		function add( $num1, $num2 ) {
			echo $num1 + $num2;
		}
		
		add(10, 20);
		?>
		<br>
		<?php
		function minus( $num1, $num2 ) {
			return $num1 - $num2;
		}
		$result = minus(30, 10);
		echo $result;
		?>
	</div>
</body>
</html>

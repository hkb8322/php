<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();

$name = $_POST['name'];
$password = $_POST['pw'];

/*
$name = $_POST['name'];
$year = $_POST['year'];
$mon = $_POST['mon'];
$day = $_POST['day'];
$age = 2016 - $year + 1;
*/
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
  if( $name == "hkb8322" && $password == "1234" ) {
	$_SESSION['isLogin'] = 1;
	$_SESSION['name'] = $name;
// 	setCookie('isLogin', '1' );
//	setCookie('name', $name );
?>

<h1>로그인 성공</h1>
당신의 아이디는 <?=$name?>이고,
비밀번호는 <?=$password?>이군요.

로그인 페이지로 <a href="./postForm.php">돌아가기</a>

<?php
  }
  else {
 	setCookie('isLogin', '0');
	setCookie('name', '');
	$_SESSION['isLogin'] = 0;
	$_SESSION['name'] = '';
?>

<h1>당신은 누구?</h1>
아이디 혹은 비밀번호가 잘못되었습니다. <br>
다시 로그인하세요. <br>
로그인 페이지로 <a href="./postForm.php">돌아가기</a>

<?php
}
?>

<!--
<h1>Wow!</h1>
I know you, <?=$name?>!!<br>
Your Birthday is <?=$year?>-<?=$mon?>-<?=$day?>.<br>
Your age is <?=$age?> years old.
-->

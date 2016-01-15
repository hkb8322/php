<?php
  session_start();
  header("Content-Type: text/html; charset=UTF-8");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
  // $isLogin = $_COOKIE['isLogin'];
  $isLogin = $_SESSION['isLogin'];
  if( $isLogin != 1 ) {
?>

<h1>로그인</h1>

<form class="navbar-form navbar-left" action="postResult.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="name"  placeholder="ID">	
    <input type="password" class="form-control" id="pw" name="pw"  placeholder="Password">
	
  </div>
  <button type="submit" class="btn btn-default">로그인 하기</button>
</form>

<!--
<form method="post" action="postResult.php" class="navbar-form navbar-left">
	<h1> For you, VOMVOM service~ </h1>
	Input Your Name<br>
	<input type="text" class="form-control" name="name" id="name" value=""><br>

	Input Your Birthday(ex:)<br>
	<input type="text" class="form-control" name="year" id="year" values="">	
	<input type="text" class="form-control" name="mon" id="mon" values="">
	<input type="text" class="form-control" name="day" id="day" values=""> <br>

	<input type="submit" class="btn btn-default navbar-btn" value="View My Result">
</form>
-->

<?php
  }
  else {
//	$name = $_COOKIE['name'];
	$name = $_SESSION['name'];
?>

<?=$name?>님, 이미 로그인이 되어있습니다다.<br>
로그아웃 하시려면, 아래 버튼을 누르세요. <br>

<a href="postLogout.php" class="btn btn-default">로그아웃</a>

<?php 
}
?>

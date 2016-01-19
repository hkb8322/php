<?php
//postForm.php
  header("Content-Type: text/html; charset=UTF-8");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<h1>당신의 가장 예쁜 부위는?</h1>
<h3>당신은 어느 부위가 가장 예쁠까요?</h3>
<h3><?=$count?>명이 참여하였습니다.</h3>
<form class="navbar-form navbar-left" action="index.php" method="post">
  <div class="form-group">
     <input type="text" class="form-control" id="name" name="name"  placeholder="이름을 입력하세요.">	
  </div>
  <button type="submit" class="btn btn-default">확인해보기</button>
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

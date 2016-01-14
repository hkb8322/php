<?php
header("Content-Type: text/html; charset=UTF-8");

$urls['fb']=  "http://www.facebook.com/";
$urls['jaurim']=  "http://www.jaurim.com/";
$urls['mirim']=  "http://www.e-mirim.hs.kr/";
$urls['and']=  "http://dev.android.com/";

if(array_key_exists( $url, $urls)) {
  header("Location: ", $urls[$url] );
  exit();
} else {
	echo $url. "는 등록되지 않은 주소입니다.";
}

$url = $_GET['url'];

switch( $url ) {
case "fb":
	header("Location: http://www.facebook.com/");
	exit();
	break;

case "jaurim":
	echo "자우림";
	header("Location: http://www.jaurim.com.");
	exit();
	break;

case "mirim":
	header("Location: http://www.e-mirim.hs.kr/");
	exit();
	break;

case "and":
	header("Location: http://dev.android.com/");
	exit();
	break;

default:
	echo "기타 : " . $url;
	break;
}

?>

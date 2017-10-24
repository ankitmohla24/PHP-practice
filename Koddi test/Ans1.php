<!DOCTYPE html>
<html>
<body>

<?php
	$url = "http://www.example.com?u1=US&u2=HA853&u3=HPA";
	$pattern = '/u2=[0-9A-Za-z]*/';
	preg_match($pattern, $url, $u2value);
	$u2 = explode("=", $u2value[0]);
	print_r($u2[1]);
?>

</body>
</html>

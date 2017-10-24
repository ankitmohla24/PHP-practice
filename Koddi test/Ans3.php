<!DOCTYPE html>
<html>
<body>

<?php
	$arr = array(2,4,1,3);
	$reversed = array_reverse($arr);
$str= implode(':', $reversed);
print_r($str);
?>

</body>
</html>

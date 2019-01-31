<?php
session_start();
$_SESSION("name") ="Name";
$t[0] = time();
$t[1] = time();
///////
////////////
////////Function test
$abss = abs(-3.5);
$flo = floor(-3.4);
$xib = ceil(3.5);
$rdd  =round(3.5);
$andd =rand(90,100);

echo $abss." ;".$flo." ".$xib." ".$rdd." ".$andd;
$t[2] = time();
$t[3] = time();
$nian = $t[0]/(3600*24)/360;
$rq=  date("M-d-y H:m:s");
var_dump($t);
var_dump($nian);
var_dump($rq);

?>
<html>
<body>
<a href="ses.php">session</a>
</body></html>
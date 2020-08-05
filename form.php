<?php

$firs = $_POST['fno'];
$secd = $_POST['sno'];
$rad = $_POST['radioBt'];
$res = 0;
if($rad == "add"){
  $res = $firs + $secd;
}
else if($rad == "sub"){
  $res = $firs - $secd;
}
else if($rad == "mul"){
  $res = $firs * $secd;
}
else{
  $res = $firs / $secd;
}

echo($res);
header("localhost:practical.html");

?>

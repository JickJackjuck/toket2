<?php
require "./lib.php";
$reff = "5ANW6TAI5";
echo ">>>> : "; $mail = trim(fgets(STDIN));
echo RegisterBigToken($mail, $reff);
?>

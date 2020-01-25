<?php

session_start();
$email=$_SESSION['email'];
$cmd="python php_otp.py $email";
$_SESSION['otp']=shell_exec($cmd);
?>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=provider_otp.php'>
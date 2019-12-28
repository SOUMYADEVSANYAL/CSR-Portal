<?php

session_start();

$a=$_POST['session_otp'];
$b=$_POST['input_otp'];
if ($a==$b) {
    echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=new-password.php'>";
}else{
	echo "<META HTTP-EQUIV='Refresh'' CONTENT='0; URL=update_fail.html'>";
}
?>
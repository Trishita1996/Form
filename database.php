<!DOCTYPE html>
<html lang = "en" >
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta charset = "utf-8">
<meta name ="viewport" content = "width=device-width, initial-scale = 1">
<title>Details Page</title>
</head>
<body>
<?php
$SiteName = $_POST['SiteName'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$cityname = $_POST['cityname'];
$email = $_POST['email'];
$statename = $_POST['statename'];
$websitename = $_POST['websitename'];
$pincode = $_POST['pincode'];
$yesNo  = $_POST['yesNo'];

$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="qrs_db";  //database name which you created
$con=mysqli_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysqli_error());
}

mysqli_select_db($con,$database);
if($yesNo=="no"){
    mysqli_query($con,"insert into data_sheet values('$SiteName','$address','$phonenumber','$cityname','$email','$statename','$websitename','$pincode','$yesNo','Nil','Nil','Nil','Nil','Nil','Nil','Nil','Nil','Nil','Nil');");
}
else if ($yesNo=="yes"){
    $Name = $_POST['Name'];
    $address2 = $_POST['address'];
    $ECphonenumber = $_POST['ECphonenumber'];
    $cityname2 = $_POST['cityname'];
    $email2 = $_POST['email'];
    $statename2 = $_POST['statename'];
    $websitename2 = $_POST['websitename'];
    $pincode2 = $_POST['pincode'];
    $ECyesno = $_POST['ECyesno'];
    $registrationnumber = $_POST['registrationnumber'];
    mysqli_query($con,"insert into data_sheet values('$SiteName','$address','$phonenumber','$cityname','$email','$statename','$websitename','$pincode','$yesNo','$Name','$address2','$ECphonenumber','$cityname2','$email2','$statename2','$websitename2','$pincode2','$yesNo','$registrationnumber');");
}

?>
<h3 align="center"><font color = "orange" size = "4" face = "Arial Black">
<img src="img.png" alt ="thanku" style="width:800px;height:400px;" ><br>

<A href="Registration.html" target ="_blank"><b><u>   "Click here to go to Homepage"    </u></b></A>

</h3>
</body>
</head>
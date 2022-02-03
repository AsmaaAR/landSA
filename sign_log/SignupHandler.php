<?php
$ID = $_POST["ID"];
$IDType = $_POST["IDType"];
$fristName = $_POST["fristName"];
$middleName = $_POST["middleName"];
$lastName = $_POST["lastName"];
$birthday = $_POST["birthday"];
$IBAN = $_POST["IBAN"];
$phone = $_POST["phone"];
$Password = $_POST["Password"];

inclued ="connection.php";

$insertUser = "INSERT INTO users (ID,IDType,fristName,middleName,lastName,birthday,IBAN,phone,Password) 
value('$ID','$IDType','$fristName','$middleName','$lastName','$birthday','$IBAN','$phone','$Password')";
$result = mysqli_query($con,$insertUser); #send query to the databaes to use insert method

# في حالة حصول اخطاء يتم انشاء رسائل
if($result){
	 echo "<h1>User created Successfully</h1>";
     header('Location: login.php');
}
else {
	die("Error: ".mysqli_errno($con));
}

?>
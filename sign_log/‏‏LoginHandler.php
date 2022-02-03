<?php
$ID = $_POST["ID"];
$Password = $_POST["Password"];

inclued ="connection.php";

$login= "SELECT ID,Password FROM users WHERE ID= '$ID' and Password='$Password'";

$result = mysqli_query($con,$login); 

$count = mysqli_num_rows($result);

# في حالة حصول اخطاء يتم انشاء رسائل
if($count == 1){
	session_start();
	$_SESSION['loggedin'] = true;
    $_SESSION["ID"] = $ID;
    header('Location: homePage.php');
    #echo "<h2>welcome</h2>";
}
else{
    echo "<h2>Invalid ID and Password</h2>";
}

?>
<!DOCTYPE html>
<html>
<body>


    <?php


$v= (isset($_GET['name']) ? $_GET['name'] : null);
$w= (isset($_GET['long']) ? $_GET['long'] : null);



$id=0;
define ('DB_NAME','donor');
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link){
	die('could not connect:'. mysqli_error());
}
$database_name=DB_NAME;
$db_selected = mysqli_select_db($link,$database_name);
if(!$db_selected){
	die('can\'t use' .DB_NAME. ':'.mysqli_error());
}
$id=0;

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link){
	die('could not connect:'. mysqli_error());
}

$db_selected = mysqli_select_db($link,$database_name);
if(!$db_selected){
	die('can\'t use' .DB_NAME. ':'.mysqli_error());
}

//if($v0!=null and $v1!=null and $v2!=null and $v3!=null and $v4!=null and $v5!=null and $v7!=null and $v7!=null ){


	//echo "name : $v0 <br>D: $v1 <br> T : $v2<br>B : $v3<br>S : $v4 <br>Test :  $v5 <br>M:  $v6<br>E : $v7<br>";
	$sql = "INSERT INTO dcoordinates  VALUES ('$id','$v','$w')";

if(!mysqli_query($link ,$sql)){
	die('ERROR:  '.mysqli_error());
}

	mysqli_close();

header('Location:thankyou.php');
?>


</body>
</html>                                		

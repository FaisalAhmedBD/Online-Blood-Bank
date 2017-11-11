<!DOCTYPE html>
<html>
	<head>
	<title>Registration Successful</title>
<style>
div.inputmsg
{
	width:800px;
	height:400px;
	text-align:center;
	background-color:#ffb3b3;
	border-radius:10px;
	padding-top:70px;
	padding-bottom:50px;
	padding-left:20px;
	margin-bottom:20px;
	margin-left:0px;
	margin-top:30px;
	border:1px solid black;
}
</style>
	</head>
	<body>
	<?php
			   
   
      $v0=NULL; 
  $v1=NULL;
  $v2=NULL;
  $v3=NULL;
  $v4=NULL;
  $v5=NULL;
  $v6=NULL;
  $v7=NULL;	

	?>
	

<?php
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


				//echo "before <br> name : $v0 <br>D: $v1 <br> T : $v2<br>B : $v3<br>S : $v4 <br>Test :  $v5 <br>M:  $v6<br>E : $v7<br>";
			if (isset($_POST['donarname']))    
	{    
      $v0=$_POST["donarname"]; 
	}

	if (isset($_POST['Thana']))    
	{    
	$v1 = $_POST['Thana'];
	}

	if (isset($_POST['District']))    
	{    
	$v2 = $_POST['District'];
	}

	if (isset($_POST['bgroup']))    
	{    
	$v3 = $_POST['bgroup'];
	}

	if (isset($_POST['sex']))    
	{    

	$v4 = $_POST['sex'];
	}

	if (isset($_POST['Testing']))    
	{    
	$v5 = $_POST['Testing'];
	}

	if (isset($_POST['mobile']))    
	{    
	$v6 = $_POST['mobile'];
	}

	if (isset($_POST['email']))    
	{    
	$v7 = $_POST['email'];
	}






//if($v0!=null and $v1!=null and $v2!=null and $v3!=null and $v4!=null and $v5!=null and $v7!=null and $v7!=null ){


	//echo "name : $v0 <br>D: $v1 <br> T : $v2<br>B : $v3<br>S : $v4 <br>Test :  $v5 <br>M:  $v6<br>E : $v7<br>";
	$sql = "INSERT INTO donorinfo  VALUES ('$id','$v0','$v1','$v2','$v3','$v4','$v5','$v6','$v7')";

if(!mysqli_query($link,$sql)){
	die('ERROR:  '.mysqli_error());
}

	mysqli_close();


?>


</body>
</html> 
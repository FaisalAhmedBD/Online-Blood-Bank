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


	if (isset($_POST['bgroup']))    
	{    
	$v3 = $_POST['bgroup'];
	}

	echo "<br>Blood Group : $v3<br>";
	


?>


</body>
</html> 
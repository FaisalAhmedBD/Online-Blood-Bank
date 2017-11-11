<!DOCTYPE html>
<html>
	<head>
	<title>Registration</title>
		<style>
		body{
			background-color:#e6faff;
		}
			p{
			color:black;
			font-size:24px;
			text-align:center;}
			
		div.relative{
    position: relative;
	left:200px;
    bottom: 0;
    right: 0;
    width: 1000px;
	color:white;
	text-align:center;
	
    border: 1px solid black;
				}
				
	div.desc
{
	text-align:center;
}
div.img2{
	background-color:#006680;
	margin-top:20px;
	margin-left:15px;
		border-radius:10px;
}

div.floating-box {
    display: inline-block;
    width: 230px;
    height: 230px;
    margin: 10px;
    border: 1px solid white; 
	border-radius:10px;
		
}
div.fstyle{
	background-color:#006680;
	border-radius:5px;
	padding-left:60px;
	padding-top:20px;
	padding-bottom:20px;
	padding-right:20px;
	color:white;
	width:745px;
	
	
}

				select{
					width:120px;
					text-align:center;
					
		height:27px;
    background: white;
    color:black;
	border:1px solid black;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
select option {
   text-align:center;
    color:black;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
input[type=text] {
    width: 150px;
   height:25px;
   text-align:center;
   border:1px solid black;
}

input[type=submit] {
    width: 90px;
    margin-left: 320px;
	margin-top:10px;
    display: block;
	font-size:16px;
	font-weight:bold;
}
div.donorbox
{
	width:980px;
	
	text-align:center;
background-color:#b5b5b7;
	border-radius:10px;
	padding-top:40px;
	padding-bottom:50px;
	padding-left:20px;
	margin-bottom:20px;
	margin-left:200px;
	margin-top:0px;
	border:1px solid black;
	font-size:16px;
}
#waitmsg{
	display:none;
}


</style>
               

<link href="css/StyleHomePage.css" rel="stylesheet" type="text/css">

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


	</head>
	<body>
		<?php include ("navigation.php");?>
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

		
				
				<form id="myform" method="post" onsubmit="return false;" action="">
				<br>
  

<div class ="donorbox">

	    <h2 style=text-align:left>&nbsp &nbsp &nbsp &nbsp Fill The Form To Register</h2>
		<br>
<p>Name:</p>
<input type="text" name="donarname"/>
<br>

<p>District:</p>
<input type="text" name="District"/>
<br>
<p>Thana:</p>
<input type="text" name="Thana"/>
<br>
<br>
<p>Blood Group:</p>
 <select name="bgroup" >
 <option value=''>Choose...</option>
    <option value="A Positive">A+</option>
    <option value="A Negatve">A-</option>
    <option value="B positive">B+</option>
    <option value="B Negatve">B-</option>
    <option value="O positive">O+</option>
    <option value="O Negatve">O-</option>
	 <option value="AB positive">AB+</option>
    <option value="AB Negatve">AB-</option>
  </select>

<br>
<br>
<p>Sex:</p>

<p style=font-size:20px;><input type="radio" name="sex" value="male" checked>Male<p>

<p style=font-size:20px;><input type="radio" name="sex" value="female">Female</p>
<br>

<p>Have you tested your blood recently?:</p>

<p style=font-size:20px;><input type="radio" name="Testing" value="Tested" checked>Tested</p>

<p style=font-size:20px;><input type="radio" name="Testing" value="Not Tested">Not Tested</p>
<br>
<p>Mobile Number:<br></p>
<input type="text" name="mobile"/>
<br>
<p>Email Adress:</p>
<input type="text" name="email"/>
<br>
<br>

<!--<input type="submit" name="submit" value="Submit" />-->
  <input type="submit" onclick="clicksubmit()" value="Submit" style="text-align:center;margin-left:444px;">
  
  <div id="waitmsg">
  <span> <i class="fa fa-spinner fa-spin"></i> </span>
  Please wait...
  </div>
  
<br>
<br>

</form>
<p id="demo"></p>
	<script type="text/javascript" src="form_submit_script.js"></script>	
<p id="demo"></p>
	
		<script type="text/javascript" src="form_submit_script.js"></script>
		 
		 <p id="demo"></p>
		 <script src="jquery-2.1.3.min.js">
		 
		 </script>
<script>

function clicksubmit(){
	$.ajax({
		type:"POST",
		url:"input.php",
		data: $('#myform').serialize(),
		beforeSend: function(){
			$('#waitmsg').show();
		},
		success:function(data){
			getlocation();
		}
	});
}


var x = document.getElementById("demo");

function getlocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
		
    } /*else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }*/

}

function showPosition(position) {
	
    var la= position.coords.latitude ;

	var lo=position.coords.longitude;
	

	document.location = 'Savegeolocation.php?name=' + la+'&long='+lo;

}





</script>


</div>
		<?php include ("Footer.html");?>
</body>
</html> 
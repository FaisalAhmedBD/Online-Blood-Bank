<!DOCTYPE html>
<html>
<head>
<title>Donars</title>
<link href="css/donarpagedesign.css" rel="stylesheet" type="text/css">
<style>
body {
   background-image: url("black-background_00313351.jpg");
	color:white;
	
	
	font-family:comic sans ms;
}
div.footer{
	margin-left:7.7%;
	margin-right:8%;
	background:#D2D2E6;
	color:fff;
	margin-top:25px;
	padding:2px;
	text-align:center;
}
#div
{
	border:1px solid black;
	width:1000px;
	    margin-top: 10px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 150px;
}
#waitmsg{
	display:none;
}
</style>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/StyleHomePage.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="main">  
	<div class="header"><img src="banner5.jpg" align="left">         <!--Banner-->
<br>

<br>
<iframe src="http://free.timeanddate.com/clock/i4zzj04z/n73/tlbd43/fs28/fcff9/tct/pct/ftbi/pa18/tt0/tw1/th1/ta1/tb4" frameborder="0" width="408" height="112" allowTransparency="true"></iframe>






</div> 



<br>
<br>
     <?php include ("navi.php");?>
	<br>
	<br>
	<p style=" font-size:150%;">Fill-up The form:</p>
	<br>
	<div class="maincontent"> 
	<div class="content2"> 
	
	<br>
	<br>
	 
	
	
	
<div id="donars">
<form id="myform" method="post" onsubmit="return false;" action="">
				<br>
     

<div class ="donorbox">

	 
Name:<br>
<input type="text" name="donarname"/>
<br>

District:<br>
<input type="text" name="District"/>
<br>
Thana:<br>
<input type="text" name="Thana"/>
<br>
<br>
Blood Group:
 <select name="bgroup" >
<option value=''>Choose Your Blood-group</option>
     <option value="A positive">A+</option>
    <option value="A negative">A-</option>
    <option value="B positive">B+</option>
    <option value="B negative">B-</option>
    <option value="O positive">O+</option>
    <option value="O negative">O-</option>
	 <option value="AB positive">AB+</option>
    <option value="AB negative">AB-</option>
  </select>

<br>
<br>
Sex:
<br>
<input type="radio" name="sex" value="male" checked>Male
<br>
<input type="radio" name="sex" value="female">Female
<br><br>
<br><br>
Have you tested your blood recently?:
<br>
<input type="radio" name="Testing" value="Tested" checked>Tested
<br>
<input type="radio" name="Testing" value="Not Tested">Not Tested
<br><br>
Mobile Number:<br>
<input type="text" name="mobile"/>
<br>
Email Adress:<br>
<input type="text" name="email"/>
<br>
<br>

<!--<input type="submit" name="submit" value="Submit" />-->
  <input type="submit" onclick="clicksubmit()" value="Submit">
  
  <div id="waitmsg">
  <span> <i class="fa fa-spinner fa-spin"></i> </span>
  Please wait...
  </div>
  
<br>
<br>

</form>
</div>
</div>
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
	
   // x.innerHTML = "Latitude: " +la+ 
   // "<br>Longitude: " + lo;	
	document.location = 'Savegeolocation.php?name=' + la+'&long='+lo;

}





</script>

</div>

<br>
 <br>
 <br>
 <div class="footer"><p style="color:Black";>Copyright &copy; Adnan's Blood Bank 2015. All Rights Reserved.</p></div> 
</body>

</html>

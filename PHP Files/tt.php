<!DOCTYPE html>
<html>
	<head>
	<title>Search</title>
		<style>
		body
		{

	color:black;

			background-color:#e6faff;
		
	
	font-family:comic sans ms;
		}
			p{
			color:black;
			font-size:150%;
			text-align:center;}
			
		
				


				select{
					width:120px;
					text-align:center;
					
		height:27px;
   
    color:black;
	border:1px solid black;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
select option {
   text-align:center;
    color:black;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}


input[type=submit] {
    width: 90px;
    margin-left: 320px;
	margin-top:10px;
    display: block;
	
	font-weight:bold;
}

#waitmsg{
	display:none;
}

center table,td,th
{
 padding-left:20px;
 padding-right:20px;
 margin-left:5px;
 margin-right:5px;
 margin-top:20px;
 border-collapse:collapse;
font-size:80%;
 border:solid 2px #001a33;
 color:black;
}
th{background:#A6CAF0;
color:black;
font-weight:bold
}

td a{color: blue;text-decoration:none;font-size:100%;}
a:visited {
    
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: green;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
div.ttcontent
{
	width:1090px;
	border:1px solid black;
border-radius:10px;
 position: relative;
 margin-left:155px;
 background-color:#b5b5b7;
}
div.maincontenttt{
	margin-left:20px;
	width:1050px;
		border:1px solid #994d00;
		margin-top:20px;
		background-color:white;
			border-radius:7px;
			
			background-color:#e6f9ff;
}
div.searchboxtt{
	text-align:center;
	background-color:white;
	width:680px;
	text-align:center;
	margin-left:220px;
	border-radius:10px;
	border:1px solid black;
	background-color:#e6f9ff;
}
</style>
               

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">




	</head>
	<body>
 
		<?php include ("navigation.php");?>
		
		<div class="ttcontent">
		<h2>&nbsp &nbsp &nbsp Aviable Donors</h2>
		<div class="maincontenttt"> 




<div class="sidebar2"> 

 
 <center>
<table align="center" border="1" width="960px"  >
<tr>

<th><p><b>Donor Name</b></p></th>
<th><p><b>Sex</b></p></th>
<th><p><b>Thana</b></p></th>
<th><p><b>District</b></p></th>
<th><p><b>Blood Group</b></p></th>
<th><p><b>Contact</b></p></th>
<th><p><b>Email</b></p></th>
<th><p><b>Blood Test</b></p></th>
<th><p><b>Distance (Mile)  </b></p></th>
</tr>
<?php

$v= (isset($_GET['name']) ? $_GET['name'] : null);
$w= (isset($_GET['long']) ? $_GET['long'] : null);
$bgp= (isset($_GET['b']) ? $_GET['b'] : null);
?>


<?php

define ('DB_NAME','donor');
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');

$link=mysqli_connect (DB_HOST,DB_USER,DB_PASSWORD)  or die (mysqli_error());
$database_name=DB_NAME;
mysqli_select_db ($link,$database_name);
 
$num2=0;
 
 $sql = "select donorinfo.*,dcoordinates.*, ( 3959 * acos( cos( radians($v) ) * cos( radians(latitude ) )* cos( radians(longitude) - radians($w)) + sin(radians($v)) * sin( radians(latitude)))) AS distanced from donorinfo,dcoordinates where donorinfo.id=dcoordinates.id and Blood_group like '$bgp' order by distanced";

   
if( $result =mysqli_query($link ,$sql))
{
	 $num=mysqli_num_rows($result);
	 $num2=$num;
}

 
 mysqli_close($link);?>

 <?php 
 
  if ($num2 ==  "0") {
	 
    
echo nl2br("\n \n<h2> Sorry No Donor Found.</h2> \n ");
}else
{$i=0;
   while($row = mysqli_fetch_assoc($result)){
	
	$Donor_Name=$row["donarname"];
	$Sex=$row["sex"];
	$Thana=$row["Thana"];
	$District=$row["District"];
	$Bloodgroup=$row["blood_group"];
	$Mobile=$row["mobile"];;
	$Email=$row["Email"];
	$Test=$row["Testing"];
	$Distance=$row["distanced"];
	$l=$row["latitude"];
	$ln=$row["longitude"];?>
	<tr>
	
	<td><p><?php echo $Donor_Name; ?></p></td>
	<td><p><?php echo $Sex; ?></p></td>
	<td><p><?php echo $Thana; ?></p></td>
	<td><p><?php echo $District; ?></p></td>
	<td><p><?php echo $Bloodgroup; ?></p></td>
	<td><p><?php echo $Mobile; ?></p></td>
	 
	<td><p><?php echo "<a href=mailto:".$Email.">".$Email . "</a>" ?></p></td>
	<td><p><?php echo $Test; ?></p></td>
	
<td><p><?php echo "<a href=https://www.google.com.bd/maps/dir/".$v.",".$w."/".$l.",".$ln.">" .number_format((float)$Distance, 5, '.', '')." </a>"; ?></p></td> 
	
	</tr>
<?php $i++;}

}?>
	 
</table>
</div>
<br></center>
</div>

	<div class="content2"> 
<?php
			   
  $v3=NULL;



	

	?>

		
				<!--<form id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
				<form id="searchform" method="post" onsubmit="return false;" action="">
				<br>
     <h2>&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Search Again:</h2>
	 <br>
	 <br>

<div class ="searchboxtt">

	 <br>
	 <br>

<!--Blood Group:
 <select name="bgroup" >
 <option value=''>Choose Your Desired Blood-group</option>
     <option value="A positive">A+</option>
    <option value="A-">A-</option>
    <option value="B positive">B+</option>
    <option value="B negative">B-</option>
    <option value="O positive">O+</option>
    <option value="O negative">O-</option>
	 <option value="AB positive">AB+</option>
    <option value="AB negative">AB-</option>
  </select>-->
 <p>Blood Group:
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
  </select></p>




  <input type="submit" onclick="clicksubmit()" value="Submit"style="text-align:center;margin-left:290px;">

  
  <div id="waitmsg">
  <span> <i class="fa fa-spinner fa-spin"></i> </span>
  Please wait...
  </div>
  <br>
  <br>
  <br>
  <br>
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
		url:"searchresult.php",
		data: $('#searchform').serialize(),
		beforeSend: function(){
			$('#waitmsg').show();
			// myFunction();
				//getlocation();
		},
		success:function(data){
			getlocation();
			
		}
	});
}
function myFunction() {


	//document.forms["myform"].submit();
//  document.getElementById("myform").reset();
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
	//var bg =  document.getElementById("bgroup");
var bg = document.getElementsByName("bgroup")[0].value;

  //  x.innerHTML = "Latitude: " +la+ 
   // "<br>Longitude: " + lo+"<br>Blood: "+ bg;	
	
	document.location = 'tt.php?name=' + la+'&long='+lo+'&b='+bg;

}





</script>
</div>

</div>

		<?php include ("Footer.html");?>
</body>
</html> 
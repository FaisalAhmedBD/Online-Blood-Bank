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
	font-size:16px;
	font-weight:bold;
}

#waitmsg{
	display:none;
	text-align:center;
	margin-top:10px;
	margin-left:20px;
}
div.contentsearch{
	border:1px solid black;
	width:980px;
	margin-left:200px;
	border-radius:10px;
	padding-left:20px;
	background-color:#b5b5b7;
}
div.searchbox{
	text-align:center;
	
}
</style>
               

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">



	</head>
	<body>
	<?php include ("navigation.php");?>

	
		<div class="maincontent"> 
	<div class="contentsearch"> 
	<br>
<?php
			   
  $v3=NULL;



	

	?>

		
				<!--<form id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
				<form id="searchform" method="post" onsubmit="return false;" action="">
				<br>
     

<div class ="searchbox">

	 <h1>Search</h1>
	 

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


 <input type="submit" onclick="clicksubmit()" value="Submit" style="text-align:center;margin-left:453px;">

   </div>
      
  <div id="waitmsg">
  <span> <i class="fa fa-spinner fa-spin"></i> </span>
  Please wait...
  </div>
    <br>
  <br>
  <br>
  </div>

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
  //  "<br>Longitude: " + lo+"<br>Blood: "+ bg;	
	
	document.location = 'tt.php?name=' + la+'&long='+lo+'&b='+bg;

}





</script>



 


</div>


		<?php include ("Footer.html");?>
</body>
</html> 
<!DOCTYPE html>
<html>
	<head>
	<title>Home</title>
		<style>
		body
		{
			background-color:#e6faff;
			
		}
			p{
			color:white;
			font-size:150%;
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
div.img{

	margin-top:20px;
	margin-left:150px;
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
	width:760px;;
	margin-left:170px;
	margin-top:0px;
	border-radius:5px;
	padding-left:60px;
	padding-top:20px;
	padding-bottom:20px;
	padding-right:20px;
	color:white;
	
	
}
	div.welcomearticle{
    position: relative;
	margin-left:160px;
	margin-bottom:15px;
	margin-top:15px;
	margin-right: 0px;
	padding-left:20px;
	padding-bottom:5px;
	padding-top:5px;
	padding-right:10px;
    width: 720px;
	color:black;
	text-align:left;
	font-size:18px;
	background-color:#C9C9C9;
	border-radius:10px;
	border: 1px solid black;
				}
				div.content{
					background-color:#e6faff;
				}
				

</style>
               

<link href="css/StyleHomePage.css" rel="stylesheet" type="text/css">


		<link href="js/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="js/js-image-slider.js" type="text/javascript"></script>
		<script src="js/tooltip.js" type="text/javascript"></script>
		


	</head>
	<body>
		<?php include ("navigation.php");?>



		<!-- Slider-->
<div class='container'>
	<div id="sliderFrame">
			<div id="slider">
				 <img src="Images/Slider/65b899cc-0991-4f76-bfee-3c9726e886d7.jpg" alt="The gift of life.."  />;
				 <img src="Images/Slider/banner2.png" alt="That fragile scarlet tree..."  />;
				 <img src="Images/Slider/banner5.png" alt="Donate Blood.." />;
				 <img src="Images/Slider/8.jpg" alt="Register Now for Blood Donation"  />;
				 <img src="Images/Slider/9.jpg" alt="The Donation of Life.."  />;
				<img src="Images/Slider/Donateblood.jpg" alt="Be A Hero!"  />;
				<img src="Images/Slider/J097-website-diagrams-FINAL3.png" alt="Your one Donation can save 3 lives.."  />;
			</div>
			
	</div>
</div>
		<div class ="welcomearticle">
		
			<h1>Welcome to Red Cell Online Blood Bank</h1>
		
		
	</div>

<div class="maincontent"> 

			<div class="content"> 
	
	<?php include ("Article.html");?>
	

		</div>
			
		<div class="sidebar">
			
			<h2 style="color:Black;margin-left:100px;margin-bottom:10px; margin-top:0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Choose an option:</u></h2><br>

			<h2 style="color:Black;margin-left:80px;text-align:center; margin-bottom:10px; margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register as a Donor</h2>

			<div class="img">
				<a target="_blank" href="http://localhost/Registration.php"><img src="a.jpg" width="200" height="200" style=border-radius:5px border=1px solid black; ></a><br>
				<br>
				<!--<div class="desc"><b><p>DONOR REGISTRATION</p></b>
				</div>-->
			</div>
			<h2 style="color:Black;margin-left:80px;  margin-bottom:10px; margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search the Blood-bank</h2>
			<div class="img">
				<a target="_blank" href="http://localhost/AdvancedSearch.php"><img src="aa.jpg"  width="200" height="200" style=border-radius:5px;></a>
				<br><br>
			<!--<div class="desc"><b><p>BLOOD BANK</p></b></div>-->
			</div>
			
		</div>
</div>
	<div class="fstyle">
	<div class="floating-box"><a target="Why should You Donate Blood" href="http://localhost/whydonation.php"><img src="why.jpg" alt=" Why should You Donate Blood"width="230" height="230" style=border-radius:10px;></a><h3>&nbsp &nbsp  Why should You Donate &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Blood</h3></div>
	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	 <div class="floating-box"><a target="_blank" href="http://localhost/eligible.php"><img src="11.jpg"  width="230" height="230" style=border-radius:5px;></a><h3 >&nbsp Am I Eligible To Donate &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Blood</h3></div>

			</div>
			
				<?php include ("Footer.html");?>
			
	</body>



</html>

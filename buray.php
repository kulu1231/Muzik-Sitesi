<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/logo.ico" />
<link rel="stylesheet" href="css/reset.css" />
<title>Buray Şarkıları</title>
<style type="text/css">
#headerkap
{
	display:flex;
	border-bottom:1px solid black;
}

#logo {
	
	background-color:white;
	font-size:36px;
	padding:20px;
	margin-right:auto;
	letter-spacing:2px;
}
#menu {
	background-color: white;
	font-size: 36px;
	padding: 20px;
	letter-spacing:2px;
	font-family:'Raleway';
	left:200px;
	margin-top:0px;
	height:auto;
}
#menu ul li
{
	float:left;
}
#menu ul li a
{
	display:block;
	text-decoration:none;
	color:green;
	font-weight:bold;
	text-align:center;
	 letter-spacing:3px;
	 font-size:30px;
	 transition:all .5s ease;
	 margin-left:20px;
	 height:60px;
	 width:180px;
	 border-radius:3px;
	 line-height:60px;
	 left:200px;
	
}
#menu ul li a:hover
{
	background-color:#4CAF50;
	color:white;
	font-weight:bold;
}
.icerikkap {

    padding:15px;
	float:left;
	
	
}
#footerkap {
	height:120px;
   background-color:#500D16;
   color:white;
   text-align:center;
   line-height:120px;
   font-size:36px;
   
   
  
}
#footerItem {
	padding:20px;
	display:flex;
	 justify-content:space-between;
  	 flex-grow:1;
	  
}
#col3 {
	 width:250px;
	 height:250px;
	color:#95A5A6;
	text-align:center;
	font-family:"Raleway";
	background-color:red;
}
#arama {
	font-size: 36px;
	padding: 20px;
	letter-spacing:2px;
	font-family:'Raleway';
	left:200px;
	height:100px;
	font-style:italic;
	font-variant:small-caps;
	font-weight:bold;
	
}
.aratext
{
	
	width:200px;
	border-radius:4px;
	color:black;
	border: 1px solid #ccc;
	 padding: 12px 20px;
}
input[type=submit] {
	width:100px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.sarkilar .b {
	width:85px;
  background-color: #4CAF50;
  color: white;
 
  
  border: none;
  border-radius: 4px;
  cursor: pointer;

  
}
.sarkilar .a{
	width:85px;
  background-color: blue;
  color: white;
 
  
  border: none;
  border-radius: 4px;
  cursor: pointer;

  
}
.sarkilar button {
	width:70px;
  background-color: blue;
  color: white;
 margin-left:20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

 
}

a
{
	text-decoration:none;
	color:black;
}
.sarkilar {

	width: 1050px;
	height: 800px;
	z-index: 1;
	font-weight:bold;
}
.sarkilar a
{
	display:block;
	width:175px;
	
	
	color:black;
	height:40px;
	line-height:40px;
	
	margin-bottom:5px;
	font-size:8px;
	
	
	
	
}
.sarkilar ul li a
{
	display:block;
	float:left;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.menu
{
	width:200px;margin-top:0;border-right:1px solid black;text-align:center;
}
.menu ul li a
{
	display:block;
	transition:all 0.6s ease;
	width:200px;
}
.icerikkap ul li a:hover
{
	background-color:#4CAF50;
	color:white;
}
</style>
</head>

<body>


<!-- Header Başlangıç -->
<header>
  <div id="headerkap">
    <div id="logo"><a href="index.php"><img src="images/logo.ico" width="150" height="150" /></a></div>
   
    <div id="menu"> 
     <div id="arama">
     <form method="post" action="arama.php">
     Müziğin Tek Adresi Burası.. &nbsp;&nbsp;&nbsp;&nbsp;
     
 
       <input type="text" name="ara" id="textfield" class="aratext" placeholder="Aradığınız Şarkı" />
      <input type="submit" name="button" id="button" value="Ara" />
      <?php
	  error_reporting(0);
      $txt=$_POST["ara"];
	  
	  ?>
      
    </form>
     </div>
      <ul>
        <li><a href="#">Anasayfa</a></li>
         <li><a href="#">Anasayfa</a></li>
          <li><a href="#">Anasayfa</a></li>
           <li><a href="#">Anasayfa</a></li>
            <li><a href="#">Anasayfa</a></li>
           
      </ul>
    </div>
   
  </div>
</header>
<!-- Header Bitiş -->


<!-- İçerik Başlangıç -->
<section>
<div class="clearfix">
  
<div class="icerikkap menu">
   <?php
    include("baglanti.php");
   $sanatci="select tur_adi from tur";
  $statement = $baglanti->prepare($sanatci);
  $statement->execute();
   $statement->bind_result($tur);
  while($statement->fetch())
  {

 echo "<ul>";
  echo "<li style='border-bottom:1px solid black;line-height:50px;'>".$tur."</li>";
  echo "</ul>";
 

  }
  ?>

 </div>
<div class="icerikkap sarkilar">Buray Şarkıları<br /><br />
<?php

$sarki="select sanatci_adi,sarki_adi from sarki where tur_id=13";
$statement = $baglanti->prepare($sarki);
  $statement->execute();
   $statement->bind_result($sanatci,$sarki);
while($statement->fetch())
{
	$a=$sanatci;
	$b=$sarki;
	$sarkiadi=$a." "."-"." ".$b.".mp3";


	
	echo '<div style="float:left;margin-left:33px;width:175px;margin-bottom:50px;border:1px solid #CCC">';
	  echo "<center><img src='images/nota.PNG' width=150 height=150 /></center>";
	  echo '<div style="border:px solid #CCC;margin-top:15px;float:left;width:160px;text-align:center">';
	 echo '<a>'.$a." - ".$b."</a>";
	  echo '</div>';  
	  echo '<div style="float:lefT;width:175px;border:0px solid red">';
	  echo '<center>'.'<a style="float:left" class="a" href="buray.php?s=mp3/buray/'.$sarkiadi.'">Dinle</a>'.'&nbsp;'.'<a class="b" style="float:right" target="_blank" href="mp3/buray/'.$sarkiadi.'">İndir</a>'.'</center>';
	  echo "</div>";
	  echo '</div>';
	  
	  
	
}
if($_GET["s"]!=null)
{
	$s = $_GET["s"];
	echo '<audio controls="controls" autoplay="true" style="visibility:hidden">
<source src="'.$s.'" type="audio/mpeg" />
</audio>';
}

?>
</div>

  </div>
</section>
<!-- İçerik Bitiş -->


<!-- Footer Başlangıç -->
<div id="footerkap">
Bütün Telif Hakları Saklıdır.&copy;
 
</div>
<!-- Footer Bitiş -->
</body>
</html>
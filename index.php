<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/logo.ico" />
<link rel="stylesheet" href="css/reset.css" />
<title>Anasayfa</title>
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
	background-color:green;
	color:white;
	font-weight:bold;
}
#icerikkap {
display:inline-block;
   width:98%;
    transform:scale(50%,50%);
	padding:20px;
}
#footerkap {
	height:120px;
   background-color:#500D16;
   color:white;
   text-align:center;
   line-height:120px;
   font-size:36px;
   margin-bottom:5px;
   
  
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
a
{
	text-decoration:none;
	color:black;
}
</style>
</head>

<body>



<header> 
  <div id="headerkap">
    <div id="logo"><img src="images/logo.ico" width="150" height="150" /></div> 
    
   
    <div id="menu">  
     <div id="arama">
     <form method="post" action="">
     Müziğin Tek Adresi Burası.. &nbsp;&nbsp;&nbsp;&nbsp;
     
 
       <input type="text" name="ara" id="textfield" class="aratext" placeholder="Aradığınız Şarkı" />
      <input type="submit" name="button" id="button" value="Ara" />
    </form> 
     </div>   
      <ul>
        <li><a href="#">Anasayfa</a></li>
         <li><a href="#">Türkçe Pop</a></li>
          <li><a href="yabancipop.php">Yabancı Pop</a></li>
           <li><a href="#">Anasayfa</a></li>
            <li><a href="#">Anasayfa</a></li>
           
      </ul>
    </div>
   
  </div>   
</header>
     

 

<section>
  <div id="icerikkap">
    <?php
  include("baglanti.php");
  $sanatci="select tur_adi from tur";
  $statement = $baglanti->prepare($sanatci);  
  $statement->execute();
   $statement->bind_result($tur);
  while($statement->fetch())   
  { 
	  echo '<div style="float:left;margin-left:50px;margin-bottom:50px;padding:20px;border:1px solid #CCC">';
	  echo "<img src='images/nota.PNG' width=150 height=150 />";
	  echo '<div style="border:0px solid #CCC;margin-top:15px;text-align:center;">';
	  echo $tur;
	  echo '</div>';  
	  echo '</div>';
	
  }
  ?>
  </div>
</section>


<div id="footerkap">
Bütün Telif Hakları Saklıdır.&copy;
 
</div>

</body>
</html>
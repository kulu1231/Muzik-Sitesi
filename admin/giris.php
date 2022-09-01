<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title>Giriş Yap</title>
</head>

<body><div class="container" style="width:300px">
  <h2>Giriş Yapın</h2>
 
  <form method="post" action="">
    <div class="form-group">
      <label for="usr">Kullanıcı Adı:</label>
      <input type="text" class="form-control" id="usr" name="ad">
    </div>
    <div class="form-group">
      <label for="pwd">Şifre:</label>
      <input type="password" class="form-control" id="pwd" name="sifre">
    </div>
    <button type="submit" class="btn btn-primary">Giriş Yap</button>
  </form>
</div>
<?php
error_reporting(0);
session_start();
$ad = $_POST["ad"];
$sifre = $_POST["sifre"];
if($ad == "meryem" && $sifre == "123")
{
	$_SESSION["oturum"]=$ad;
	header("Location:index.php");
}



?>
</body>
</html>
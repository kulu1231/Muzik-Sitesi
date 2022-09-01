<?php
error_reporting(0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin-sablon.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADMİN PANELİ</title>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- InstanceEndEditable -->
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>MÜZİK SİTESİ - ADMİN PANELİ</h1>
  <p><?php echo "Hoşgeldin Meryem"; ?></p> 
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Anasayfa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="sarkiekle.php">Şarkı Ekle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sarkiduzenle.php">Şarkı Düzenle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sarkisil.php">Şarkı Sil</a>
      </li>  
      
      <li class="nav-item">
        <a class="nav-link" href="kategoriekle.php">Kategori Ekle</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="cikis.php">Çıkış Yap</a>
      </li>   
    </ul>
  </div>  
</nav>
<div class="row">
<div class="col"  style="background-color:lightgreen;"><!-- InstanceBeginEditable name="içerik" --><div class="container" style="margin-bottom:10px;margin-top:10px;">
<?php
include("../baglanti.php");
$adi = $_POST["adi"];
if($adi!="")
{

$sql = "insert into tur(tur_adi) values('$adi')";
$ekle = $baglanti->prepare($sql);
$ekle->execute();
}
?>
  <h2>Tür Ekle</h2>
  <form method="post" action="">
    <div class="form-group">
      <label for="email">Tür Adı</label>
      <input type="text" class="form-control" id="email" name="adi">
    </div>
    
    
    <button type="submit" class="btn btn-primary">Ekle</button>
  </form>
</div><!-- InstanceEndEditable -->

</div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>&copy; Bütün Hakları Saklıdır.</p>
</div>
</body>
<!-- InstanceEnd --></html>

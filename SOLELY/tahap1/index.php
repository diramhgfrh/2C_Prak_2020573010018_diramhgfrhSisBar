<?php 
require "proses/session.php";
if (empty ($_GET['x'])){
  echo "<script>window.location ='home.php?x=home';</script>";
}elseif($_GET['x']=='home'){
  require "home.php";
}elseif($_GET['x']=='menu'){
  require "menu.php";
}elseif($_GET['x']=='pelanggan'){
  require "pelanggan.php";
}elseif($_GET['x']=='pegawai'){
  require "pegawai.php";
}elseif($_GET['x']=='owner'){
  require "owner.php";
}elseif($_GET['x']=='laporan'){
  require "laporan.php";
}
?>
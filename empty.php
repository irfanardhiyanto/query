<?php
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'dbstbifix';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;

$query1 = "DELETE FROM `dokumen` WHERE 1";
 $query2 = "DELETE FROM `upload` WHERE 1";
$hasil1 = mysql_query ($query1);
$hasil2 = mysql_query ($query2);
 
echo "Data telah dihapus.";
?>

<body style="background-color:#b3ccff">
<center> 
<h1 style="background-color:DodgerBlue">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN PELAJARAN 2017 </h1> 
<br>

<a> Kembali ke tabel ? </a> <a href="hasil_tokenisasi.php"> YA </a>

<h4 style="background-color:DodgerBlue">Irfan Ardhiyanto (15.01.53.0061) <br> Apriana Panca K (15.01.53.0065) <br> Fadilla Maulida (15.01.53.0082)</h4> 
</center>
</body>
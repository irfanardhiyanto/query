 <!DOCTYPE html>
<html>
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.home {background-color: #6666ff ;} 
.home:hover {background: #b3b3ff;}
</style>
<head>
	<title>Hasil Query</title>
</head>
<body style="background-color:#b3ccff">
<center> 
<h1 style="background-color:DodgerBlue">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN PELAJARAN 2017 </h1> 
<br>
<input type="button" value="Home" onclick="window.open('index.php')" button class="btn home">  </button> <br> <br>
</center>
 <?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbstbifix";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=@$_POST[$katakunci];
$sql = "SELECT distinct nama_file,token,tokenstem,tokenstem2 FROM `dokumen` WHERE token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";


echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama file: " . $row["nama_file"]. " - Token: " . $row["token"]. " " . $row["tokenstem"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

///

?>
<center>
<h4 style="background-color:DodgerBlue">Irfan Ardhiyanto (15.01.53.0061) <br> Apriana Panca K (15.01.53.0065) <br> Fadilla Maulida (15.01.53.0082)</h4> 
</center>
<?
include("inc/seguranca.php"); // Inclui o arquivo com o sistema de segurança

//conexão
$servername = "localhost";
$username = "amare923";
$password = "v8fka72K1N";
$dbname = "amare923_premios_accor";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {die("Connection failed: " . mysqli_connect_error());?>
<script type="text/javascript">
location.href='index.php';
</script> 

<? }?>

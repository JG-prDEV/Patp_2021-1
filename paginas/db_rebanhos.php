<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8" />
</head>
<body>
<?php
$servername = "localhost";
$database = "teste_php";
$username = "root";
$password = "";


$nome = $_POST ["nome"]; 
$descricao = $_POST ["descricao"];
$idempresa = $_POST ["idempresa"];

$conexao = mysqli_connect($servername, $username, $password, $database);
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$sql = "INSERT INTO `rebanhos` ( `nome` , `descricao` , `idempresa`, `idrebanho` )
VALUES ('$nome', '$descricao', '$idempresa', '')";

if (mysqli_query($conexao, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);
?>
</body>
</html>
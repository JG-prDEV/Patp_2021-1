<?php
/*
$servername = "localhost";
$database = "teste_php";
$username = "root";
$password = "";
*/

$mysqli = new mysqli("localhost", "root", "", "teste_php");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
$query = "SELECT nome, idempresa, idrebanho, descricao FROM rebanhos ORDER BY idrebanho";

/*if ($result = $mysqli->query($query)) {

    
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["nome"], $row["idempresa"]);
    }

    
    $result->close();
}
*/


if ($result = $mysqli->query($query)) {
    echo "<div class='table-responsive'>";
    echo "<table id='table' class='table table-striped'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Responsável</th>
        <th>Descrição</th>
        <th> </th>";
  
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" .$row["idrebanho"]."</td>
                <td>".$row["nome"]."</td>
                <td>".$row["idempresa"]."</td>
                <td>".$row["descricao"]."</td>
                <th>
                    <button type='button' class='btn btn-primary'>Editar</button>
                    <button type='button' class='btn btn-primary'>Excluir</button>                
                </th>
            </tr>";
    }
    echo "</table>";
    echo "</div>";
} 
$mysqli->close();

?>
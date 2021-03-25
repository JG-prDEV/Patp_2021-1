<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "teste_php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
$query = "SELECT nome, idempresa, idrebanho, descricao FROM rebanhos ORDER BY idrebanho";

if ($result = $conn->query($query)) {
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
                    <form method='post'>
                        <input onClick='window.location.reload();' type='hidden' name='id' value='".$row['idrebanho']."'>
                        <input type='submit' name='deletar' value='deletar' />
                    </form>               
                </th>
            </tr>";
            
            if (isset($_POST['id'])) {
                 $sql = "DELETE FROM rebanhos WHERE idrebanho =".$_POST['id'];

                if ($conn->query($sql) === TRUE) {
                echo ($sql);    
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . $conn->error;
                }
            }
        }
    echo "</table>";
    echo "</div>";
} 
$conn->close();
?>

<script>
                  function AtualizaPage() {
                    window.location.reload();
                  }
                </script>
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
                    <script>
                    function AtualizaPage() {
                        window.location.reload();
                    }
                    </script>
                    <form method='post'> 
                        <input  type='hidden' name='id' value='".$row['idrebanho']."'>
                        <button onClick='AtualizaPage()' type='submit' class='btn btn-primary' name='deletar' value='deletar'>Deletar</button>
                    </form>               
                </th>
            </tr>";

            if (isset($_POST['id'])) {
                 $sql = "DELETE FROM rebanhos WHERE idrebanho =".$_POST['id'];

                if ($conn->query($sql) === TRUE) { 
                } 
            }
        }
    echo "</table>";
    echo "</div>";
} 
$conn->close();

?>
      
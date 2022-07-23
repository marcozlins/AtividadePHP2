<?php

/**
 * Inclui o arquivo que faz conexão com o MySQL:
 */
require('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") :

/**
 * Se o formulário foi enviado, a resposta da expressão abaixo 
 * é true, então, processamos o formulário.
 */
$sql = "SELECT * FROM  livro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Nome" . $row["nomelivro"]. " - Editora: " . $row["editora"]. "Autor" . $row["Autor"]."Preço".$row["preco"]."isbn".$row["isbn"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
endif;


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>


<body>

<?php
  $l= 5;
  $c = 3;
  ?>
<?php
     echo '<table border="1">';
            $il = 1;
    while($il <= $l){
            echo "<tr>";
            $ic = 1;
    while($ic <= $c)
           {
              echo"<td> <a href=</td>";
              $ic ++;
            }
            echo "</tr>";
            $il = $il+ 1;

};
 echo '</table border="1">';
?>

<table>
   
      <tr>
        <td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td>
      </tr>
      <tr>
        <td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td>
      </tr>
      <tr>
        <td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td>
      </tr>
      <tr>
        <td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td><td>coluna</td>
      </tr>
</table>







<table>
  <thead>
      <tr>
        <th> Livro</th>
        <th> Editora</th>
        <th> Autor</th>
        <th> Preço</th>
        <th> Isbn</th>
      </tr>
  </thead>

  <?php $itens     ?>

  <tbody>
    <?php foreach($_SERVER as $itens): ?>
    <?php endforeach; ?>
       
    <tr>
        <td><?= $_SERVER['nomelivro'] ?></td>
        <td><?= $itens[2] ?></td>
        <td><?= $itens[3] ?></td>
        <td><?= $itens[4] ?></td>
        <td><?= $itens[5] ?></td>
    </tr>

    <?php ?>


  </tbody>

</table>






</body>

</html>




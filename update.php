<?php

/**
 * Inclui o arquivo que faz conexão com o MySQL:
 */
require('db.php');

/**
 * Se o formulário foi enviado, a resposta da expressão abaixo 
 * é true, então, processamos o formulário.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") :

    /**
     * Processa o formulário:
     *      Aqui entraria todo o processo de validação e sanitização dos dados
     *      para garantir ao máximo que atendemos aos 3 pilares da segurança
     *      da informação (disponibilidade, integridade e autenticidade).
     */

    // Monta o SQL que salva os dados na tabela:
    $sql = " UPDATE livro SET (nomelivro, editora, autor, preco, isbn)";

    // Finalmente, executa SQL no MySQL:
    $conn->query($sql);

    // Dá um feedback ao usuário, informando que o processo foi bem-sucedido:
    echo '<div>Alterado com Sucesso</div>';

endif;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>

<body>

    <h1>Fazer UPDATE:</h1>
    
 
    

    <?php /**
     * Formulário de cadastro de produto:
     *      Observe que o 'method="post"'.
     *      Ainda mais importante é o 'action' que envia os dados preenchidos
     *      para esta mesma página.
     *      Não é obrigatório, mas, para facilitar, usaremos no formulário, os
     *      mesmos nomes de campos do banco de dados.
     */ ?>

    <form  method="post" action="update.php">
 

        <p>
            <label for="Livro">Livro:</label>
            <input type="text" name="nomelivro">
        </p>
        <p>
            <label for="Editora">Editora:</label>
            <input type="text" name="editora">
        </p>
        <p>
            <label for="Autor">Autor:</label>
            <input type="text" name="autor">
        </p>
        <p>
            <label for="Preço">Preço:</label>
            <input type="text" name="preco">
        </p>
        <p>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" maxlength="10">
        </p>
        <p>
            <button type="submit">Alterar</button>
        </p>

        
    </form>

</body>

</html>




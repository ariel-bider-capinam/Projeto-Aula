<header>
    <h3>Atualizar Aluno</h3>
</header>
<?php

        $idContato=mysqli_real_escape_string($conexao, $_POST["idaluno"]);
        $nomeContato = mysqli_real_escape_string($conexao, $_POST["nomealuno"]);
        $emailContato = mysqli_real_escape_string($conexao, $_POST["emailaluno"]);
        $telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneAluno"]);
        $enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoAluno"]);
        $sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoAluno"]);
        $dataNascContato = mysqli_real_escape_string($conexao, $_POST["dataNascAluno"]);

        
        $sql = "UPDATE tbcontatos SET
        nomeAluno='{$nomeAluno}',
        emailContato='{$emailAluno}',
        telefoneContato='{$telefoneAluno}',
        enderecoContato='{$enderecoAluno}',
        sexoContato='{$sexoAluno}',
        dataNascContato='{$dataNascAluno}'
        WHERE idContato='{$idAluno}'";

        mysqli_query($conexao,$sql) or die("erro ao executar a consulta.".  mysqli_error($conexao));
         echo "O registro foi atualizado com sucesso!";
    
?>
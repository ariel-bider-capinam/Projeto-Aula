<?php
$idContato= $_GET["idContato"];


$sql="SELECT * FROM tbcontatos WHERE idContato={$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registo." . mysqli_error($conexao));
$dados= mysqli_fetch_assoc($rs);
?>


<header><h3> <i class="bi bi-person-circle"></i> Editar contato</h3></header>
<div class="row">
<div class="col-6">
    <form action="index.php?menuop=atualizar-contato" method="post">
    <div class="mb-3 col-3">
        <label class="form-label" for="idContato">ID</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
        <input class="form-control" type="text" name="idContato" value="<?=$dados["idContato"]?>" readonly>
        </div>
    </div>


    <div>
        <label class="form-label" for="nomeContato">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
        <input class="form-control" type="text" name="nomeContato" value="<?=$dados["nomeContato"]?>" require>
        </div>
    </div>
 
        <div>
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
            <input class="form-control" type="email" name="emailContato" value="<?=$dados["emailContato"]?> "require>
            </div>
        </div>


        <div>
            <label class="form-label"l for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
            <input class="form-control" type="text" name="telefoneContato" value="<?=$dados["telefoneContato"]?>"require>
            </div>
        </div>


        <div>
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox"></i></span>
            <input class="form-control" type="text" name="enderecoContato" value="<?=$dados["enderecoContato"]?>"require>
            </div>
        </div>

        <div class="row">
        <div class="mb-3 col-3">
            <label class="form-label" for="sexoContato">Sexo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                <select class="form-select" name="sexoContato" id="sexoContato" require>
                <option selected>Sexo</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            </div>
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="dataNAscContato">Data de Nasc</label>
            <div class="input-group">
                
            <input class="form-control" type="date" name="dataNascContato" value="<?=$dados["dataNascContato"]?>" require>
            </div>
        </div>
        </div>

        <div>  
            <button  class="btn btn-success" type="submit">Atualizar</button>
        </div>
    </form>
</div>

<div class="container col-6">
    <?php
        if($dados["nomeFotoContato"]==""){
            $nomeFoto = "SemFoto.jpg";
        }else{
            $nomeFoto= $dados["nomeFotoContato"];
        }

?>
    <img width="500" src="./paginas/contatos/fotos-contatos/<?=$nomeFoto?>" alt="Foto do Contato" class="imagem">
</div>
</div>
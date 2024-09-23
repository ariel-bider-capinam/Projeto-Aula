<?php

$txt_pesquisa = isset($_POST['txt_pesquisa']) ? $_POST['txt_pesquisa'] : "";
$idTarefa = isset($_GET['idTarefa']) ? $_GET['idTarefa'] : "";
$statusTarefa = isset($_GET['statusTarefa']) && $_GET['statusTarefa'] == '0' ? '1' : '0';

if (!empty($idTarefa)) {
    $sql = "UPDATE tbtarefas SET statusTarefa = {$statusTarefa} WHERE idTarefa = {$idTarefa}";
    $rs = mysqli_query($conexao, $sql);

    if (!$rs) {
        die("Erro ao executar a consulta! Erro: " . mysqli_error($conexao));
    }
}
?>
<header>
    <h3><i class="bi bi-list-task"></i> Tarefas</h3>
</header>
<div>
    <a class="btn btn-outline-secondary mb-2" href="?menuop=cad-tarefa"><i class="bi bi-list-task"></i> Nova Tarefa</a>
</div>
<div>
    <form action="index.php?menuop=tarefas" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="txt_pesquisa" value="<?=$txt_pesquisa?>">
            <button class="btn btn-outline-success btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar</button>
        </div>
    </form>
</div>
<div class="tabela">
    <table class="table table-dark table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th>Status</th>
               
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $quantidade = 10;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $inicio = ($quantidade * $pagina) - $quantidade;

         

            $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! Erro: " . mysqli_error($conexao));

            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>
            <tr>
               
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<ul class="pagination justify-content-center">
    <?php
    $sqlTotal = "SELECT idTarefa FROM tbtarefas";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);

    $totalPagina = ceil($numTotal / $quantidade);

    echo "<li class='page-item'><span class='page-link'>Total de registros: " . $numTotal . " </span></li> ";
    echo '<li class="page-item"><a class="page-link" href="?menuop=tarefas&pagina=1">Primeira Pagina</a></li>';

    if ($pagina > 6) {
        echo '<li class="page-item"><a class="page-link" href="?menuop=tarefas&pagina=' . ($pagina - 1) . '"><<</a></li>';
    }

    for ($i = 1; $i <= $totalPagina; $i++) {
        if ($i >= ($pagina - 5) && $i <= ($pagina + 5)) {
            if ($i == $pagina) {
                echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
            } else {
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=tarefas&pagina={$i}\"> {$i} </a></li>";
            }
        }
    }

    if ($pagina < $totalPagina - 5) {
        echo '<li class="page-item"><a class="page-link" href="?menuop=tarefas&pagina=' . ($pagina + 1) . '">>></a></li>';
    }
    echo "<li class='page-item'><a class='page-link' href=\"?menuop=tarefas&pagina=$totalPagina\">Ultima Pagina</a></li>";
    ?>
</ul>

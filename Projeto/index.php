<?php
include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema Agendador</title>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href class="navbar-brand">
            <img src="img/logo_agendador.png" alt="Sis-Agendador" width="120">
            </a>
            
            <div class="collapse navbar-collapse"id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li> 
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=contatos">Alunos</a> </li>
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=tarefas">Desenvolvimento</a> </li>
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=eventos">Faltas</a> </li>
                </ul>
            </div>
        </nav>
        </div>
    </header>
    <main>
        <div class="container">
    <?php
        $conexao;
        $menuop=(isset($_GET["menuop"]))?$_GET["menuop"]:"home";
            
                switch ($menuop) {
                    case 'home':
                        include("./paginas/home/home.php");
                        break;
                    case 'alunos':
                        include("./paginas/alunos/alunos.php");
                        break;
                    case 'cad-alunos':
                        include("./paginas/alunos/cad-alunos.php");
                        break;   
                    case 'inserir-aluno':
                            include("./paginas/alunos/inserir-alunos.php");
                            break;  
                    case 'editar-alunos':
                            include("./paginas/alunos/editar-alunos.php");
                            break; 
                    case 'atualizar-alunos':
                            include("./paginas/alunos/atualizar-alunos.php");
                            break;                                       
                    case 'excluir-alunos':
                            include("./paginas/contatos/excluir-alunos.php");
                            break;  
                    case 'Desemepnho':
                        include("./paginas/desempenho/desempenho.php");
                        break;
                    case 'cad-desempenho':
                        include("./paginas/desempenho/cad-desempenho.php");
                        break;
                    case 'inserir-desempenho':
                        include("./paginas/desemepnho/inserir-desemepnho.php");
                        break;
                    case 'editar-desemepnho':
                        include("./paginas/desemepnho/editar-desemepnho.php");
                        break;
                    case 'atualizar-desemepnho':
                        include("./paginas/desemepnho/atualizar-desemepnho.php");
                        break;
                    case 'excluir-desemepnho':
                        include("./paginas/desempenho/excluir-desemepnho.php");
                        break;
                    case 'tarefas':
                        include("./paginas/tarefas/tarefas.php");
                        break;       
                    case 'cad-tarefa':
                        include("./paginas/tarefas/cad-tarefa.php");
                        break;       
                    case 'inserir-tarefa':
                        include("./paginas/tarefas/inserir-tarefa.php");
                        break;       
                    case 'editar-tarefa':
                        include("./paginas/tarefas/editar-tarefa.php");
                        break;       
                    case 'atualizar-tarefa':
                        include("./paginas/tarefas/atualizar-tarefa.php");
                        break;       
                    case 'excluir-tarefa':
                        include("./paginas/tarefas/excluir-tarefa.php");
                        break;       
                 
                    default:
                        include("./paginas/home/home.php");
                        break;
               }
        ?>
        </div>
    </main>
    <footer class="container fluid fixed-bttom bg-dark">
        <div class="text-center">Arielzin Agendador</div>
    </footer>
    <script src="./js/javascript-agendador.js"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
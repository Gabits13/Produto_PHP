<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top" >        	
  <div class="container w-100 p-0 mt-0 mb-0">
       <a class="navbar-brand" href="menu.html" id="logo-texto" style="font-family: Arial; font-size: 18px; font-weight: bold">
       <img src="img/iconeproduto.png" alt="Logo da Empresa" width="70" height="70" class="d-inline-block" style="margin-left: 20px; margin-right: 30px;">
       </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 10px;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav nav-underline p-3">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="menu.html"><i class="bi bi-house-fill"></i> Página Principal</a>
        </li>
		<li class="nav-item">
          <a class="nav-link " href="cadastrar.php"><i class="bi bi-plus-circle-fill"></i> Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="excluir.php"><i class="bi bi-trash-fill"></i> Excluir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultar.php"><i class="bi bi-search"></i> Pesquisar</a>
        </li>
      
		<li class="nav-item">
          <a class="nav-link active" href="listar.php"><i class="bi bi-list-ul"></i> Listar</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" id="nav-link" href="alterar.php"><i class="bi bi-pencil-fill"></i> Alterar</a>
        </li>
		
        </ul>		
        
  
    </div>
  </div>
</nav>

<div class="container mt-5 pt-5">
    <h1 class="text-center mb-4 mt-4">Produtos Cadastrados</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Estoque</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'produto.php';
            $p = new Produto();
            $pro_bd = $p->listar();
            foreach($pro_bd as $pro_mostrar) {
                echo "<tr>";
                echo "<td>" . $pro_mostrar[0] . "</td>";
                echo "<td>" . $pro_mostrar[1] . "</td>";
                echo "<td>" . $pro_mostrar[2] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="text-center mt-4 mb-5">
        <a href="menu.html" class="btn btn-primary">Voltar</a>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

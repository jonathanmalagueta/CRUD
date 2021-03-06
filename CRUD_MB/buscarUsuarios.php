<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de usuários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<!-- Barra de navageção -->
<body>
 <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">área de Cadastro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="formInsert.php" target="_blank">Cadastro</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="buscarUsuarios.php">Busca<span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="updateUsuarios.php">Atualizar<span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="deleteUsuarios.php">Deletar<span class="sr-only">(Página atual)</span></a>
            </li>
          </ul>
        </div>
      </nav>
 </header>
 <!-- fim da barra -->
 <br>
<main>
<div class="container-fluid">
    <div class="container">
  <form action="select.php" method="POST">
      <div class="form-group">
    <label for="nome">Busca</label>
    <input type="text" class="form-control" name ="consulta"  placeholder="Digite o nome que deseja buscar">
    
  </div>
  <button type="submit" class="btn btn-warning" Value="Pesquisa">Busca</button>
</form>
</main>
</div>
</div>
 <footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</footer>
</body>
</html>

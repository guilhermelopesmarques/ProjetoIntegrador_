<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papelaria Novo Mundo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg cabecalho">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="../pagina/index.php"><img src="../img/icone.png" class="mb-1" alt="Icone" width="50">Papelaria Novo Mundo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item  ">
            <h5><a class="nav-link" aria-current="page" href="../pagina/index.php">Home</a></h5>
          </li>
          <li class="nav-item">
            <h5> <a class="nav-link" href="#">Destaques</a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="#">Produtos</a></h5>
          </li>
        </ul>

        <a href="../paginalogin/login.php">
          <button class="btn btn-danger  ms-2" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Entrar</button>
        </a>

        <a href="#">
          <button class="btn btn-danger  ms-2" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Registrar</button>
        </a>


        <form class="d-flex ms-5" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger bg-danger-subtle " type="submit"><img class="mb-1" src="../img/lupa.png" width="15" alt=""></button>
        </form>


      </div>
    </div>
  </nav>

<br>
<div class="row" style="height: 600px;">
  <div class="col-md-1">
    <!-- Conteúdo da primeira coluna -->
  </div>
  <div class="col-md-4 border border-black">
    <!-- Conteúdo da segunda coluna, incluindo a imagem -->
    <img src="../img/icone.png" class="img-fluid" alt="...">
  </div>
  <div class="text-center col-md-6 col-xs-x border border-black">
    <!-- Conteúdo vazio para ocupar espaço na mesma linha -->
    <br>
    <p class="text-center fs-4">Lapis Da Farber Castel</p>
    <p class=" badge bg-danger text-wrap fs-6" style="width: 10rem;">Marca: Faber Castel</p>
    <br>

<div class="estrela">

    <a href="javascript:void(0)" onclick="Avaliar(1)">
<img class="estreladesligada" src="../img/star (2).png" id="s1"></a>

<a href="javascript:void(0)" onclick="Avaliar(2)">
<img class="estreladesligada" src="../img/star (2).png" id="s2"></a>

<a href="javascript:void(0)" onclick="Avaliar(3)">
<img class="estreladesligada" src="../img/star (2).png" id="s3"></a>

<a href="javascript:void(0)" onclick="Avaliar(4)">
<img class="estreladesligada" src="../img/star (2).png" id="s4"></a>

<a href="javascript:void(0)" onclick="Avaliar(5)">
<img class="estreladesligada" src="../img/star (2).png" id="s5"></a>
<p id="rating"></p>
</div>

<p class="text-center fs-10">De Sua Valiação</p>

<p class="text-center fs-4">R$ 8,40</p>

<br>

<a class="fancy" href="#">
  <span class="top-key"></span>
  <span class="text">Comprar</span>
  <span class="bottom-key-1"></span>
  <span class="bottom-key-2"></span>
</a>

  </div>
</div>









<br>
<br>



<footer class="bg-gradient rodape">
<p style="text-align:center; color: dark;">
&copy; Todos os direitos reservados. Criado pelos alunos do Senac - Geovana, Guilherme, Henrique, Pedro Santos

</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
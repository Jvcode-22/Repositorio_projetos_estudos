<?php

include "logado.php";

include "conexao.php";

//ESTILO PROCEDURAL

//$con = mysqli_connect("localhost", "root", "", "madureira");

//ESTILO ORIENTADO A OBJETO

//$con2 = new mysqli("localhost", "root", "" , "madureira");

/*if (mysqli_connect_errno()){
    echo "erro ao conectar banco de dados";
    exit();

}*/


$sql = "select * from produtos";




$resultado = mysqli_query($con2, $sql);

//echo $resultado;



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="stylesheet" href="style.css">
    <title>Album example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
  <a href="sair.php">Sair</a>
    
<header>
  <div class="navbar navbar-white bg-wihte white-sm">
    <div class="container">

      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>OurBooks</strong>
      
        <img src="fotos/abra-o-livro.png" alt="favicon" width="30px" class="ms-2" >
      </a>
    </div>
  </div>
</header>

<main class="jao">
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1><p>A casa do Bom livro</p></h1>
        <h3><p>A livraria Ourbooks sempre busca trazer ao leitor uma experiência de varios mundos!!!!</p></h3>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-dark">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="fotos/R.png" alt="AZKABAN" width="400" height="378">
            <div class="card-body">
              <p class="card-text"><b>Harry Potter e o Prisioneiro de Azkaban</b></p>
              <p class="card-text"><i>Azkaban é um presídio mágico de segurança máxima que é administrado...</i> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/Harry-potter-e-o-prisioneiro-de-azkaban.pdf" download="Harry-potter-e-o-prisioneiro-de-azkaban.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="livro">
          <div class="card shadow-sm">
            <img src="fotos/img2.jpeg" alt="AZKABAN" class="Livro" width="420" height="400">
            <div class="card-body">
              <p class="card-text"><b>O Pequeno Principe</b></p>
              <p class="card-text"><i>Traz uma mensagem de...</i> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/o-pequeno-principe.pdf" download="o-pequeno-principe.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/img4.jpeg" alt="AZKABAN" class="Livro" width="400" height="400">
            <div class="card-body">
              <p class="card-text"><b>Quem Pensa em Enriquecer</b></p>
              <p class="card-text"><i>Mostrar como uma pessoa pode acumular...</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/quem-pensa-enriquece.pdf" download="quem-pensa-enriquece.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/livro-7-passos.jpg" alt="AZKABAN" class="Livro" width="400" height="400">
          <div class="card-body">
              <p class="card-text"><b>7 passos para aumentar sua auto estima</b> </p>
              <p class="card-text"><i>disponível na internet, apresenta técnicas para orientar...</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/7-passos.pdf"download="7-passos.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="fotos/img7.jpeg" alt="AZKABAN" class="Livro" width="400" height="400">
            <div class="card-body">
              <p class="card-text"><b>Como Chegamos Até Aqui</b></p>
              <p class="card-text"><i>Uma brilhante reflexão sobre a evolução tecnologica e suas implicações com o meio e com os Homens</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/como-chegamos-ate-aqui.pdf" download="como-chegamos-ate-aqui.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/evolucao-desing.jpg" alt="AZKABAN" class="Livro" width="400" height="422">
              <div class="card-body">
              <p class="card-text"><b>A evolução do desinf gráfico 2</b></p>
              <p class="card-text"><i>Conta uma História da Gastronomia.</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/evolucao-desing.pdf" download="evolucao-desing.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/manual-criatividade.jpg" alt="AZKABAN" class="Livro" width="400" height="379">
            <div class="card-body">
              <p class="card-text"><b>Manual de criatividade empresárial</b></p>
              <p class="card-text"><i>Repertorio de sabores e coletania de receitas gastronomicas</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/manual-criatividade.pdf" download="manual-criatividade.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/seguranca-da-informacao.png" alt="AZKABAN" class="Livro" width="400" height="400">
            <div class="card-body">
              <p class="card-text"><b>Segurança da informação</b></p>
              <p class="card-text"><i>Livro bom para estudantes de cybersegurança.</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/segurança-da-informacao.pdf" download="seguranca-da-informacao.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/img11.jpg" alt="AZKABAN" class="Livro" width="400" height="400">
            <div class="card-body">
              <p class="card-text"> <b>Os Sete Maridos de Evelyn Hugo</b></p>
              <p class="card-text"> <i>Mentiras, traição, preconceito e amor ·</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/os-setes-marinos.pdf" download="os-setes-marinos.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

      
  </body>
</html>

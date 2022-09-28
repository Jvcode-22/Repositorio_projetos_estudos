<?php
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
      .Tlivro{
        height: 50%;
        width: 50%;
        margin-left: 26%;
      }
      
    </style>

    
  </head>
  <body>
    
<header>
  <div class="navbar navbar-white bg-wihte white-sm">
    <div class="container">
      <div class="navbar-brand d-flex align-items-center">
        <strong id="Home">OurBooks</strong>
        <img src="fotos/abra-o-livro.png" alt="favicon" width="30px" class="ms-2">
        <?php

          session_start();
          if(isset($_SESSION["usuario_logado"])){
            echo "
            <a href='#Contato' style='margin-left: 300%;'><button class='btn btn-outline-secondary'>Contatos</button></a>
            <a href='#Contato' style='margin-left: 8%;'><button class='btn btn-outline-secondary'>Sobre</button></a>
            <a href='sair.php' style='margin-left: 9%;'><button class='btn btn-outline-secondary'>sair</button></a>    
            ";}
        else{
            echo "
            <a href='#Contato' style='margin-left: 260%;'><button class='btn btn-outline-secondary'>Contatos</button></a>
            <a href='#Contato' style='margin-left: 5%;'><button class='btn btn-outline-secondary'>Sobre</button></a>
            <a href='login.php' style='margin-left: 4%;'><button class='btn btn-outline-secondary'>fazer login</button></a>
            ";
        }
        ?>
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
            <img src="fotos/R.png" alt="AZKABAN" width="100%" height="100%">
            <div class="card-body tam">
              <p class="card-text"><b>Harry Potter e o Prisioneiro de Azkaban</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AZKABAM"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/Harry-potter-e-o-prisioneiro-de-azkaban.pdf" download="Harry-potter-e-o-prisioneiro-de-azkaban.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="livro">
          <div class="card shadow-sm">
            <img src="fotos/img2.jpeg" alt="PequenoPrincipe" class="Livro" width="100%" height="100%">
            <div class="card-body tam">
              <p class="card-text"><b>O Pequeno Principe</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Principe"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/o-pequeno-principe.pdf" download="o-pequeno-principe.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/img4.jpeg" alt="QuemPensaEmEnriquecer" class="Livro" width="100%" height="100%">
            <div class="card-body tam">
              <p class="card-text"><b>Quem Pensa em Enriquecer</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Enriquecer"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/quem-pensa-enriquece.pdf" download="quem-pensa-enriquece.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/livro-7-passos.jpg" alt="SetePassos" class="Livro" width="100%" height="100%">
          <div class="card-body tam">
              <p class="card-text"><b>7 passos para aumentar sua autoestima</b> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Autoestima"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/7-passos.pdf"download="7-passos.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="fotos/img7.jpeg" alt="ComoChegamosAteAqui" class="Livro" width="100%" height="100%">
            <div class="card-body tam">
              <p class="card-text"><b>Como Chegamos Até Aqui</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Chegamos"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/como-chegamos-ate-aqui.pdf" download="como-chegamos-ate-aqui.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/evolucao-desing.jpg" alt="AEvolucao" class="Livro" width="100%" height="100%">
              <div class="card-body tam">
              <p class="card-text"><b>A evolução do desinf gráfico 2</b></p>
              <p class="card-text"><i>Conta uma História da Gastronomia.</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Gráfico"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/evolucao-desing.pdf" download="evolucao-desing.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        

        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/manual-criatividade.jpg" alt="Manualdcriatividade" class="Livro" width="100%" height="100%">
            <div class="card-body tam">
              <p class="card-text"><b>Manual de criatividade empresárial</b></p>
              <p class="card-text"><i>Repertorio de sabores e coletania de receitas gastronomicas</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Manual"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/manual-criatividade.pdf" download="manual-criatividade.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>



        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/seguranca-da-informacao.png" alt="SegurancadaInformacao" class="Livro" width="100%" height="100%">
            <div class="card-body tam">
              <p class="card-text"><b>Segurança da informação</b></p>
              <p class="card-text"><i>Livro bom para estudantes de cybersegurança.</i></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Informação"> Descrição</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="livros/segurança-da-informacao.pdf" download="seguranca-da-informacao.pdf" type="aplication/pdf">Download</a></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card shadow-sm">
          <img src="fotos/img11.jpg" alt="OsSeteMaridos" class="Livro" width="100%" height="100%">
            <div class="card-body tam">
              <p class="card-text"> <b>Os Sete Maridos de Evelyn Hugo</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SeteM">
                  Descrição
                </button>
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
<footer class="text-muted p-5">
    <div class="container">
      <div class="row">
        
          <div class="col-12 col-md-7 " >
            <p class="text-muted">A Ourbooks tem o prazer de ajudar leitores e entusiastas de uma boa leitura a terem acesso aos mais variados livros de renome da nossa literatura, tanto nacialnal como internacional, dando praticidade e facilidade para os amantes literarios aos seus livros favoritos.</p>
          </div>
          <div class="col-12 col-md-5 text-end">
            <div class="tortao">
                <h4 class="text-Black" id="Contato">Contatos</h4>
                <ul class="list-unstyled">
                  <li><a href="#" class="text-Black">Twitter</a></li>
                  <li><a href="#" class="text-Black">Facebook</a></li>
                  <li><a href="#" class="text-Black">Email</a></li>
                  <li><a href="#" class="text-Black">Instagram</a></li>
                </ul>
              </div>
          </div>
      </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 </body>
</html>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="SeteM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Os Sete Maridos De Evelyn Hugo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img11.jpg" alt="SeteM" class="Tlivro">
          <p><b>Taylor Jenkins Reid Com todo o esplendor que só a Hollywood do século passado pode oferecer, esta é uma narrativa inesquecível sobre os sacrifícios que fazemos por amor, o perigo dos segredos e o preço da fama.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="AZKABAM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AZKABAM">Harry Potter e o Prisioneiro de Azkaban </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img1.jpeg" alt="SeteM" class="Tlivro">
          <p><b>É o início do terceiro ano na escola de bruxaria Hogwarts. Harry, Ron e Hermione têm muito o que aprender. Mas uma ameaça ronda a escola e ela se chama Sirius Black. Após doze anos encarcerado na prisão de Azkaban, ele consegue escapar e volta para vingar seu mestre, Lord Voldemort.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Principe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">O Pequeno Principe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img2.jpeg" alt="SeteM" class="Tlivro">
          <p><b>é uma obra literária do escritor francês Antoine de Saint-Exupéry, que conta a história da amizade entre um homem frustrado por ninguém compreender os seus desenhos, com um principezinho que habita um asteroide no espaço.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Enriquecer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quem Pensa em Enriquecer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img3.jpeg" alt="SeteM" class="Tlivro">
          <p><b>lançado em 1937, ele revela o segredo do sucesso, baseado em entrevistas realizadas e estudo de hábitos de mais de 16 mil pessoas, entre elas os 500 homens mais ricos do mundo em sua época. Neste livro é revelado o segredo para enriquecer.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Autoestima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sete passos para aumentar sua autoestima</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img11.jpg" alt="SeteM" class="Tlivro">
          <p><b>Taylor Jenkins Reid Com todo o esplendor que só a Hollywood do século passado pode oferecer, esta é uma narrativa inesquecível sobre os sacrifícios que fazemos por amor, o perigo dos segredos e o preço da fama.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="SeteM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Os Sete Maridos De Evelyn Hugo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img11.jpg" alt="SeteM" class="Tlivro">
          <p><b>Taylor Jenkins Reid Com todo o esplendor que só a Hollywood do século passado pode oferecer, esta é uma narrativa inesquecível sobre os sacrifícios que fazemos por amor, o perigo dos segredos e o preço da fama.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="SeteM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Os Sete Maridos De Evelyn Hugo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img11.jpg" alt="SeteM" class="Tlivro">
          <p><b>Taylor Jenkins Reid Com todo o esplendor que só a Hollywood do século passado pode oferecer, esta é uma narrativa inesquecível sobre os sacrifícios que fazemos por amor, o perigo dos segredos e o preço da fama.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="SeteM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Os Sete Maridos De Evelyn Hugo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img11.jpg" alt="SeteM" class="Tlivro">
          <p><b>Taylor Jenkins Reid Com todo o esplendor que só a Hollywood do século passado pode oferecer, esta é uma narrativa inesquecível sobre os sacrifícios que fazemos por amor, o perigo dos segredos e o preço da fama.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="SeteM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Os Sete Maridos De Evelyn Hugo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="fotos/img11.jpg" alt="SeteM" class="Tlivro">
          <p><b>Taylor Jenkins Reid Com todo o esplendor que só a Hollywood do século passado pode oferecer, esta é uma narrativa inesquecível sobre os sacrifícios que fazemos por amor, o perigo dos segredos e o preço da fama.</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
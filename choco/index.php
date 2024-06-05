<!-- PEGAR PRODUTOS DO BD
<?php

    session_start();
    if(!isset($_SESSION['carrinho_incluido'])) {
        include 'carrinho.php';
        $_SESSION['carrinho_incluido'] = true;
    }

    $conexao = new PDO('mysql:host=localhost;dbname=meusprodutos','root', "");

    $select = $conexao->prepare("SELECT * FROM produtos");
    $select->execute();
    $fetch = $select->fetchAll();  
?> -->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=
    , initial-scale=1.0"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- STYLE LINK -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <script async src="trufas.js"></script>
    <title>ChocoFelix</title>
  </head>
  <body>
    <!-- MENU -->
    <header>
      <a href="index.html">
        <img src="assets/img/chocofelix.png" alt="Logo ChocoFelix" />
      </a>
      <ul>
        <li><a href="#home">HOME</a></li>
        <li><a href="#produtos">PRODUTOS</a></li>
        <li><a href="#sobre">SOBRE</a></li>
        <!-- <li><a href="cadastro.php">CADASTRAR-SE</a></li> -->
    </header>
   <!-- BANNER INICIAL -->
    <section class="bannerInicial" id="home">
      <figcaption class="slide-up">
        <h4>
          Bem-vindos
          <br />
          a ChocoFelix
        </h4>
        <h1>Trufas Gourmet</h1>
        <p>
          Mergulhe em uma experiência única e irresistível com as nossas trufas!
        </p>
        <a href="#produtos" class="allButtons" target="_blank"> COMPRAR</a>
      </figcaption>
      <figure>
        <img
          src="assets/img/Splash of liquid with drops on transparent background-Photoroom.png-Photoroom.png"
          alt="Img Trufa"
          class="slide-right"
        />
      </figure>
    </section>

    <!-- PRODUTOS -->
    <div class="title" id="produtos">
      <h1>PRODUTOS</h1>
    </div>

    <section class="produtos">
      <ul>
        <?php 
          foreach($fetch as $produto){
            echo 
            "<li><figure>" .
                "<img src='{$produto['img']}'></figure><figcaption>" .
                "<h3>{$produto['nome']}</h3>" .
                "<h5>R$ " . number_format($produto['preco'], 2, ",", ".") . "</h5>" .
                "<a target='_blank' href='https://api.whatsapp.com/send?phone=5561999924251&text=Ol%C3%A1,%20gostaria%20de%20fazer%20o%20meu%20pedido.%0A%0A' onclick='adicionarProduto({$produto['id']})'> + </a>" .
            "</figcaption></li>";
        }

        ?>
      </ul>
    </section>
    </div>
    <!-- SOBRE -->
    <div class="title" id="sobre">
      <h1>SOBRE</h1>
    </div>
    <section class="sobre">
      <figure>
        <img src="assets/img/chocofelix.png" alt="" />
      </figure>
      <figcaption>
        <p>
        SEJA MUITO BEM-VINDO A CHOCOFELIX!
        <BR>
        </BR>
        Em março de 2022, surgiu a marca ChocoFelix, inicialmente como um passatempo culinário que, ao longo do tempo, evoluiu para um empreendimento de sucesso na venda de trufas. 

        A empresa oferece uma variedade de sabores para atender a todos os amantes de chocolate, incluindo aqueles com restrições alimentares, como pessoas diabéticas.

        Essa abordagem inclusiva diferencia a ChocoFelix, que se destaca por sua capacidade de atender a uma ampla variedade de gostos. 

        Em seu site, a marca não apenas exibe seus produtos e serviços, mas também compartilha seus valores, comprometendo-se a proporcionar a melhor experiência possível aos consumidores. 

        Além disso, a ChocoFelix investe em embalagens atrativas e sustentáveis, demonstrando um compromisso tanto com a qualidade do produto quanto com a responsabilidade ambiental.



        </p>
      </figcaption>
    </section>
    <!-- WHATSAPP FLOATER -->
    <section class="floaterMedia">
      <a href="https://api.whatsapp.com/send?phone=5561999924251"><i class="fa-brands fa-whatsapp"></i></a>
    </section>
    <!-- FOOTER -->
    <footer>
      <div class="darkFooter">
        <div class="icones">
          <a href="https://api.whatsapp.com/send?phone=5561999924251"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="https://www.instagram.com/__.chocofelix/"><i class="fa-brands fa-instagram"></i></a>
          <a href="mailto:empre.chocofelix@gmail.com"><i class="fa-regular fa-envelope"></i></a>
        </div>
        <p>©ChocoFelix - Todos os direitos reservados.</p>
      </div>
    </footer>

    <!-- SCRIPT -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/index.js"></script>
  </body>
</html>
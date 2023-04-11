<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="style/style.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
  <title>PS5</title>
</head>
<body>

  <?php include 'header.php';?>

  <div class="home">
    <video id="intro_video" autoplay muted loop>
      <source src="video/Introdução PS5.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <div class="content">
      <h1>PLAY HAS NO LIMITS</h1>
      <h2>GARANTA JA O SEU</h2>
      <button>Comprar</button>
    </div><!-- /.content -->
  </div><!-- /.home -->

  <div class="home-games bg-blue-dark-fade">
    <div class="container">
      <?php 

        include './php/products.php';
        AllProductsHtml();

      ?>
    </div><!-- /.container -->
  </div><!-- /.home-games -->

  <div class="product-details">
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="img/console_controle.png" alt="Imagem do console e controle">
        </div><!-- /.col -->

        <div class="col">
          <h3>Sua jornada começa aqui</h3>
          <p>
            Aproveite o carregamento extremamente rápido com o SSD de altíssima velocidade, uma imersão mais profunda com suporte a feedback tátil, gatilhos adaptáveis e áudio em 3D, além de uma geração inédita de jogos incriveis para Playstation.
          </p>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col">
          <h3>Controle sem fio DualSense™</h3>
          <p>Assuma o controle da aventura</p>
          <p>
            Controle sem fio DualSense™ Descubra uma experiência de jogos mais profunda e altamente imersiva1 com o novo e inovador controle do PS5™ .
          </p>
        </div><!-- /.col -->

        <div class="col">
          <img src="img/controle.png" alt="Imagem do controle">
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col">
          <img src="img/img_ray.jpg" alt="Cena do jogo com ray tracing">
        </div><!-- /.col -->

        <div class="col">
          <h3>Ray tracing</h3>
          <p>Projetado para visuais incríveis</p>
          <p>
            Traçado de raio é um sistema computacional de computação gráfica usado para síntese de imagens tridimensionais.
          </p>
        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.container -->
  </div><!-- /.product-details -->

  <section class="home-control">
    <video id="control_video" autoplay muted loop>
      <source src="video/home_sec.mp4" type="video/mp4">
    </video>

    <div class="content">
      <h2>Gatilhos adaptáveis</h2>
      <p>A resistência dinâmica imita a tensão das interações com os equipamentos e objetos de jogos selecionados do PS5™.</p>
    </div><!-- /.content -->
  </section><!-- /.home-control -->
  

  <?php include 'footer.php';?>
  <script type="text/javascript" src="./js/home_carousel.js"></script>
</body>
</html>
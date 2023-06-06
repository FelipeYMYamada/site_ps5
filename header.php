<div class="header-nav">
  <div class="container">
    <span>SONY</span>
  </div><!-- /.contaier -->
</div><!-- /.header-nav -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <figure>
        <img src="./img/logo.png">
      </figure>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="games.php">Jogos</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Produtos</a>
        </li>
        <li class="nav-item">
          <?php 
            if (session_status() == PHP_SESSION_NONE) {
              session_start();
            }
            if(isset($_SESSION['email']) == true) {
              echo '<a class="nav-link my-profile" href="profile.php"><i class="fa-regular fa-user"></i> Minha conta</a>';
            } else {
              echo '<a class="nav-link" href="login.php">Login</a>';
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>


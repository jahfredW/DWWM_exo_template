<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="..\accueil\index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Facile</a>
          <div class="dropdown-menu">
            <?php for ($index=1; $index <= 10; $index++): ?>
            <a class="dropdown-item" href="..\faciles\exo_<?php echo $index ?>.php">exo_<?= $index ?></a>
            <?php endfor ?>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Moyen</a>
          <div class="dropdown-menu">
            <?php for ($index=1; $index <= 10; $index++): ?>
            <a class="dropdown-item" href="..\moyens\exo_<?php echo $index ?>.php">exo_<?= $index ?></a>
            <?php endfor ?>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Difficile</a>
          <div class="dropdown-menu">
            <?php for ($index=1; $index <= 10; $index++): ?>
            <a class="dropdown-item" href="..\difficiles\exo_<?php echo $index ?>.php">exo_<?= $index ?></a>
            <?php endfor ?>
          </div>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
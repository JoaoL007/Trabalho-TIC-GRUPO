<?php
// artigos.php
$artigos = [
  ["id" => 1, "titulo" => "História dos Computadores", "desc" => "De ENIAC às máquinas modernas."],
  ["id" => 2, "titulo" => "O que é a Inteligência Artificial?", "desc" => "Explicado de forma simples."],
  ["id" => 3, "titulo" => "Guia rápido de segurança digital", "desc" => "10 passos básicos."]
];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Artigos - TecInfo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>TecInfo</h1>
    <nav>
      <a href="index.php">Início</a>
      <a href="artigos.php">Artigos</a>
      <a href="#">Glossário</a>
      <a href="#">Sobre</a>
    </nav>
  </header>

  <main>
    <h2>Artigos</h2>
    <ul class="lista-artigos">
      <?php foreach($artigos as $a): ?>
        <li>
          <h3><a href="artigo.php?id=<?= $a['id'] ?>"><?= $a['titulo'] ?></a></h3>
          <p><?= $a['desc'] ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </main>

  <footer>
    &copy; <?= date("Y"); ?> TecInfo
  </footer>
</body>
</html>

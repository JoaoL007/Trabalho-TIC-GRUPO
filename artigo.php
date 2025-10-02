<?php
// artigo.php
$id = $_GET['id'] ?? 1;
$conteudo = [
  1 => "Os computadores começaram enormes e lentos, mas evoluíram até caber no bolso.",
  2 => "IA é a simulação de inteligência humana em máquinas, usada em apps, carros e mais.",
  3 => "Segurança digital começa por palavras-passe fortes, atualizações e bom senso."
];
$titulo = [
  1 => "História dos Computadores",
  2 => "O que é a Inteligência Artificial?",
  3 => "Guia rápido de segurança digital"
];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title><?= $titulo[$id] ?? "Artigo" ?> - TecInfo</title>
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
    <h2><?= $titulo[$id] ?? "Artigo não encontrado" ?></h2>
    <p><?= $conteudo[$id] ?? "Desculpa, este artigo não existe." ?></p>
  </main>

  <footer>
    &copy; <?= date("Y"); ?> TecInfo
  </footer>
</body>
</html>

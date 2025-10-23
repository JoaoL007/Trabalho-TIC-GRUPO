<?php
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>TecInfo - Início</title>
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
    <h2>Bem-vindo ao TecInfo</h2>
    <p>Um site informativo de tecnologia para aprender sem dor de cabeça.</p>
    <section class="destaques">
      <h3>Destaques</h3>
      <ul>
        <li>📱 O futuro dos telemóveis dobráveis</li>
        <li>🛡️ Como proteger a tua conta online</li>
        <li>🤖 IA: ameaça ou oportunidade?</li>
      </ul>
    </section>
  </main>

  <footer>
    &copy; <?= date("Y"); ?> TecInfo - Código aberto
  </footer>
</body>
</html>

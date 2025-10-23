<?php
// Página individual de artigo - Será desenvolvida pelo Membro 3
include '../includes/header.php';
include '../includes/nav.php';

$artigo_id = $_GET['id'] ?? 1;
?>

<main class="main-content">
    <div class="container">
        <article class="article-full">
            <h1>Título do Artigo (ID: <?php echo $artigo_id; ?>)</h1>
            <p>Conteúdo do artigo será implementado pelo Membro 3...</p>
        </article>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
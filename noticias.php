<?php

include 'db.php';

$sql = "SELECT id, titulo, conteudo, imagem, DATE_FORMAT(data, '%d/%m/%Y') AS data FROM noticias ORDER BY data DESC";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - Aether Games</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="img/Aether.png" alt="Logo do site" class="logo">
            <h1>Aether Games</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="lancamentos.php">Lançamentos</a></li>
                <li><a href="esports.php">eSports</a></li>
                <li><a href="reviews.php">Reviews</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Notícias Recentes</h1>
        <?php if ($resultado->num_rows > 0): ?>
            <div class="noticias-lista">
                <?php while ($noticia = $resultado->fetch_assoc()): ?>
                    <article>
                        <h2><?php echo htmlspecialchars($noticia['titulo']); ?></h2>
                        
                        <?php if (!empty($noticia['imagem'])): ?>
                            <img src="<?php echo htmlspecialchars($noticia['imagem']); ?>" alt="Imagem da notícia" style="width: 100%; max-width: 300px;">
                        <?php endif; ?>
                        
                        <p><?php echo nl2br(htmlspecialchars($noticia['conteudo'])); ?></p>
                        <small>Publicado em: <?php echo $noticia['data']; ?></small>
                    </article>
                    <hr>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>Nenhuma notícia encontrada.</p>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 Aether Games</p>
    </footer>
</body>
</html>

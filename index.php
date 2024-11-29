
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aether Games</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- cabeçalho -->
    <header>
        <div class="logo-container">
            <img src="img/Aether.png" alt="Logo do site" class="logo">
            <h1>Aether Games</h1>
        </div>

        <!-- Menu de navegação -->
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="lancamentos.php">Lançamentos</a></li>
                <li><a href="esports.php">eSports</a></li>
                <li><a href="reviews.php">Reviews</a></li>
            </ul>
        </nav>

        <!-- Barra de Pesquisa -->
        <form action="pesquisa.php" method="GET" class="pesquisa-form">
            <input type="text" name="query" placeholder="Pesquisar...">
            <button type="submit">🔍</button>
        </form>
 
                 <!-- Botões de Login e Cadastrar-se -->
 <div class="auth-buttons">
                <a href="login.php"><button class="login-button">Login</button></a>
                <a href="cadastro.php"><button class="register-button">Cadastrar-se</button></a>
            </div>
        </div>
    </header>
        <!-- Redes Sociais -->
        <div class="redes-sociais-container">
            <h2>Siga-nos nas redes sociais:</h2>
            <a href="https://x.com/aethergames_?t=OkI8IvGnlaga-8LS0QC99Q&s=09" target="_blank">
                <img src="https://www.freepnglogos.com/uploads/twitter-x-logo-png/twitter-x-logo-png-9.png" alt="Twitter" class="rede-social-icon">
            </a>
            <a href="https://facebook.com/aethergames" target="_blank">
                <img src="https://th.bing.com/th/id/R.2bad70f2d08429a28dfbebd4c237924b?rik=vgEdhJ%2f%2biiEnQQ&riu=http%3a%2f%2fpngimg.com%2fuploads%2ffacebook_logos%2ffacebook_logos_PNG19748.png&ehk=0ZiZ04ZZ6mSJ5oyPxBh1gy4FSYhegWTWyDpCiI73sbw%3d&risl=&pid=ImgRaw&r=0" alt="Facebook" class="rede-social-icon">
            </a>
            <a href="https://www.instagram.com/aethergames1?igsh=dGRhN3k4NWltNzV5" target="_blank">
                <img src="https://th.bing.com/th/id/R.735dda68880a385ce8cc5be4f3c5fcd6?rik=qSxRw2lCZYy9Mw&riu=http%3a%2f%2fpngimg.com%2fuploads%2finstagram%2finstagram_PNG11.png&ehk=QVCbfkCKi8pJLF08bRkS%2fLeMqLTnJQf402WRaIdN6jE%3d&risl=&pid=ImgRaw&r=0" alt="Instagram" class="rede-social-icon">
            </a>
            <a href="https://www.youtube.com/channel/UCZD3jFO-zq_RkJHTnBVOSIg" target="_blank">
                <img src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-5-2.png" alt="YouTube" class="rede-social-icon">
            </a>
        </div>
    </header>

    <!-- conteúdo principal -->
    <main>
    <h1>Últimas Notícias</h1>
    <?php
    $sql = "SELECT titulo, conteudo, DATE_FORMAT(data, '%d/%m/%Y') AS data FROM noticias ORDER BY data DESC LIMIT 3";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0):
        while ($noticia = $resultado->fetch_assoc()): ?>
            <article>
                <h2><?php echo htmlspecialchars($noticia['titulo']); ?></h2>
                <p><?php echo nl2br(htmlspecialchars(substr($noticia['conteudo'], 0, 150))); ?>...</p>
                <small>Publicado em: <?php echo $noticia['data']; ?></small>
            </article>
            <hr>
        <?php endwhile;
    else: ?>
        <p>Nenhuma notícia encontrada.</p>
    <?php endif; ?>
    <a href="noticias.php">Ver todas as notícias</a>
</main>


    <!-- rodapé -->
    <footer>
        <p>&copy; 2024 Aether Games</p>
    </footer>

</body>
</html>

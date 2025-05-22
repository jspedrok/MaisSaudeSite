<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Mais Saúde</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS Customizado -->
    <link rel="stylesheet" href="../css/contato.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">


    <link rel="icon" href="../imagens/Saúde.png" type="image/x-icon">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
   <?php require_once __DIR__ . '/../pages/header.php'; ?>
</nav>

<!-- Conteúdo -->
<main class="container mt-5 pt-5">
    <section id="contato">
        <h2 class="titulo-principal">Fale Conosco</h2>
        <p class="subtitulo">Preencha o formulário abaixo para entrarmos em contato</p>

        <form action="salvar_contato.php" method="POST" class="formulario-contato">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="empresa">Nome da Empresa:</label>
                <input type="text" id="empresa" name="empresa">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="numero">Telefone:</label>
                <input type="tel" id="numero" name="numero" required>
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="6" required></textarea>
            </div>

            <button type="submit" class="btn-enviar">Enviar Mensagem</button>
        </form>
    </section>
</main>

<!-- Footer -->

<?php require_once __DIR__ . '/../pages/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/hamburguer.js"></script>

</body>
</html>

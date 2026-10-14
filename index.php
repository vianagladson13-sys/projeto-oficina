<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastros de Veiculos</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/navbar.css">

</head>


<body class="bg-light d-flex flex-column min-vh-100">

    <?php
    // Captura a página solicitada pela URL
    $page = $_GET["page"] ?? "landing";

    // Páginas carregadas diretamente pela estrutura views
    $paginasPublicas = [
        "landing" => __DIR__ . "/views/landing.php",
        "login"   => __DIR__ . "/views/login.php",
        "cliente" => __DIR__ . "/views/cliente.php",
        "historia" => __DIR__ . "/views/historia.php",
    
    ];
    ?>

    <!-- =========================================
         NAVBAR PADRÃO - MECANICA MF
         ========================================= -->

    <?php if ($page !== "login" && $page !== "landing"): ?>

        <?php
        // Inclui o navbar em todas as páginas,
        // exceto na tela de login.
        require __DIR__ . "/includes/navbar.php";
        ?>

    <?php endif; ?>


    <!-- =========================================
         CONTEÚDO PRINCIPAL
         ========================================= -->

    <main class="flex-grow-1">

        <?php
        // Se a página estiver na lista, carrega sua view.
        if (array_key_exists($page, $paginasPublicas)) {

            require $paginasPublicas[$page];

        } else {

            // Demais páginas continuam sendo controladas
            // pelo arquivo routes.php.
            require __DIR__ . "/routes.php";

        }
        ?>

    </main>


    <!-- =========================================
         RODAPÉ
         ========================================= -->

    <footer class="bg-dark text-white text-center py-3 mt-0">

    </footer>


    <!-- =========================================
         JAVASCRIPT DO BOOTSTRAP
         ========================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Constantes do sistema -->
    <script src="config/constants.js"></script>

    <!-- Funções auxiliares -->
    <script src="js/helpers.js"></script>

</body>


</html>
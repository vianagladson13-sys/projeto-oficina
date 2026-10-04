<?php
// Página: Nossa História
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nossa História | Mecanica MF</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS da página -->
    <link rel="stylesheet" href="assets/css/historia.css">
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-contagem">

        <div class="container">

            <!-- Logo / Nome -->
            <a class="navbar-brand d-flex align-items-center" href="index.php">

                <div class="ms-2">
                    <span class="nome-site">Mecanica MF</span>

                    <small class="d-block">
                        Centro Automotivo
                    </small>
                </div>

            </a>

            <!-- Botão Mobile -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavbar"
                aria-controls="menuNavbar"
                aria-expanded="false"
                aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="menuNavbar">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="historia.php">
                            Nossa História
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="eventos.php">
                            Serviços Automotivos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="negocios.php">
                            Negócios
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="servicos.php">
                            Serviços
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a href="login.php" class="btn btn-login">
                            Entrar
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- =========================
         CABEÇALHO DA PÁGINA
    ========================== -->
    <header class="hero-historia">

        <div class="container">

            <div class="hero-conteudo">

                <span class="hero-tag">
                    <i class="bi bi-car-front-fill"></i>
                    Cuidando do seu carro
                </span>

                <h1>
                    Nossa História
                </h1>

                <p>
                    Cuidado automotivo com confiança, tecnologia e atenção a cada detalhe.
                </p>

            </div>

        </div>

    </header>


    <!-- =========================
         HISTÓRIA
    ========================== -->
    <main>

        <section class="historia-section">

            <div class="container">

                <div class="row align-items-center g-5">

                    <!-- Texto -->
                    <div class="col-lg-7">

                        <span class="section-label">
                            COMO TUDO COMEÇOU
                        </span>

                        <h2>
                            Nosso compromisso é cuidar do seu carro com transparência
                        </h2>

                        <p>
                            No <strong>Centro Automotivo MF</strong>, acreditamos que cuidar bem do seu carro é também cuidar da segurança, do conforto e da tranquilidade da sua família.
                        </p>

                        <p>
                            Nosso trabalho é oferecer um atendimento de confiança, com profissionais preparados, diagnóstico preciso e serviços realizados com atenção aos detalhes.
                        </p>

                        <p>
                            Utilizamos tecnologia de diagnóstico para identificar a causa dos problemas com mais precisão, ajudando a evitar trocas de peças e reparos desnecessários. Assim, respeitamos o seu tempo e o seu dinheiro.
                        </p>

                        <p>
                            É dessa forma que construímos nosso relacionamento com cada cliente: com clareza, responsabilidade e compromisso com a qualidade.
                        </p>

                    </div>

                    <!-- Destaque -->
                    <div class="col-lg-5">

                        <div class="historia-card">

                            <div class="icone-historia">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <h3>
                                Cuidado que gera confiança
                            </h3>

                            <p>
                                Cada veículo recebe atenção individual, desde a avaliação inicial até a entrega. Nosso objetivo é oferecer segurança, qualidade e tranquilidade em cada serviço.
                            </p>

                            <div class="linha"></div>

                            <span>
                                Mecanica MF
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             NOSSO FOCO
        ========================== -->
        <section class="proposito-section">

            <div class="container">

                <div class="text-center titulo-proposito">

                    <span class="section-label">
                        NOSSO FOCO
                    </span>

                    <h2>
                        Mais do que consertar veículos, queremos cuidar de pessoas.
                    </h2>

                    <p>
                        Nosso foco é oferecer um serviço automotivo confiável, transparente e eficiente, usando conhecimento técnico e tecnologia para entregar soluções adequadas para cada veículo.
                    </p>

                </div>


                <div class="row g-4 mt-4">

                    <!-- Card 1 -->
                    <div class="col-md-4">

                        <div class="proposito-card">

                            <div class="icone-card">
                                <i class="bi bi-search"></i>
                            </div>

                            <h3>
                                Diagnóstico preciso
                            </h3>

                            <p>
                                Identificar a causa do problema antes de realizar qualquer reparo, reduzindo serviços desnecessários.
                            </p>

                        </div>

                    </div>


                    <!-- Card 2 -->
                    <div class="col-md-4">

                        <div class="proposito-card">

                            <div class="icone-card">
                                <i class="bi bi-shop"></i>
                            </div>

                            <h3>
                                Transparência
                            </h3>

                            <p>
                                Explicar o diagnóstico, orientar sobre as opções de serviço e manter o cliente informado.
                            </p>

                        </div>

                    </div>


                    <!-- Card 3 -->
                    <div class="col-md-4">

                        <div class="proposito-card">

                            <div class="icone-card">
                                <i class="bi bi-people"></i>
                            </div>

                            <h3>
                                Segurança e qualidade
                            </h3>

                            <p>
                                Realizar os serviços com responsabilidade, atenção aos detalhes e foco na segurança do veículo.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             ACESSIBILIDADE
        ========================== -->
        <section class="acessibilidade-section">

            <div class="container">

                <div class="row align-items-center g-5">

                    <div class="col-lg-6">

                        <span class="section-label">
                            ATENDIMENTO DE CONFIANÇA
                        </span>

                        <h2>
                            Um atendimento pensado para você.
                        </h2>

                        <p>
                            Sabemos que levar o carro para manutenção envolve tempo, confiança e investimento. Por isso, buscamos tornar cada etapa mais clara e tranquila para o cliente.
                        </p>

                        <p>
                            Desde o primeiro contato, nossa equipe procura entender a necessidade do veículo e orientar o cliente de forma objetiva, sem complicar o que precisa ser simples.
                        </p>

                        <p>
                            Nosso compromisso é prestar um atendimento responsável, com comunicação clara e respeito ao seu orçamento.
                        </p>

                    </div>


                    <div class="col-lg-6">

                        <div class="acessibilidade-box">

                            <div class="item-acessibilidade">

                                <i class="bi bi-search"></i>

                                <div>
                                    <h4>
                                        Avaliação e diagnóstico
                                    </h4>

                                    <p>
                                        Analisamos o veículo para identificar a origem do problema antes da execução do serviço.
                                    </p>
                                </div>

                            </div>


                            <div class="item-acessibilidade">

                                <i class="bi bi-tools"></i>

                                <div>
                                    <h4>
                                        Serviços adequados
                                    </h4>

                                    <p>
                                        Realizamos o reparo necessário de acordo com o diagnóstico e as necessidades do veículo.
                                    </p>
                                </div>

                            </div>


                            <div class="item-acessibilidade">

                                <i class="bi bi-headset"></i>

                                <div>
                                    <h4>
                                        Suporte ao cliente
                                    </h4>

                                    <p>
                                        Estamos disponíveis para orientar, esclarecer dúvidas e acompanhar você quando precisar.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             FRASE FINAL
        ========================== -->
        <section class="frase-section">

            <div class="container">

                <div class="frase-conteudo">

                    <i class="bi bi-quote"></i>

                    <h2>
                        Seu carro em boas mãos.
                    </h2>

                    <p>
                        Conte com a Mecanica MF para diagnóstico, manutenção e cuidados automotivos com confiança.
                    </p>

                    <a href="https://wa.me/55319984534637?text=Olá!%20Preciso%20de%20suporte%20sobre%20meu%20veículo.%20Gostaria%20de%20orientação%20sobre%20o%20serviço%20necessário." target="_blank" rel="noopener noreferrer" class="btn btn-principal">
                        Falar com o suporte
                        <i class="bi bi-whatsapp"></i>
                    </a>

                </div>

            </div>

        </section>

    </main>





    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
```
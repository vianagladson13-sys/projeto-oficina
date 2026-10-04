<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="assets/css/landing.css">
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Mecanica MF</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body class="bg-light">


    <!-- =========================================
         CABEÇALHO DA LANDING PAGE
    ========================================== -->

    <header>

        <nav class="navbar navbar-dark bg-dark py-3">

            <div class="container">

                <!-- Logo / Nome -->
                <a href="index.php?page=landing"
                    class="navbar-brand fw-bold">

                    <i class="bi bi-grid me-2"></i>

                    Sistema MVC

                </a>


                <!-- Login -->
                <a href="index.php?page=login"
                    class="btn btn-outline-light">

                    <i class="bi bi-box-arrow-in-right me-1"></i>

                    Entrar

                </a>

            </div>

        </nav>

    </header>


    <!-- =========================================
         CONTEÚDO PRINCIPAL
    ========================================== -->

    <main>


        <!-- =====================================================
         HERO
    ====================================================== -->

        <section class="mw-hero">

            <div class="mw-hero-overlay"></div>

            <div class="container">

                <div class="mw-hero-content">

                    <span class="mw-label">
                        OFICINA AUTOMOTIVA
                    </span>

                    <h1>
                        CUIDAMOS DO
                        <br>
                        SEU CARRO COM
                        <span>
                            TECNOLOGIA,
                            <br>
                            TRANSPARÊNCIA
                            <br>
                            E CONFIANÇA.
                        </span>
                    </h1>

                    <p>
                        Diagnóstico preciso, agendamento fácil
                        e acompanhamento em tempo real do serviço.
                    </p>

                    <div class="mw-hero-buttons">

                        <a href="index.php?page=manutencao" class="btn-mw-primary">
                            AGENDAR SERVIÇO
                        </a>

                        <a href="diagnostico.php" class="btn-mw-outline">
                            FAZER DIAGNÓSTICO
                        </a>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
         SERVIÇOS PRINCIPAIS
    ====================================================== -->

        <section class="mw-services">

            <div class="container">

                <div class="mw-section-title">

                    <span></span>

                    <h2>
                        TUDO QUE VOCÊ PRECISA, EM UM SÓ LUGAR
                    </h2>

                    <span></span>

                </div>


                <div class="row g-4">

                    <!-- CADASTRO -->
                    <div class="col-lg-3 col-md-6">

                        <div class="mw-card">

                            <div class="mw-card-icon">
                                <i class="bi bi-car-front"></i>
                            </div>

                            <h3>
                                CADASTRO DE VEÍCULOS
                            </h3>

                            <p>
                                Cadastre seu veículo e tenha
                                todas as informações sempre
                                à mão.
                            </p>

                            <a href="index.php?page=clientes">
                                CADASTRAR AGORA →
                            </a>

                        </div>

                    </div>


                    <!-- DIAGNÓSTICO -->
                    <div class="col-lg-3 col-md-6">

                        <div class="mw-card">

                            <div class="mw-card-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>

                            <h3>
                                DIAGNÓSTICO VIA CHAT
                            </h3>

                            <p>
                                Converse com nossos especialistas
                                e descubra possíveis problemas.
                            </p>

                            <a href="manutencao.php">
                                INICIAR CHAT →
                            </a>

                        </div>

                    </div>


                    <!-- AGENDAMENTO -->
                    <div class="col-lg-3 col-md-6">

                        <div class="mw-card">

                            <div class="mw-card-icon">
                                <i class="bi bi-calendar3"></i>
                            </div>

                            <h3>
                                AGENDAMENTO ONLINE
                            </h3>

                            <p>
                                Escolha a data e o horário que
                                melhor se adapta à sua rotina.
                            </p>

                            <a href="index.php?page=manutencao">
                                AGENDAR AGORA →
                            </a>

                        </div>

                    </div>


                    <!-- ACOMPANHAMENTO -->
                    <div class="col-lg-3 col-md-6">

                        <div class="mw-card">

                            <div class="mw-card-icon">

                                <div class="mw-percent">
                                    75%
                                </div>

                            </div>

                            <h3>
                                ACOMPANHE SEU SERVIÇO
                            </h3>

                            <p>
                                Acompanhe em tempo real
                                o andamento do serviço.
                            </p>

                            <a href="index.php?page=produtos">
                                ACOMPANHAR AGORA →
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
     MECANICA MF
     DIAGNÓSTICO VIA CHAT
     ===================================================== -->

        <section class="mf-servicos-home">

            <div class="container">

                <div class="mf-feature-row">

                    <!-- =================================================
                 LADO ESQUERDO - INFORMAÇÕES
                 ================================================= -->

                    <div class="mf-feature-content">

                        <span class="mf-feature-label">
                            DIAGNÓSTICO INTELIGENTE
                        </span>

                        <h2>
                            VIA CHAT
                        </h2>

                        <div class="mf-feature-line"></div>

                        <p>
                            Descreva o problema do seu veículo e receba
                            uma orientação inicial sobre os próximos passos.
                            Nossa equipe está preparada para ajudar você.
                        </p>

                        <button
                            type="button"
                            class="mf-btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#modalDiagnostico">

                            <i class="bi bi-chat-dots"></i>

                            INICIAR CONVERSA

                        </button>

                    </div>


                    <!-- =================================================
                 LADO DIREITO - PREVIEW DO CHAT
                 ================================================= -->

                    <div class="mf-feature-card">

                        <div class="mf-chat-preview">

                            <!-- CABEÇALHO -->

                            <div class="mf-chat-header">

                                <div class="mf-chat-icon">

                                    <i class="bi bi-car-front-fill"></i>

                                </div>

                                <div>

                                    <strong>
                                        Mecanica MF
                                    </strong>

                                    <small>
                                        Diagnóstico online
                                    </small>

                                </div>

                            </div>


                            <!-- MENSAGEM DO SISTEMA -->

                            <div class="mf-chat-message mf-message-system">

                                Olá! Em que podemos ajudar?

                            </div>


                            <!-- MENSAGEM DO CLIENTE -->

                            <div class="mf-chat-message mf-message-client">

                                Meu carro está fazendo um barulho
                                quando eu freio.

                            </div>


                            <!-- RESPOSTA -->

                            <div class="mf-chat-message mf-message-system">

                                Podemos verificar o sistema de freios.
                                Recomendamos uma avaliação para identificar
                                a causa com segurança.

                            </div>


                            <!-- INDICADOR -->

                            <div class="mf-chat-dots">

                                <span></span>
                                <span></span>
                                <span></span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        </section>


    </main>


    <!-- =========================================
     RODAPÉ DA LANDING PAGE
========================================== -->

    <footer class="bg-dark text-white pt-4 pb-3">

        <div class="container">







            <!-- =========================================
             INFORMAÇÕES PRINCIPAIS
        ========================================== -->

            <div class="row g-3">


                <!-- EMPRESA -->
                <div class="col-lg-3 col-md-6">

                    <h6 class="fw-bold mb-2">

                        <i class="bi bi-car-front-fill me-2"></i>

                        Mecanica MF

                    </h6>

                    <p class="text-white-50 small mb-0">

                        Serviços automotivos com qualidade,
                        tecnologia e compromisso com nossos clientes.

                    </p>

                </div>


                <!-- ENDEREÇO -->
                <div class="col-lg-3 col-md-6">

                    <h6 class="fw-bold mb-2">

                        <i class="bi bi-geo-alt-fill me-2"></i>

                        Endereço

                    </h6>

                    <p class="text-white-50 small mb-0">

                        Av. das Acácias, 706<br>

                        Colorado - Ibirité/MG<br>

                        CEP: 32430-110

                    </p>

                </div>


                <!-- CONTATO -->
                <div class="col-lg-3 col-md-6">

                    <h6 class="fw-bold mb-2">

                        <i class="bi bi-telephone-fill me-2"></i>

                        Contato

                    </h6>


                    <!-- TELEFONE -->

                    <p class="text-white-50 small mb-1">

                        <i class="bi bi-telephone me-2"></i>

                        (31) 98453-4637

                    </p>


                    <!-- WHATSAPP -->

                    <a href="https://wa.me/55319984534637?text=Olá!%20Gostaria%20de%20saber%20mais%20sobre%20os%20serviços."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-white-50 text-decoration-none small">

                        <i class="bi bi-whatsapp me-2"></i>

                        WhatsApp

                    </a>

                </div>


                <!-- HORÁRIO -->
                <div class="col-lg-3 col-md-6">

                    <h6 class="fw-bold mb-2">

                        <i class="bi bi-clock-fill me-2"></i>

                        Funcionamento

                    </h6>

                    <p class="text-white-50 small mb-1">

                        Segunda a sexta: 08:00 às 18:00

                    </p>

                    <p class="text-white-50 small mb-0">

                        Sábado: 08:00 às 12:00

                    </p>

                </div>

            </div>


            <!-- =========================================
             REDES + MINI MAPA
        ========================================== -->

            <div class="row align-items-center mt-3 pt-3 border-top border-secondary">


                <!-- REDES SOCIAIS -->

                <div class="col-lg-7 col-md-6">

                    <h6 class="fw-bold mb-2">

                        <i class="bi bi-share-fill me-2"></i>

                        Siga nas redes sociais

                    </h6>


                    <div class="d-flex flex-wrap gap-3">


                        <!-- INSTAGRAM -->

                        <a href="https://www.instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-white-50 text-decoration-none small">

                            <i class="bi bi-instagram me-1"></i>

                            Instagram

                        </a>


                        <!-- FACEBOOK -->

                        <a href="https://www.facebook.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-white-50 text-decoration-none small">

                            <i class="bi bi-facebook me-1"></i>

                            Facebook

                        </a>


                        <!-- YOUTUBE -->

                        <a href="https://www.youtube.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-white-50 text-decoration-none small">

                            <i class="bi bi-youtube me-1"></i>

                            YouTube

                        </a>

                    </div>

                </div>


                <!-- MINI MAPA -->

                <div class="col-lg-5 col-md-6 mt-3 mt-md-0">

                    <div class="d-flex align-items-center gap-3">


                        <!-- MAPA -->

                        <div style="width: 150px; height: 80px; flex-shrink: 0;">

                            <iframe
                                src="https://www.google.com/maps?q=Av.%20das%20Acácias,%20706%20-%20Colorado,%20Ibirité%20-%20MG,%2032430-110&output=embed"
                                width="150"
                                height="80"
                                style="border:0; border-radius:8px;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                        </div>


                        <!-- INFORMAÇÃO DO MAPA -->

                        <div>

                            <h6 class="fw-bold mb-1">

                                <i class="bi bi-map-fill me-1"></i>

                                Nossa localização

                            </h6>

                            <p class="text-white-50 small mb-0">

                                Colorado - Ibirité/MG

                            </p>

                            <a
                                href="https://www.google.com/maps/search/?api=1&query=Av.%20das%20Acácias,%20706%20-%20Colorado,%20Ibirité%20-%20MG,%2032430-110"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-white small text-decoration-none">

                                Ver no Google Maps
                                <i class="bi bi-arrow-up-right ms-1"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
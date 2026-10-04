<!-- =========================================================
     CSS DA PÁGINA
     ========================================================= -->

<link rel="stylesheet" href="assets/css/cliente.css">


<!-- =========================================================
     NAVBAR - MECANICA MF
     ========================================================= -->

<header class="mf-navbar">

    <div class="mf-navbar-container">

        <!-- LOGO -->
        <a href="index.php?page=landing" class="mf-navbar-brand">
            Mecanica MF
        </a>


        <!-- MENU -->
        <nav class="mf-navbar-menu">

            <a href="index.php?page=landing">
                Serviços
            </a>

            <a href="index.php?page=cliente.php">
                Clientes
            </a>

            <a href="manutencao.php">
                Manutenção
            </a>

            <a href="#">
                Sobre nós
            </a>

            <a href="index.php?page=login">
                Sair
            </a>

        </nav>

    </div>

</header>

<!-- =========================================================
     CADASTRO DE CLIENTE
     ========================================================= -->

<div class="cliente-page">

    <div id="container-cliente">


        <!-- Cabeçalho -->

        <div class="cliente-header">

            <div class="cliente-icon">

                <i class="bi bi-person-plus-fill"></i>

            </div>

            <div>

                <h2>Cadastro de clientes</h2>

                <p>
                    Cadastre os dados do cliente e do veículo.
                </p>

            </div>

        </div>


        <!-- Corpo -->

        <div class="cliente-body">


            <!-- Formulário -->

            <form id="formCliente">


                <!-- =================================================
                     NOME
                     ================================================= -->

                <div class="mb-3">

                    <label
                        for="nome"
                        class="form-label"
                    >
                        Nome
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            class="form-control"
                            placeholder="Digite o nome do cliente"
                        >

                        <div class="invalid-feedback"></div>

                        <div class="valid-feedback"></div>

                    </div>

                </div>


                <!-- =================================================
                     CPF
                     ================================================= -->

                <div class="mb-3">

                    <label
                        for="cpf"
                        class="form-label"
                    >
                        CPF
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-card-text"></i>
                        </span>

                        <input
                            type="text"
                            id="cpf"
                            name="cpf"
                            class="form-control"
                            placeholder="000.000.000-00"
                        >

                        <div class="invalid-feedback"></div>

                        <div class="valid-feedback"></div>

                    </div>

                </div>


                <!-- =================================================
                     PLACA
                     ================================================= -->

                <div class="mb-3">

                    <label
                        for="placa"
                        class="form-label"
                    >
                        Placa
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-card-text"></i>
                        </span>

                        <input
                            type="text"
                            id="placa"
                            name="placa"
                            class="form-control"
                            placeholder="ABC-1234"
                        >

                        <div class="invalid-feedback"></div>

                        <div class="valid-feedback"></div>

                    </div>

                </div>


                <!-- =================================================
                     MODELO
                     ================================================= -->

                <div class="mb-3">

                    <label
                        for="modelo"
                        class="form-label"
                    >
                        Modelo / Carro
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-car-front-fill"></i>
                        </span>

                        <input
                            type="text"
                            id="modelo"
                            name="modelo"
                            class="form-control"
                            placeholder="Digite o modelo do veículo"
                        >

                        <div class="invalid-feedback"></div>

                        <div class="valid-feedback"></div>

                    </div>

                </div>


                <!-- =================================================
                     TELEFONE
                     ================================================= -->

                <div class="mb-3">

                    <label
                        for="telefone"
                        class="form-label"
                    >
                        Telefone
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-telephone"></i>
                        </span>

                        <input
                            type="text"
                            id="telefone"
                            name="telefone"
                            class="form-control"
                            placeholder="(31) 99999-9999"
                        >

                        <div class="invalid-feedback"></div>

                        <div class="valid-feedback"></div>

                    </div>

                </div>


                <!-- =================================================
                     BOTÕES
                     ================================================= -->

                <div class="cliente-botoes">

                    <button
                        type="submit"
                        class="btn btn-primary btn-cadastrar"
                    >
                        <i class="bi bi-check-circle me-2"></i>
                        Cadastrar
                    </button>


                    <button
                        type="reset"
                        class="btn btn-limpar"
                    >
                        <i class="bi bi-arrow-counterclockwise me-2"></i>
                        Limpar
                    </button>

                </div>


            </form>


            <!-- Mensagem -->

            <div
                id="mensagem"
                class="alert d-none mt-3"
            ></div>


        </div>

    </div>

</div>


<!-- =========================================================
     JQUERY
     ========================================================= -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


<!-- JQUERY VALIDATION -->

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


<!-- JQUERY MASK -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<!-- SCRIPT DA PÁGINA -->

<script src="assets/js/cliente.js"></script>
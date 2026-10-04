<link rel="stylesheet" href="assets/css/manutencao.css">

<div class="manutencao-page">

    <div id="painel-manutencao">

        <!-- CABEÇALHO -->
        <div class="manutencao-header">

            <div class="manutencao-icon">
                <i class="bi bi-tools"></i>
            </div>

            <div>
                <h2>Manutenção do veículo</h2>
                <p>Selecione o tipo de manutenção</p>
            </div>

        </div>


        <div class="manutencao-body">
 
            <!-- EXPLICAÇÃO -->
            <div class="manutencao-info">
                <i class="bi bi-info-circle"></i>

                <span>
                    A manutenção preventiva realiza trocas e inspeções programadas
                    para evitar desgastes. A manutenção corretiva repara ou substitui
                    peças danificadas ou que apresentaram falhas.
                </span>
            </div>


            <!-- OPÇÕES -->
            <div class="opcoes-manutencao">

                <!-- PREVENTIVA -->
                <button
                    type="button"
                    class="btn-manutencao btn-preventiva"
                    onclick="mostrarManutencao('preventiva')">

                    <div class="icone-manutencao">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <div class="texto-manutencao">
                        <strong>Manutenção Preventiva</strong>

                        <span>
                            Evita desgastes e problemas futuros
                        </span>
                    </div>

                    <i class="bi bi-chevron-down seta-manutencao"></i>

                </button>


                <!-- CORRETIVA -->
                <button
                    type="button"
                    class="btn-manutencao btn-corretiva"
                    onclick="mostrarManutencao('corretiva')">

                    <div class="icone-manutencao">
                        <i class="bi bi-wrench-adjustable"></i>
                    </div>

                    <div class="texto-manutencao">
                        <strong>Manutenção Corretiva</strong>

                        <span>
                            Repara falhas e peças danificadas
                        </span>
                    </div>

                    <i class="bi bi-chevron-down seta-manutencao"></i>

                </button>

            </div>


            <!-- ================================================= -->
            <!-- CONTEÚDO PREVENTIVA -->
            <!-- ================================================= -->

            <div id="conteudo-preventiva" class="conteudo-manutencao">

                <div class="titulo-conteudo">

                    <div class="titulo-icone">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <div>
                        <h3>Lista de Manutenção Preventiva</h3>

                        <p>
                            Procedimentos realizados periodicamente para
                            reduzir desgastes e evitar falhas.
                        </p>
                    </div>

                </div>


                <!-- FILTROS -->
                <div class="grupo-tarefas">

                    <h4>
                        <i class="bi bi-funnel"></i>
                        Troca de Filtros Completa
                    </h4>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Filtro de óleo</strong>

                            <p>
                                Retira impurezas do lubrificante e deve ser
                                trocado junto com cada troca de óleo do motor.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Filtro de ar do motor</strong>

                            <p>
                                Impede a entrada de poeira na câmara de combustão.
                                A troca é geralmente indicada entre 15.000 km e
                                20.000 km.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Filtro de combustível</strong>

                            <p>
                                Retém detritos antes que cheguem aos bicos
                                injetores. A troca ocorre em média a cada
                                30.000 km.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Filtro de cabine</strong>

                            <p>
                                Garante a limpeza do ar interno do veículo.
                                Deve ser trocado periodicamente ou conforme
                                recomendação do fabricante.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FLUIDOS -->
                <div class="grupo-tarefas">

                    <h4>
                        <i class="bi bi-droplet"></i>
                        Troca de Fluidos
                    </h4>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Óleo do motor</strong>

                            <p>
                                Lubrifica as peças móveis do motor. Deve ser
                                trocado conforme o manual do veículo.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Fluido de freio</strong>

                            <p>
                                Transmite a força do pedal para o sistema
                                de frenagem e deve ser substituído conforme
                                recomendação do fabricante.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Fluido de arrefecimento</strong>

                            <p>
                                Controla a temperatura do motor e deve ser
                                trocado conforme recomendação da montadora.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Fluido de direção hidráulica</strong>

                            <p>
                                Facilita o esterçamento em sistemas hidráulicos
                                tradicionais e deve ser verificado conforme
                                o manual.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Óleo de câmbio</strong>

                            <p>
                                Garante o funcionamento adequado das marchas
                                e deve ser substituído conforme recomendação
                                do fabricante.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- FREIOS -->
                <div class="grupo-tarefas">

                    <h4>
                        <i class="bi bi-disc"></i>
                        Sistema de Freios
                    </h4>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Pastilhas de freio</strong>

                            <p>
                                Realizam o atrito com o disco e devem ser
                                inspecionadas periodicamente, sendo trocadas
                                quando atingirem o limite de desgaste.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Discos de freio</strong>

                            <p>
                                Devem ser avaliados quanto ao desgaste e
                                à espessura mínima permitida.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa">
                            <i class="bi bi-check2"></i>
                        </div>

                        <div>
                            <strong>Lonas e tambores de freio</strong>

                            <p>
                                Utilizados em sistemas de freio traseiro
                                com tambor. Devem ser ajustados ou trocados
                                quando apresentarem desgaste.
                            </p>
                        </div>
                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- CONTEÚDO CORRETIVA -->
            <!-- ================================================= -->

            <div id="conteudo-corretiva" class="conteudo-manutencao">

                <div class="titulo-conteudo">

                    <div class="titulo-icone corretiva">
                        <i class="bi bi-wrench-adjustable"></i>
                    </div>

                    <div>
                        <h3>Lista de Manutenção Corretiva</h3>

                        <p>
                            Serviços realizados quando existe falha, ruído,
                            vazamento ou quebra de um componente.
                        </p>
                    </div>

                </div>


                <div class="grupo-tarefas">

                    <h4>
                        <i class="bi bi-car-front"></i>
                        Peças e Componentes do Motor
                    </h4>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Correia dentada ou corrente de comando</strong>

                            <p>
                                Substituída quando apresentar trincas ou atingir
                                a quilometragem limite de segurança.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Correia dos acessórios</strong>

                            <p>
                                Trocada quando estiver ressecada, desgastada
                                ou apresentar ruídos.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Velas de ignição e cabos</strong>

                            <p>
                                Podem ser substituídos quando houver falhas
                                de ignição, aumento de consumo ou dificuldade
                                na partida.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Bomba d'água</strong>

                            <p>
                                Substituída em caso de vazamento do líquido
                                de arrefecimento ou ruído nos rolamentos.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Válvula termostática</strong>

                            <p>
                                Substituída quando apresentar falha que
                                prejudique o controle da temperatura do motor.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Junta do cabeçote</strong>

                            <p>
                                Substituição corretiva em casos de falha da
                                junta, como situações associadas a superaquecimento.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Bobina de ignição</strong>

                            <p>
                                Trocada quando apresentar falha no fornecimento
                                de centelha para um ou mais cilindros.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Bomba de combustível</strong>

                            <p>
                                Substituída quando perder pressão ou apresentar
                                falha que impeça o funcionamento adequado.
                            </p>
                        </div>
                    </div>


                    <div class="tarefa">
                        <div class="check-tarefa corretiva">
                            <i class="bi bi-wrench"></i>
                        </div>

                        <div>
                            <strong>Selos do motor</strong>

                            <p>
                                Trocados quando apresentarem vazamento de
                                líquido de arrefecimento ou outro problema
                                relacionado à vedação.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

function mostrarManutencao(tipo) {

    const preventiva = document.getElementById("conteudo-preventiva");
    const corretiva = document.getElementById("conteudo-corretiva");

    const botoes = document.querySelectorAll(".btn-manutencao");

    // Esconde os dois conteúdos
    preventiva.classList.remove("ativo");
    corretiva.classList.remove("ativo");

    // Remove seleção dos botões
    botoes.forEach(function(botao) {
        botao.classList.remove("selecionado");
    });


    // Mostra a opção escolhida
    if (tipo === "preventiva") {

        preventiva.classList.add("ativo");

        document
            .querySelector(".btn-preventiva")
            .classList.add("selecionado");

    }


    if (tipo === "corretiva") {

        corretiva.classList.add("ativo");

        document
            .querySelector(".btn-corretiva")
            .classList.add("selecionado");

    }

}

</script>
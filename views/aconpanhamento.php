<!-- =========================================================
     CSS DA PÁGINA
========================================================= -->

<link rel="stylesheet" href="assets/css/acompanhamento.css">

<!-- ENVOLTÓRIO PRINCIPAL (Necessário para acionar o CSS) -->
<div class="mf-acompanhamento-page">

    <div class="container">

        <!-- =================================================
                 CABEÇALHO
            ================================================== -->
        <div class="mf-acompanhamento-header">
            <div class="mf-acompanhamento-icon">
                <i class="bi bi-speedometer2"></i>
            </div>
            <div>
                <span class="mf-acompanhamento-label">ACOMPANHAMENTO DO SERVIÇO</span>
                <h1>Acompanhe seu serviço <span>em tempo real</span></h1>
                <p>Consulte o andamento do serviço do seu veículo e acompanhe cada etapa realizada pela nossa equipe.</p>
            </div>
        </div>

        <!-- =================================================
                 CONSULTA DA ORDEM
            ================================================== -->
        <div class="mf-consulta-card">
            <div class="mf-consulta-title">
                <i class="bi bi-search"></i>
                <div>
                    <h2>Consultar ordem de serviço</h2>
                    <p>Informe o número da sua ordem para acompanhar o andamento do veículo.</p>
                </div>
            </div>

            <form id="formAcompanhamento">
                <div class="mf-consulta-form">
                    <div class="mf-input-group">
                        <label for="ordemServico">Número da ordem</label>
                        <input type="text" id="ordemServico" name="ordemServico" placeholder="Ex.: 12458" autocomplete="off">
                    </div>
                    <button type="submit" class="mf-btn-consultar">
                        <i class="bi bi-search"></i>
                        CONSULTAR
                    </button>
                </div>
            </form>
        </div>

        <!-- =================================================
                 RESULTADO
            ================================================== -->
        <div id="resultadoAcompanhamento" class="mf-resultado-acompanhamento">

            <!-- CABEÇALHO DA ORDEM -->
            <div class="mf-ordem-header">
                <div>
                    <span class="mf-ordem-label">ORDEM DE SERVIÇO</span>
                    <h2>#12458</h2>
                </div>
                <div class="mf-status-atual">
                    <span>STATUS ATUAL</span>
                    <strong>EM EXECUÇÃO</strong>
                </div>
            </div>

            <!-- INFORMAÇÕES DO VEÍCULO -->
            <div class="mf-info-grid">
                <div class="mf-info-item">
                    <i class="bi bi-car-front-fill"></i>
                    <div>
                        <span>VEÍCULO</span>
                        <strong>Honda Civic</strong>
                    </div>
                </div>
                <div class="mf-info-item">
                    <i class="bi bi-card-text"></i>
                    <div>
                        <span>PLACA</span>
                        <strong>ABC-1234</strong>
                    </div>
                </div>
                <div class="mf-info-item">
                    <i class="bi bi-wrench-adjustable"></i>
                    <div>
                        <span>SERVIÇO</span>
                        <strong>Troca de amortecedores</strong>
                    </div>
                </div>
            </div>

            <!-- ACOMPANHAMENTO -->
            <div class="mf-status-area">
                <div class="mf-status-title">
                    <div>
                        <span>ANDAMENTO DO SERVIÇO</span>
                        <h3>Acompanhe cada etapa</h3>
                    </div>
                    <div class="mf-percentual">65%</div>
                </div>

                <!-- BARRA DE PROGRESSO -->
                <div class="mf-progress">
                    <div class="mf-progress-bar" style="width: 65%;"></div>
                </div>

                <!-- LINHA DO TEMPO -->
                <div class="mf-timeline">
                    <!-- RECEBIDO -->
                    <div class="mf-step concluido">
                        <div class="mf-step-icon"><i class="bi bi-check-lg"></i></div>
                        <div class="mf-step-content">
                            <strong>Recebido</strong>
                            <span>10/06 • 08:30</span>
                        </div>
                    </div>

                    <!-- DIAGNÓSTICO -->
                    <div class="mf-step concluido">
                        <div class="mf-step-icon"><i class="bi bi-check-lg"></i></div>
                        <div class="mf-step-content">
                            <strong>Diagnóstico</strong>
                            <span>10/06 • 09:15</span>
                        </div>
                    </div>

                    <!-- AGUARDANDO PEÇAS -->
                    <div class="mf-step">
                        <div class="mf-step-icon"><i class="bi bi-box-seam"></i></div>
                        <div class="mf-step-content">
                            <strong>Aguardando peças</strong>
                            <span>Próxima etapa</span>
                        </div>
                    </div>

                    <!-- EM EXECUÇÃO -->
                    <div class="mf-step atual">
                        <div class="mf-step-icon"><i class="bi bi-tools"></i></div>
                        <div class="mf-step-content">
                            <strong>Em execução</strong>
                            <span>Serviço em andamento</span>
                        </div>
                    </div>

                    <!-- TESTES -->
                    <div class="mf-step">
                        <div class="mf-step-icon"><i class="bi bi-clipboard-check"></i></div>
                        <div class="mf-step-content">
                            <strong>Testes</strong>
                            <span>Pendente</span>
                        </div>
                    </div>

                    <!-- FINALIZADO -->
                    <div class="mf-step">
                        <div class="mf-step-icon"><i class="bi bi-check-circle"></i></div>
                        <div class="mf-step-content">
                            <strong>Finalizado</strong>
                            <span>Pendente</span>
                        </div>
                    </div>

                    <!-- ENTREGUE -->
                    <div class="mf-step">
                        <div class="mf-step-icon"><i class="bi bi-car-front"></i></div>
                        <div class="mf-step-content">
                            <strong>Entregue</strong>
                            <span>Pendente</span>
                        </div>
                    </div>
                </div>

                <!-- DESCRIÇÃO -->
                <div class="mf-servico-descricao">
                    <i class="bi bi-info-circle"></i>
                    <div>
                        <strong>Serviço em execução</strong>
                        <p>A equipe está realizando a troca dos amortecedores dianteiros do veículo.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- =========================================================
     JAVASCRIPT
========================================================= -->
<script>
    document.getElementById("formAcompanhamento").addEventListener("submit", function(event) {
        event.preventDefault();

        const ordem = document.getElementById("ordemServico").value.trim();

        if (ordem === "") {
            alert("Informe o número da ordem de serviço.");
            return;
        }

        document.getElementById("resultadoAcompanhamento").classList.add("ativo");
    });
</script>
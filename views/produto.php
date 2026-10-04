<!-- CSS da página -->
<link rel="stylesheet" href="assets/css/produto.css">


<section class="container py-5">
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <div class="d-flex flex-column  flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                <div>
                    <h2 class="mb-1"> Produtos </h2>
                    <p class="text-muted mb-0"> Cadastro e gerenciamento de produtos </p>
                </div>

                <button type="button" class="btn btn-primary" id="btnNovoProduto"> <i class="bi bi-plus-lg me-1"></i>
                    Novo Produto
                </button>
            </div>

            <div id="mensagem" class="alert d-none" role="alert"></div>

            <div class="table-responsive">
                <table class="table table-hover align-middle tabela-produtos">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Status</th>
                            <th class="text-center"> Ações </th>
                        </tr>
                    </thead>

                    <tbody id="tabelaProdutos">
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted"> Carregando produtos... </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-3 text-muted small" id="totalRegistros"></div>
        </div>
    </div>
</section>


<!-- MODAL - CADASTRAR / EDITAR PRODUTO -->
<div class="modal fade" id="modalProduto" tabindex="-1" aria-labelledby="tituloModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal"> Novo Produto </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <form id="formProduto">
                <div class="modal-body">

                    <!------------------- CAMPOS OCULTOS--------------------------- -->
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="acao" name="acao" value="cadastrar">
                    <!-- ---------------------------------------------------------- -->

                    <div class="mb-3">
                        <label for="nome" class="form-label"> Nome </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-box-seam"></i></span>
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label"> Categoria </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-tags"></i></span>
                            <input type="text" id="categoria" name="categoria" class="form-control">
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="preco" class="form-label"> Preço </label>
                            <div class="input-group">
                                <span class="input-group-text"> R$ </span>
                                <input type="text" id="preco" name="preco" class="form-control">
                            </div>
                            <div class="invalid-feedback"></div>

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="quantidade" class="form-label"> Quantidade </label>
                            <div class="input-group">
                                <span class="input-group-text"> <i class="bi bi-123"></i> </span>
                                <input type="text" id="quantidade" name="quantidade" class="form-control">
                            </div>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg me-1"></i> Cancelar
                    </button>

                    <button type="submit" class="btn btn-primary" id="btnSalvar">
                        <i class="bi bi-check-lg me-1"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- jQuery Validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<!-- jQuery Mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- js da página -->

<script src="assets/js/produto.js"></script>
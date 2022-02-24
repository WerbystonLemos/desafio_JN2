<!-- Modal add user -->
<div id="modalAddUser" class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Adicionar Usuário</h5>
                <button type="button" onclick="fechaModalAddUsuario('modalAddUser')">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="containerBodyModalAddUser">
                    <form>

                        <div class="form-group">
                            <label for="iptAddNome">Nome</label>
                            <input type="text" class="form-control" id="iptAddNome" name="iptAddNome" aria-describedby="iptAddNome" placeholder="Digite seu Nome">
                        </div>

                        <div class="form-group">
                            <label for="iptAddFone">Telefone</label>
                            <input type="text" class="form-control" id="iptAddFone" name="iptAddFone" aria-describedby="iptAddFone" placeholder="Digite seu telefone">
                        </div>

                        <div class="form-group">
                            <label for="iptAddCpf">CPF</label>
                            <input type="text" class="form-control" id="iptAddCpf" name="iptAddCpf" aria-describedby="iptAddCpf" placeholder="Digite seu CPF">
                        </div>

                        <div class="form-group">
                            <label for="iptAddPlaca">Placa</label>
                            <input type="text" class="form-control" id="iptAddPlaca" name="iptAddPlaca" aria-describedby="iptAddPlaca" placeholder="Digite a placa do veículo.">
                        </div>

                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="saveAddUsuario()">Salvar</button>
                <button type="button" class="btn btn-primary" onclick="fechaModalAddUsuario('modalAddUser')">Cancelar</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal Edit user -->
<div id="modalEditUser" class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Editar Usuário</h5>
                <button type="button" onclick="fechaModalAddUsuario('modalEditUser')">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="containerBodyModalAddUser">
                    <form>

                        <div class="form-group">
                            <label for="iptEditNome">Nome</label>
                            <input type="text" class="form-control" id="iptEditNome" name="iptEditNome" aria-describedby="iptEditNome" placeholder="Digite seu Nome">
                        </div>

                        <div class="form-group">
                            <label for="iptEditFone">Telefone</label>
                            <input type="text" class="form-control" id="iptEditFone" name="iptEditFone" aria-describedby="iptEditFone" placeholder="Digite seu telefone">
                        </div>

                        <div class="form-group">
                            <label for="iptEditCpf">CPF</label>
                            <input type="text" class="form-control" id="iptEditCpf" name="iptEditCpf" aria-describedby="iptEditCpf" placeholder="Digite seu CPF">
                        </div>

                        <input id="iptEditIdPlaca" name="iptEditIdPlaca" type="hidden" val="">
                        <div class="form-group">
                            <label for="iptEditPlaca">Placa</label>
                            <input type="text" class="form-control" id="iptEditPlaca" name="iptEditPlaca" aria-describedby="iptEditPlaca" placeholder="Digite a placa do veículo.">
                        </div>

                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="saveEditUsuario()">Salvar</button>
                <button type="button" class="btn btn-primary" onclick="fechaModalAddUsuario('modalEditUser')">Cancelar</button>
            </div>

        </div>
    </div>
</div>
<header>
    <h3><i class="bi bi-person-bounding-box"></i> Cadastro de contato</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-contato" method="post"this.submitButton.disabled=true;>
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
            <input class="form-control" type="text" name="nomeContato" placeholder="Nome" required>
            </div>
        </div>
        <div>
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
            <input class="form-control" type="email" name="emailContato" placeholder="Email" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
            <input class="form-control" type="text" name="telefoneContato" placeholder="Telefone" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox"></i></span>
            <input class="form-control" type="text" name="enderecoContato" placeholder="Endereço" required>
            </div>
        </div>

    <div class="row">
        <div class="mb-3 col-3">
            <label class="form-label" for="sexoContato">Sexo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
            <select class="form-select" name="sexoContato" id="sexoContato">
                <option selected>Selexione o Sexo do Contato</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            </div>
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="dataNascContato">Data de Nascimento</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
            <input class="form-control" type="date" name="dataNascContato" placeholder="Data de Nascimento" required>
            </div>
        </div>
</div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Adicionar</button>
        </div>
    </form>
</div>




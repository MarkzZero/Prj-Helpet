
<!-- Modal Excluir Perfil  -->
<div class="fadeExc hide">
</div>
<div class="modalExc hide">
    <div class="modal-header">
        <div class="fechar-modal">
            <i class="fechar fi fi-br-cross close-modalExc"></i>
        </div>
    </div>
    <form class="area-excluir" action="../Excluir/Excluir.php" method="post">
        <i class="fi fi-sr-delete-user"></i>
        <h4>Desejar excluir sua conta?</h4>
        <p>Digite Confirmar para Exclusão</p>
        <div class="input-field">
            <input type="text" name="senha" id="senha">
            <div class="underline"></div>
        </div>
        <div class="botoes">
            <button class="btn-cancelar">Cancelar</button>
            <button class="btn-excluir" type="submit">Salvar</button>
        </div>
    </form>
</div>
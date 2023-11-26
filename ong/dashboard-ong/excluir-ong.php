<!-- Modal Excluir Perfil  -->
<div class="fadeExc hide"></div>
<div class="modalExc hide">
    <div class="modal-header">
        <div class="fechar-modal">
            <i class="fechar fi fi-br-cross close-modalExc"></i>
        </div>
    </div>

    <div class="area-excluir">
        <i class="fi fi-sr-delete-user"></i>
        <h4>Desejar excluir sua conta?</h4>
        <p>Digite sua senha para confirmar</p>
        <form action="cadastro/deleteOng.php" method="post">
            <div style="margin: auto;" class="input-field">
                <input style="text-align: center;" type="text" name="senha" id="senha">
                <div  class="underline"></div>
            </div>
            <?php if (isset($_SESSION['erro'])) : ?>
                <p>Senha incorreta!</p>
            <?php endif;
            unset($_SESSION['erro']); ?>
            <div class="botoes">
                <button class="btn-cancelar">Cancelar</button>
                <button class="btn-excluir" name="delete" type="submit">Salvar</button>
            </div>
        </form>
    </div>
</div>
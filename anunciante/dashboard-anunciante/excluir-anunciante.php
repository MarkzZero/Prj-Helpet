<!-- Modal Excluir Perfil  -->
<?php 
    include('./config/config.php');

while ($anunciante_data = mysqli_fetch_assoc($resultAnunciante)) {
?>
    <div class="fadeExc hide"></div>
    <div class="modalExc hide">
        <div class="modal-header">
            <div class="fechar-modal">
                <i class="fechar fi fi-br-cross close-modalExc"></i>
            </div>
        </div>

        <div class="area-excluir">
            <i class="fi fi-sr-delete-user"></i>
            <span>Desejar excluir sua conta?</span>
            <p>Digite sua senha para confirmar</p>
            <form action="#" method="post">
                <div style="margin: auto;" class="input-field">
                    <input type="hidden" name="id" value="<?php echo $anunciante_data['idAnunciante'] ?>" id="">
                    <input style="text-align: center;" type="text" name="senha" id="senha" required>
                    <div class="underline"></div>
                </div>
                <div class="botoes">
                    <button class="btn-cancelar">Cancelar</button>
                    <button class="btn-excluir" name="delete" type="submit">Salvar</button>
                </div>
                <?php if(isset($_SESSION['erro'])): ?>
                <p>Senha incorreta!</p>
                <?php endif; ?>
            </form>
        </div>
    </div>
<?php } ?>
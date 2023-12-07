<!-- Modal Excluir Perfil  -->
<?php
    include('config/config.php');
    while($ong_data = mysqli_fetch_assoc($resultOng)){
?>
<div class="fadeExc hide"></div>
<div class="modalExc hide">
    <div class="modal-header">
        <div class="fechar-modal">
            <i class="fechar fi fi-br-cross close-modalExc"></i>
        </div>
    </div>

    <div class="area-excluir">
        <i class="fi fi-sr-rectangle-xmark"></i>
        <span>Desejar excluir sua conta?</span>
        <p>Digite sua senha para confirmar</p>
        <form action="cadastro/deleteOng.php" method="post">
            <div class="input-field">
                <input type="text" name="id" value="<?php echo $ong_data['idOng'] ?>" id="">
                <input type="text" name="senha" id="senha">
                <div class="underline"></div>
            </div>
            <?php if (isset($_SESSION['erro'])) : ?>
                <p class="mensagem-senha">Senha incorreta!</p>
            <?php endif;
            unset($_SESSION['erro']); ?>
            <div class="botoes">
                <button class="btn-cancelar">Cancelar</button>
                <button class="btn-excluir" name="delete" type="submit">Excluir</button>
            </div>
        </form>
    </div>
</div>
<?php } ?>

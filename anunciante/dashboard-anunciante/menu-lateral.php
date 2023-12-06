<?php while ($anunciante_data = mysqli_fetch_assoc($resultAnunciante)) {
    $telefone_data = mysqli_fetch_assoc($resultTelefone);
?>
    <nav>

        <div class="toggle">
            <i class="fi fi-br-menu-burger"></i>
        </div>

        <div class="foto-anunciante">
            <img src="<?php echo "../Cadastro/" . $anunciante_data['fotoAnunciante']; ?>">
            <h2>Bem-vindo <br> <?php echo $anunciante_data['nomeAnunciante']; ?> </h2>
        </div>

        <ul>
            <li>
                <a href="index.php">
                    <i class="fi fi-rr-box-open"></i>
                    <p>Anúncios</p>
                </a>
            </li>
            <li>
                <a href="preco.php">
                    <i class="fi fi-rr-usd-circle"></i>
                    <p>Preços</p>
                </a>
            </li>
            <li>
                <a href="configuracao.php">
                    <i class="fi fi-rr-settings"></i>
                    <p>Configurações</p>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fi fi-rr-sign-out-alt"></i>
                    <p>Sair</p>
                </a>
            </li>
        </ul>
    </nav>
<?php } ?>
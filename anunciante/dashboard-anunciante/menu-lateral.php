<nav>
    <div class="toggle">
        <i class="fi fi-br-menu-burger"></i>
    </div>

    <div class="foto-anunciante">
        <img src="<?php echo "../Cadastro/" . $_SESSION['foto']; ?>">
        <h2>Bem-vindo <br> <?php echo $_SESSION['nome'];?> </h2>
    </div>

    <ul>
        <li>
            <a href="index.php">
                <i class="fi fi-rr-box-open"></i>
                <p>Anúncios</p> 
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fi fi-rr-messages"></i>
                <p>Chat</p>
            </a>
        </li>
        <li>
            <a href="#">
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
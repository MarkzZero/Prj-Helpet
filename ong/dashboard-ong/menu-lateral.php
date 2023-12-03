<!-- Menu Fixo Lateral -->
<div class="navegation">
    <div class="toggle">
        <i class="fi fi-br-menu-burger"></i>
    </div>
    
    <div class="logo">
        <img src="<?php echo "../Cadastro/" . $ong_data['fotoOng'];?>">
        <span class="title-ong">Bem-Vindo <br> <?php echo $ong_data['nomeOng'];?></span>
    </div>

    <ul>
        <li>
            <a href="index.php">
                <span class="icon"><i class="fi fi-rr-chart-pie-alt"></i></span>
                <span class="icon icon-hover"><i class="fi fi-sr-chart-pie-alt"></i></span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="Pets.php">
                <span class="icon"><i class="fi fi-rr-paw"></i></span>
                <span class="icon icon-hover"><i class="fi fi-sr-paw"></i></span>
                <span class="title">Pets</span>
            </a>
        </li>
        <li>
            <a href="Campanhas.php">
                <span class="icon"><i class="fi fi-rr-megaphone"></i></span>
                <span class="icon icon-hover"><i class="fi fi-sr-megaphone"></i></span>
                <span class="title">Campanhas</span>
            </a>
        </li>
        <li>
            <a href="solicitacoes.php">
                <span class="icon"><i class="fi fi-rr-assept-document"></i></span>
                <span class="icon icon-hover"><i class="fi fi-sr-assept-document"></i></span>
                <span class="title">Solicitações</span>
            </a>
        </li>
        <li>
            <a href="Chat.php">
                <span class="icon"><i class="fi fi-rr-messages"></i></span>
                <span class="icon icon-hover"><i class="fi fi-sr-messages"></i></span>
                <span class="title">Chat</span>
            </a>
        </li>
        <li>
            <a href="configuracoes.php">
                <span class="icon"><i class="fi fi-rr-settings"></i></span>
                <span class="icon icon-hover"><i class="fi fi-sr-settings"></i></span>
                <span class="title">Configurações</span>
            </a>
        </li>
        <li>
            <a href="logout.php">
                <span class="icon"><i class="fi fi-rr-sign-out-alt"></i></span>
                <span class="icon icon-hover"><i class="fi fi-br-sign-out-alt"></i></span>
                <span class="title">Sair</span>
            </a>
        </li>
    </ul>
</div>
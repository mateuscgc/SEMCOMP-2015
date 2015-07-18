<?php
    $page = $_SERVER['REQUEST_URI'];
    switch($page){
        case '/semcomp-2015/index.php':
            $active_li = 1;
        break;
        case '/semcomp-2015/sobre.php':
            $active_li = 2;
        break;
        case '/semcomp-2015/programacao.php':
            $active_li = 3;
        break;
        case '/semcomp-2015/NOMEDAPAG.php': //tem que ver o nome da página 
            $active_li = 4;
        break;
        case '/semcomp-2015/NOMEDAPAG.php': //tem que ver o nome da página 
            $active_li = 5;
        break;
        case '/semcomp-2015/NOMEDAPAG.php': //tem que ver o nome da página 
            $active_li = 6;
        break;
        case '/semcomp-2015/call4papers.php':
            $active_li = 7;
        break;
        case '/semcomp-2015/contato.php':
            $active_li = 8;
        break;
        case '/semcomp-2015/participe.php':
            $active_li = 9;
        break;
    }
?>
<nav>
    <div class="nav-wrapper">
       <!-- <div class="logo"><img src="assets/images/marca_semcomp_2015_horizontal_colorida_fundo-escuro.png"alt=""></div> -->
       <?php echo file_get_contents('assets/images/marca_semcomp_2015.svg'); ?>
       <div id="toggle"><i class="fa fa-bars"></i></div>
        <ul class="link-list">
            <a href="index.php" class="<?php if($active_li == 1) echo "active"; ?>"><li>HOME</li></a>
            <a href="sobre.php" class="<?php if($active_li == 2) echo "active"; ?>"><li>A SEMCOMP</li></a>
            <a class="<?php if(($active_li >= 3) && ($active_li <= 7) ) echo "active"; ?>"><li class="dropdown">PROGRAMAÇÃO <i class="fa fa-chevron-down"></i></li></a>
            <a href="" class="<?php if($active_li == 3) echo "active"; ?>"><li class="links-responsive">PROGRAMAÇÃO GERAL</li></a>
            <a href="" class="<?php if($active_li == 4) echo "active"; ?>"><li class="links-responsive">MINICURSOS</li></a>
            <a href="" class="<?php if($active_li == 5) echo "active"; ?>"><li class="links-responsive">MARATONA DE PROGRAMAÇÃO</li></a>
            <a href="" class="<?php if($active_li == 6) echo "active"; ?>"><li class="links-responsive">PAINEL DE STARTUPS</li></a>
            <a href="" class="<?php if($active_li == 7) echo "active"; ?>"><li class="links-responsive">CALL FOR PAPERS</li></a>
            <a href="contato.php" class="<?php if($active_li == 8) echo "active"; ?>"><li>CONTATO</li></a>
            <a href="" class="<?php if($active_li == 9) echo "active"; ?>"><li>INSCREVA-SE</li></a>
        </ul>
    </div>
    <ul class="programming">
        <li>PROGRAMAÇÃO GERAL</li>
        <li>MINICURSOS</li>
        <li>MARATONA DE PROGRAMAÇÃO</li>
        <li>PAINEL DE STARTUPS</li>
        <li>CALL FOR PAPERS</li>
    </ul>
</nav>

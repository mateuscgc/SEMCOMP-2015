<?php
    $page = $_SERVER['REQUEST_URI'];
    $page = end(explode('/', $page));
?>
<nav>
    <div class="nav-wrapper">
       <?php echo file_get_contents('assets/images/marca_semcomp_2015.svg'); ?>
       <div id="toggle"><i class="fa fa-bars"></i></div>
        <ul class="link-list">
            <a href="index.php" class="<?php if($page == 'index.php') echo "active"; ?>"><li>HOME</li></a>
            <a href="sobre.php" class="<?php if($page == 'sobre.php') echo "active"; ?>"><li>A SEMCOMP</li></a>
            <a class=""><li class="dropdown">PROGRAMAÇÃO <i class="fa fa-chevron-down"></i></li></a>
            <a href="programacao.php" class="<?php if($page == 'programacao.php') echo "active"; ?>"><li class="links-responsive">PROGRAMAÇÃO GERAL</li></a>
            <a href="" class="<?php if($page == 'minicursos.php') echo "active"; ?>"><li class="links-responsive">MINICURSOS</li></a>
            <a href="" class="<?php if($page == 'maratona.php') echo "active"; ?>"><li class="links-responsive">MARATONA DE PROGRAMAÇÃO</li></a>
            <a href="" class="<?php if($page == 'startups.php') echo "active"; ?>"><li class="links-responsive">PAINEL DE STARTUPS</li></a>
            <a href="papers.php" class="<?php if($page == 'papers.php') echo "active"; ?>"><li class="links-responsive">CALL FOR PAPERS</li></a>
            <a href="contato.php" class="<?php if($page == 'contato.php') echo "active"; ?>"><li>CONTATO</li></a>
            <a href="" class="<?php if($page == 'inscricoes.php') echo "active"; ?>"><li>INSCREVA-SE</li></a>
        </ul>
    </div>
    <ul class="programming">
        <a href="programacao.php"><li>PROGRAMAÇÃO GERAL</li></a>
        <li>MINICURSOS</li>
        <li>MARATONA DE PROGRAMAÇÃO</li>
        <li>PAINEL DE STARTUPS</li>
        <a href="papers.php"><li>CALL FOR PAPERS</li></a>
    </ul>
</nav>

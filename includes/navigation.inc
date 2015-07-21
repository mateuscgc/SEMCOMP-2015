<?php
    $page = $_SERVER['REQUEST_URI'];
    $page = end(explode('/', $page));
?>
<nav>
    <div class="nav-wrapper">
       <?php echo file_get_contents('assets/images/marca_semcomp_2015.svg'); ?>
       <div id="toggle"><i class="fa fa-bars"></i></div>
        <ul class="link-list">
            <a href="/" class="<?php if($page == '') echo "active"; ?>"><li>HOME</li></a>
            <a href="sobre" class="<?php if($page == 'sobre') echo "active"; ?>"><li>A SEMCOMP</li></a>
            <a class=""><li class="dropdown">PROGRAMAÇÃO <i class="fa fa-chevron-down"></i></li></a>
            <a href="programacao" class="<?php if($page == 'programacao') echo "active"; ?>"><li class="links-responsive">PROGRAMAÇÃO GERAL</li></a>
            <a href="minicursos" class="<?php if($page == 'minicursos') echo "active"; ?>"><li class="links-responsive">MINICURSOS</li></a>
            <a href="maratona" class="<?php if($page == 'maratona') echo "active"; ?>"><li class="links-responsive">MARATONA DE PROGRAMAÇÃO</li></a>
            <a href="startups" class="<?php if($page == 'startups') echo "active"; ?>"><li class="links-responsive">PAINEL DE STARTUPS</li></a>
            <a href="papers" class="<?php if($page == 'papers') echo "active"; ?>"><li class="links-responsive">CALL FOR PAPERS</li></a>
            <a href="contato" class="<?php if($page == 'contato') echo "active"; ?>"><li>CONTATO</li></a>
            <a href="inscricoes" class="<?php if($page == 'inscricoes') echo "active"; ?>"><li>INSCREVA-SE</li></a>
        </ul>
    </div>
    <ul class="programming">
        <a href="programacao"><li>PROGRAMAÇÃO GERAL</li></a>
        <a href="minicursos"><li>MINICURSOS</li>
        <a href="maratona"><li>MARATONA DE PROGRAMAÇÃO</li>
        <a href="startups"><li>PAINEL DE STARTUPS</li>
        <a href="papers"><li>CALL FOR PAPERS</li></a>
    </ul>
</nav>

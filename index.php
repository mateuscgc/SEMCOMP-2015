<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - SEMCOMP 2015</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php require_once('includes/head.inc');?>
</head>
<body>
    <?php require_once('includes/navigation.inc');?>
    <header class="home-header">
        <video class="home-bg-video" autoplay loop>
            <source src="https://hrcdn.net/videos/hr_20mb.webm" type="video/webm">
        </video>
        <div class="overlay">
            <div class="social-networks social-networks-home">
                <a href="https://www.facebook.com/semanacomp" target="_blank"><i class="icon-facebook"></i></a>
                <a href="https://www.youtube.com/user/SEMCOMPUFBA" target="_blank"><i class="icon-youtube"></i></a>
                <a ><i class="icon-envelope"></i></a>
            </div>
            <div class="intro-wrapper">
                <span class="semcomp-presents">Apresentamos a 5ª Edição da Maior Semana da Computação do Brasil</span>
                <h1 class="semcomp-title">SEMCOMP <span>2015</span></h1>
                <h2 class="semcomp-date">02 a 05 de Setembro</h2>
                <span class="semcomp-local">Escola Politécnica da UFBA</span>
            </div>
            <button class="btn btn-nobg-green btn-home-video">Quem Vai<i class="icon-chevron-down"></i></button>
        </div>
    </header>
    <main>
        <section class="regular-section" id="keynotes">
            <div class="content">
                <div class="row">
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/caio-sacramento.jpg" height="960" width="720" class="speaker-thumb keynote-thumb"></img>
                        <div class="keynote-info">
                            <h2 class="keynote-name">Caio Sacramento</h2>
                            <span class="keynote-title">Trainee</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/cristiano-santos.jpg" height="222" width="222" class="speaker-thumb keynote-thumb"></img>
                        <div class="keynote-info">
                            <h2 class="keynote-name">Cristiano Santos</h2>
                            <span class="keynote-title">Pós Júnior</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/diego-cajaiba.jpg" class="speaker-thumb keynote-thumb"></img>
                        <div class="keynote-info">
                            <h2 class="keynote-name">Diego Cajaiba</h2>
                            <span class="keynote-title">Assessor de Presidência</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/jp.jpg" class="speaker-thumb keynote-thumb"></img>
                        <div class="keynote-info">
                            <h2 class="keynote-name">JP</h2>
                            <span class="keynote-title">Assessor de Marketing</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/kaio-porto.jpg" height="231" width="231" class="speaker-thumb keynote-thumb"></img>
                        <div class="keynote-info">
                            <h2 class="keynote-name">Kaio Porto</h2>
                            <span class="keynote-title">Assessor de Projetos</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/leonardo-costa.jpg" height="960" width="579" class="speaker-thumb keynote-thumb"></img>
                        <div class="keynote-info">
                            <h2 class="keynote-name">Leonardo Costa</h2>
                            <span class="keynote-title">Gerente de Comunicação</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <img src="assets/images/vinicius-dias.jpg" height="960" width="960" class="speaker-thumb keynote-thumb"></img>
                        <div class="keynote-info">
                            <h2 class="keynote-name">Vinicius Dias</h2>
                            <span class="keynote-title">Gerente de Treinamentos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="regular-section" id="data">
            <div class="bg-test"></div>
            <div class="content">
                <div class="data-unit col-md-3 col-xs-6">
                    <h1>4</h1>
                    <h3>Dias</h3>
                </div>
                <div class="data-unit col-md-3 col-xs-6">
                    <h1>30+</h1>
                    <h3>Palestras</h3>
                </div>
                <div class="data-unit col-md-3 col-xs-6">
                    <h1>30+</h1>
                    <h3>Horas</h3>
                </div>
                <div class="data-unit col-md-3 col-xs-6">
                    <h1>6</h1>
                    <h3>Cursos</h3>
                </div>
                <div class="data-actions">
                    <button class="btn btn-nobg-green">Programação Completa</button>
                    <button class="btn btn-green">Inscreva-se</button>
                </div>
            </div>
        </section>
    </main>
   <?php require_once('includes/footer.inc');?>
</body>
</html>

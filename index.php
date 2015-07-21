<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - SEMCOMP 2015</title>
    <?php require_once('includes/head.inc');?>
</head>
<body>
    <header class="home-header">
        <video class="home-bg-video" poster="assets/images/jm.png" autoplay loop>
            <source  src="assets/bg-video.mp4" type="video/mp4">
        </video>
        <div class="overlay">
            <?php require_once('includes/navigation.inc');?>
            <div class="social-networks social-networks-header">
                <a href="https://www.facebook.com/semanacomp" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.youtube.com/user/SEMCOMPUFBA" target="_blank"><i class="fa fa-youtube"></i></a>
                <a href="https://twitter.com/Semcompufba" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="intro-wrapper">
                <span class="semcomp-presents">Apresentamos a 5ª Edição da Maior Semana da Computação do Brasil</span>
                <h1 class="semcomp-title">SEMCOMP <span>2015</span></h1>
                <h2 class="semcomp-date">02 a 05 de Setembro</h2>
                <span class="semcomp-local">Escola Politécnica da UFBA</span>
            </div>
        </div>
    </header>
    <main>
        <section class="regular-section" id="keynotes">
            <div class="content">
                <h3 class="sub-title">Da uma olhada em quem vai marcar presença</h3>
                <div class="row">
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/leandro-bennaton.jpg" class="speaker-thumb keynote-thumb">
                        <div class="keynote-info">
                            <h2 class="keynote-name">Leandro Bennaton</h2>
                            <span class="keynote-title">CSO - Terra</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/willian-justen.jpg" class="speaker-thumb keynote-thumb">
                        <div class="keynote-info">
                            <h2 class="keynote-name">Willian Justen</h2>
                            <span class="keynote-title">Frontend Engineer - Globo.com</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6">
                        <img src="assets/images/bruno-ribas.jpg" class="speaker-thumb keynote-thumb">
                        <div class="keynote-info">
                            <h2 class="keynote-name">Bruno Ribas</h2>
                            <span class="keynote-title">Professor - UTFPR</span>
                        </div>
                    </div>
                    <div class="keynote col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <img src="assets/images/keynote-breve.jpg" class="speaker-thumb undefined-thumb">
                        <div class="keynote-info">
                            <h2 class="keynote-name">????</h2>
                            <span class="keynote-title">????</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="regular-section" id="data">
            <div class="bg-test"></div>
            <div class="content">
                <div class="data-unit col-md-3 col-xs-6">
                    <h1><div class="numscroller" data-max="4" data-min="0" data-increment="1" data-delay="1.5">4</div></h1>
                    <h3>Dias</h3>
                </div>
                <div class="data-unit col-md-3 col-xs-6">
                    <h1><div class="numscroller" data-max="30" data-min="0" data-increment="1" data-delay="1.8">30</div>+</h1>
                    <h3>Palestras</h3>
                </div>
                <div class="data-unit col-md-3 col-xs-6">
                    <h1><div class="numscroller" data-max="4" data-min="0" data-increment="1" data-delay="2.1">4</div></h1>
                    <h3>Cursos</h3>
                </div>
                <div class="data-unit col-md-3 col-xs-6">
                    <h1><div class="numscroller" data-max="90" data-min="0" data-increment="1" data-delay="2.4">90</div>+</h1>
                    <h3>Horas de Conteúdo</h3>
                </div>
                <div class="data-actions">
                    <button class="btn btn-nobg-green">Programação Completa</button>
                    <button class="btn btn-green">Inscreva-se</button>
                </div>
            </div>
        </section>
        <section class="regular-section" id="sponsors">
            <div class="content">
                <h3 class="sub-title">Quem está contribuindo com a realização da SEMCOMP 2015.</h3>
                <p class="sponsor-type">Patrocínio Ouro</p>
                <div class="sponsor-unit">
                    <a href="http://www.jusbrasil.com.br/bem-vindo" target="_blank"><img src="assets/images/logo-jusbrasil.png" height="90px" alt="SEMCOMP"></a>
                </div>
                <p class="sponsor-type">Patrocínio Prata</p>
                <div class="sponsor-unit">
                    <a href="http://www.tecnoativa.com.br/Paginas/default.aspx" target="_blank"><img src="assets/images/tecnoAtiva.png" height="40px" alt="SEMCOMP"></a>
                </div>
                <p class="sponsor-type">Apoio</p>
                <div class="sponsor-unit sponsor-support">
                    <a href="http://www.globo.com/" target="_blank"><img src="assets/images/Logo_Globocom_2012-1.png" height="30" alt="SEMCOMP"></a>
                    <a href="https://doity.com.br/" target="_blank"><img src="assets/images/logo-transp.png" alt="SEMCOMP"></a>
                </div>
            </div>
        </section>
    </main>
   <?php require_once('includes/footer.inc');?>
   <script type="">
        var keynotesOffset;
        var dataOffset;
        var delay = 0;
        $(document).ready(function(){
            keynotesOffset = $('#keynotes').offset().top;
            dataOffset = $('#data').offset().top;
        });
        $(window).scroll(function(){
            if ($(this).scrollTop() > keynotesOffset - 200) {
                $('.keynote').each(function (){
                    $(this).delay(delay).animate({opacity: 1, marginTop: '0px'}, '400');
                    delay += 400;
                });
            }
        });
   </script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Entre em Contato - SEMCOMP 2015</title>
        <?php require_once('includes/head.inc');?>
    </head>
    <body>
        <header class="default-header header-contact">
            <?php require_once('includes/navigation.inc');?>
            <div id="map_canvas"></div>
        </header>
        <main>
            <section class="content overlay-content">
               <h3 class="sub-title">Preencha os campos abaixo para enviar sua mensagem <i class="fa fa-comments rotate"></i></h3>
                <form class="contact-form" action="controllers/mail.php" method="POST">
                    <label for=""><i class="fa fa-user"></i></label>
                    <input type="text" name="name" placeholder="Nome">
                    <label for=""><i class="fa fa-envelope"></i></label>
                    <input type="text" name="email" placeholder="Email">
                    <label for=""><i class="fa fa-file"></i></label>
                    <input type="text" name="title" placeholder="Assunto">
                    <label class="message" for=""><i class="fa fa-comment"></i></label>
                    <textarea class="message" name="message" placeholder="Mensagem" ></textarea>
                    <button class="btn btn-green btn-contact">Enviar</button>
                </form>
            </section>
        </main>
        <?php require_once('includes/footer.inc');?>
        <script>
            var marker;
            function initialize() {
                var map_canvas = document.getElementById('map_canvas');
                var map_options = {
                    center: new google.maps.LatLng(-12.99970, -38.51041),
                    zoom: 17,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false
                }
                var map = new google.maps.Map(map_canvas, map_options)

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-12.99970, -38.51041),
                    map: map,
                    title: 'Politécnica',
                    animation: google.maps.Animation.BOUNCE
                     });
                     google.maps.event.addListener(marker, 'mouseout', toggleBounce);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>

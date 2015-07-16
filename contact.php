<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>O Evento - SEMCOMP 2015</title>
        <?php require_once('includes/head.inc');?>
    </head>
    <body>
        <?php require_once('includes/navigation.inc');?>
        <header class="default-header header-contact"></header>
        <main>
            <section class="content overlay-content">
               <h3 class="sub-title">Preencha os campos abaixo para enviar sua mensagem <i class="fa fa-comments rotate"></i></h3>
                <form class="contact-form" action="controllers/mail.php" method="POST">
                    <label for=""><i class="fa fa-user rotate"></i></label>
                    <input type="text" name="name" placeholder="Nome">
                    <label for=""><i class="fa fa-envelope rotate"></i></label>
                    <input type="text" name="email" placeholder="Email">
                    <label for=""><i class="fa fa-file rotate"></i></label>
                    <input type="text" name="title" placeholder="Assunto">
                    <label class="message" for=""><i class="fa fa-comment rotate"></i></label>
                    <textarea class="message" name="message" placeholder="Mensagem" ></textarea>
                    <button class="btn btn-green">Enviar</button>
                </form>
            </section>
        </main>
        <?php require_once('includes/footer.inc');?>
    </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>O Evento - SEMCOMP 2015</title>
        <?php require_once('includes/head.inc');?>
    </head>
    <body>
        <?php require_once('includes/navigation.inc');?>
        <header class="default-header header-contact">
            <div class="overlay">
                <h3>Contato <i class="fa fa-comments rotate"></i></h3>
            </div>
        </header>
        <main>
            <section class="content">
                <form class="contact-form">
                    <label for=""><i class="fa fa-user rotate"></i></label>
                    <input type="text" placeholder="Nome">
                    <label for=""><i class="fa fa-envelope rotate"></i></label>
                    <input type="text" placeholder="Email">
                    <label for=""><i class="fa fa-file rotate"></i></label>
                    <input type="text" placeholder="Assunto">
                    <label class="message" for=""><i class="fa fa-comment rotate"></i></label>
                    <textarea class="message" placeholder="Mensagem" ></textarea>
                    <button class="btn btn-form">Enviar</button>
                </form>
            </section>
        </main>
        <?php require_once('includes/footer.inc');?>
    </body>
</html>

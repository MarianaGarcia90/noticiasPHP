<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Portal de Notícias</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <?php require_once 'process.php'; ?>

        <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">

            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>

        <div class="container">
            <h1>Inserir Notícias</h1>
            <div class="row justify-content-center">
                <form method="POST" action="process.php">
                    <div class="form-goup">
                        <div class="form-goup">
                            <label>Tema</label>
                            <input type="text" name="tema" class="form-control" placeholder="Insira os temas">
                        </div>
                        <label>Título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Insira o título">
                    </div>
                    <div class="form-goup">
                        <label>Assunto</label>
                        <textarea type="text" name="assunto" class="form-control" placeholder="Insira o assunto"></textarea>
                    </div>
                    <div class="form-goup">
                        <label>Autor</label>
                        <input type="text" name="autor" class="form-control" placeholder="Insira o autor">
                    </div>
                    <div class="form-goup">
                        <label>Data</label>
                        <input type="date" name="data" class="form-control">
                    </div>
                    <br>
                    <div class="form-goup">
                        <button type="submit" class="btn btn-outline-primary btn-lg" name="save">Cadastrar Notícia</button>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-outline-primary btn-lg" name="voltar"><a href="index.php">Página Inicial</a></button>
                </form>

            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>




</html>
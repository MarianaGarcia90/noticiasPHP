<?php
$conexao = mysqli_connect('localhost', 'root', '', 'noticias') or
die ("Não foi possível conectar ao banco de dados" . mysqli_connect_error());

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<?php require_once 'process.php'; ?>

<div class="container">

    <h1>Efetuar login</h1>
    <div class="row justify-content-center">
        <form method="post" action="process.php">
            <div class="form-goup">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="form-goup">
                <label>Senha</label>
                <input type="text" name="senha" class="form-control">
            </div>
            <br><br>
            <div class="form-goup">
                    <a href="process.php?user" class="btn btn-outline-primary">Logar</a>
                    <button type="submit" class="btn btn-outline-primary btn-lg" name="voltar"><a href="index.php">Página Inicial</a></button>
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
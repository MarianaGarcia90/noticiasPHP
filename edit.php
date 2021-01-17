<?php
$conexao = mysqli_connect('localhost', 'root', '', 'noticias') or
die ("Não foi possível conectar ao banco de dados" . mysqli_connect_error());
?>


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

            <div class="container">
                <?php
                    ini_set('default_charset', 'UTF-8');
                    $sql = "SELECT id, titulo, assunto, autor, data, tema FROM noticias";
                    $result = mysqli_query($conexao, $sql);
                ?>

                <h1>Editar e excluir Notícias</h1>
                <div class="row justify-content-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tema</th>
                                    <th>Título</th>
                                    <th>Assunto</th>
                                    <th>Autor</th>
                                    <th>Data</th>
                                    <th colspan="2">Ações</th>
                                </tr>
                            </thead>
                            <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo ($row['id']);?></td>
                                <td><?php echo ($row['tema']);?></td>
                                <td><?php echo ($row['titulo']);?></td>
                                <td><?php echo ($row['assunto']);?></td>
                                <td><?php echo ($row['autor']);?></td>
                                <td><?php echo ($row['data']);?></td>
                                <td>
                                    <a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-outline-info">Editar</a>
                                    <br>
                                    <br>
                                    <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>

                        </table>

                        <form method="post" action="process.php">
                            <div class="form-goup">
                                <?php
                                if($update == true):
                                ?>
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>"  readonly>
                                <?php else: ?>
                                    <br>
                                <?php endif; ?>
                            </div>
                            <div class="form-goup">
                                <label>Tema</label>
                                <input type="text" name="tema" class="form-control" value="<?php echo $tema; ?>">
                            </div>
                            <div class="form-goup">
                                <label>Título</label>
                                <input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>">
                            </div>
                            <div class="form-goup">
                                <label>Assunto</label>
                                <input type="text" name="assunto" class="form-control" value="<?php echo $assunto; ?>">
                            </div>
                            <div class="form-goup">
                                <label>Autor</label>
                                <input type="text" name="autor" class="form-control" value="<?php echo $autor; ?>">
                            </div>
                            <div class="form-goup">
                                <label>Data</label>
                                <input type="date" name="data" value="<?php echo $data; ?>" class="form-control">
                            </div>
                            <br><br>
                            <div class="form-goup">
                                <?php
                                    if($update == true):
                                ?>
                                    <button type="submit" class="btn btn-outline-primary btn-lg" name="update">Salvar</button>
                                <?php else: ?>
                                    <button type="submit" class="btn btn-outline-primary btn-lg" name="voltar"><a href="index.php">Página Inicial</a></button>
                                <?php endif; ?>
                            </div>
                        </form>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>

    </html>
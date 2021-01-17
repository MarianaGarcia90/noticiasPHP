<?php

    $mysqli = mysqli_connect('localhost', 'root', '', 'noticias') or
    die ("Não foi possível conectar ao banco de dados" . mysqli_connect_error());

    session_start();

    $id = 0;
    $titulo = '';
    $assunto = '';
    $autor = '';
    $data = '';
    $data = '';
    $tema = '';
    $update = false;


    if(isset($_POST['save'])){
        $titulo = $_POST['titulo'];
        $assunto = $_POST['assunto'];
        $autor = $_POST['autor'];
        $data = $_POST['data'];
        $data = implode("/",array_reverse(explode("/",$data)));
        $tema = $_POST['tema'];

        $sql = "INSERT INTO noticias (`titulo`, `assunto`, `autor`, `data`, `tema`) VALUES ('$titulo', '$assunto','$autor','$data','$tema')";
        $resultNoticia = mysqli_query($mysqli, $sql);

        $_SESSION['message'] = "Notícia inserida!";
        $_SESSION['msg_type'] = "success";

        header("location: insert.php");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql2 = "DELETE FROM noticias WHERE id = $id";
        $resultDelete = mysqli_query($mysqli, $sql2);

        header("location: edit.php");
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $sql3 = "SELECT * FROM noticias WHERE id = $id";
        $resultEdit = mysqli_query($mysqli, $sql3);

        $update = true;

        if(count($resultEdit)==1){
            $row = $resultEdit->fetch_array();
            $id = $row['id'];
            $titulo = $row['titulo'];
            $assunto = $row['assunto'];
            $autor = $row['autor'];
            $data = $row['data'];
            $tema = $row['tema'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $assunto = $_POST['assunto'];
        $autor = $_POST['autor'];
        $data = $_POST['data'];
        $data = implode("/",array_reverse(explode("/",$data)));
        $tema = $_POST['tema'];

        $sql4 = "UPDATE noticias SET titulo='$titulo', assunto='$assunto', autor='$autor', data='$data', tema='$tema' WHERE id='$id'";
        $resultUpdate = mysqli_query($mysqli, $sql4);

        header("location: edit.php");
    }

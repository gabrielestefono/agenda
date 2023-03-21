<?php
    include_once("./config/url.php");
    include_once("./config/process.php");

    // limpa a mensagem
    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Agenda de Contatos</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Link CSS-->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a href="<?=$BASE_URL?>index.php" class="navbar-brand"><img src="<?=$BASE_URL?>img/logo.svg" alt="Agenda"></a>
            <div>
                <div class="navbar-nav">
                    <a href="<?=$BASE_URL?>index.php" class="nav-link active" id="homelink">Agenda</a>
                    <a href="<?=$BASE_URL?>create.php" class="nav-link active" id="homelink">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>
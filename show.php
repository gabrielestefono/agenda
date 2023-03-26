<?php
    include_once("templates/header.php");
?>
<?php
    include_once("templates/header.php");
    include_once("templates/backbtn.php");
?>
<div class="container" id="view-contact-container">
    <h1 id="main-title"><?=$contact["name"]?></h1>
    <p class="bold">Telefone:</p>
    <p class="bold"><?=$contact["phone"]?></p>
    <p class="bold">Descrição:</p>
    <p class="bold"><?=$contact["observations"]?></p>
</div>
<?php
    include_once("templates/footer.php");
?>
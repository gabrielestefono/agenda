<?php
    include_once("templates/header.php");
    include_once("templates/backbtn.php");
?>
<div class="container">
    <h1 id="main-title">Criando um contato</h1>
    <form action="<?=$BASE_URL?>config/process.php" method="POST" id="create-form">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name"> Nome do Contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" required>
        </div>
        <div class="form-group">
            <label for="phone"> Telefone do Contato:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
        </div>
        <div class="form-group">
            <label for="observations"> Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows=3></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<?php
    include_once("templates/footer.php");
?>
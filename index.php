<?php require 'header.php' ?>
    <form action="veiculos.php" method="post">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo">
        <label for="ano">Ano</label>
        <input type="text" name="ano">
        <button>Enviar</button>
    </form>

<a class="btn btn-primary" href="veiculos.php">Ver tabela</a>

<?php require 'rodape.php' ?>
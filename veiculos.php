<?php require 'header.php' ?>

<?php

    $veiculos = [];

    require 'function.php';

    if (!empty($_POST['modelo']) && !empty($_POST['ano'])) {
        escrita();
    }

    $veiculos = mostrar();
?>

<table class="table">
    <thead>
        <th scope="col">Modelo</th>
        <th scope="col">Ano</th>
    </thead>
    <?php foreach($veiculos as $veiculo) : ?>
        <tr>
            <td><?= $veiculo[0] ?></td>
            <td><?= $veiculo[1] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require 'rodape.php' ?>
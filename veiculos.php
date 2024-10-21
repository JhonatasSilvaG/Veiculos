<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<?php
    require 'functions.php';

    if (!empty($_POST['modelo']) && !empty($_POST['ano'])) {
        insert('data');
    }

    $veiculos = select('data');
?>

<main class="offset-3 col-6 my-3" style="max-height: calc(100vh - 40px - 3rem); overflow-y: auto;">
    <table class="table table-striped table-hover">
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
</main>

<?php require 'partials/rodape.php' ?>
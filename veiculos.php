<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<?php
    require 'functions.php';

    if (!empty($_POST['modelo']) && !empty($_POST['ano'])) {
        insert('data');
    }

    $veiculos = select('data');
?>

<main class="row align-items-center my-4">
    <div class="col-12 col-md-6">
        <form method="post">
            <div class="d-flex flex-column gap-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
                    <label for="floatingInput">Modelo</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano">
                    <label for="ano">Ano</label>
                </div>

                <button type="submmit" class="col-4 offset-4 btn btn-outline-primary">Cadastrar</button>
            </div>
        </form>
    </div>


    <div class="col-12 col-md-6" style="max-height: calc(100vh - 40px - 3rem); overflow-y: auto;">
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
    </div>

</main>

<script src="script.js"></script>

<?php require 'partials/rodape.php' ?>
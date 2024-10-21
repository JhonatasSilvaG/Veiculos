<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<main class="row">
    <form action="veiculos.php" method="post">
        <div class="col-6 offset-3">
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
        </div>
    </form>
</main>

<?php require 'partials/rodape.php' ?>
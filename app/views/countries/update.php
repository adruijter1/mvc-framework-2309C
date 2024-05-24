<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="nameCountry" class="form-label">Naam land</label>
                    <input name="nameCountry" type="text" class="form-control" id="nameCountry" value="<?= $data['country']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nameCapitalCity" class="form-label">Hoofdstad</label>
                    <input type="text" class="form-control" id="nameCapitalCity">
                </div>
                <div class="mb-3">
                    <label for="nameContinent" class="form-label">Continent</label>
                    <input type="text" class="form-control" id="nameContinent">
                </div>
                <div class="mb-3">
                    <label for="population" class="form-label">Aantal Inwoners</label>
                    <input type="text" class="form-control" id="population">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary btn-lg" id="submit">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>


    










<?php require APPROOT . "/views/includes/footer.php"; ?>
<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>

            <form action="<?= URLROOT; ?>/countries/update/<?= $data['Id']; ?>" method="post">
                <div class="mb-3">
                    <label for="nameCountry" class="form-label">Naam land</label>
                    <input name="nameCountry" type="text" class="form-control" id="nameCountry" value="<?= $data['country']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nameCapitalCity" class="form-label">Hoofdstad</label>
                    <input name="nameCapitalCity" type="text" class="form-control" id="nameCapitalCity" value="<?= $data['capitalCity']; ?>">
                </div>
                <div class="mb-3">
                    <label for="nameContinent" class="form-label">Continent</label>
                    <input name="nameContinent" type="text" class="form-control" id="nameContinent" value="<?= $data['continent']; ?>">
                </div>
                <div class="mb-3">
                    <label for="population" class="form-label">Aantal Inwoners</label>
                    <input name="population" type="text" class="form-control" id="population" value="<?= $data['population']; ?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="countryId" value="<?= $data['Id']; ?>">
                    <input type="submit" class="btn btn-primary btn-lg" id="submit">
                </div>
            </form>
            <br>
            <a href="<?= URLROOT; ?>/Countries/index">Terug</a>
        </div>
        <div class="col-3"></div>
    </div>
</div>


    










<?php require APPROOT . "/views/includes/footer.php"; ?>
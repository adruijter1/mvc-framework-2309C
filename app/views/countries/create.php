<?php require_once 'C:/projects2023/MVC-Framework-2309C/app/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

    <form action="<?= URLROOT; ?>/countries/create" method="post">
        <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="mb-3">
            <label for="countryInput" class="form-label">Naam Land:</label>
            <input type="text" name="countryInput" class="form-control" id="countryInput" placeholder="Voer een landnaam in...">
            </div>
            <div class="mb-3">
            <label for="capitalCityInput" class="form-label">Hoofdstad:</label>
            <input type="text" name="capitalCityInput" class="form-control" id="capitalCityInput" placeholder="Voer de naam van de hoofdstad in...">
            </div>
            <div class="mb-3">
            <label for="continentInput" class="form-label">Continent:</label>
            <input type="text" name="continentInput" class="form-control" id="continentInput" placeholder="Voer de naam van het continent in...">
            </div>
            <div class="mb-3">
            <label for="populationInput" class="form-label">Aantal Inwoners:</label>
            <input type="number" name="continentInput" class="form-control" id="populationInput" placeholder="Voer het aantal inwoners in...">
            </div>

            <button type="submit" class="btn btn-primary">Verstuur</button>
        </div>
        <div class="col-3"></div>
        </div>
    </form>

    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-6">
            <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>
        </div>
        <div class="col-3"></div>
    </div>
</div>










<?php require_once 'C:/projects2023/MVC-Framework-2309C/app/views/includes/footer.php'; ?>

<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row div">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>

            <p><a href="<?=URLROOT; ?>/countries/create">Nieuw land toevoegen</a></p>

            <table class="table table-hover">
                <thead>
                    <th>Naam</th>
                    <th>Hoofdstad</th>
                    <th>Continent</th>
                    <th>Aantal Inwoners</th>
                    <th>Update</th>
                </thead>
                <tbody>
                    <?= $data['dataRows']; ?>
                </tbody>
            </table>

            <br>
            <a href="<?= URLROOT; ?>/Homepages/index">Homepage</a>


        </div>
        <div class="col-3"></div>
    </div>

</div>


<?php require APPROOT . '/views/includes/footer.php'; ?>


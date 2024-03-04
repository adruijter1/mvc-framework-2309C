<?php require APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<p><a href="<?=URLROOT; ?>/countries/create">Nieuw land toevoegen</a></p>

<table class="table table-hover">
    <thead>
        <th>Naam</th>
        <th>Hoofdstad</th>
        <th>Continent</th>
        <th>Aantal Inwoners</th>
    </thead>
    <tbody>
        <?= $data['dataRows']; ?>
    </tbody>
</table>

<br>
<a href="<?= URLROOT; ?>/Homepages/index">Homepage</a>

<?php require APPROOT . '/views/includes/footer.php'; ?>


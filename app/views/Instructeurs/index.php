<?php require APPROOT . '/views/includes/header.php'; ?>

<?php
echo "Hallo " . $data['firstname'] . " " . $data['infix'] . " " . $data['lastname'];

?>

<form action="<?= URLROOT . '/Instructeurs/index'; ?>" method="post">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Voornaam</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name=firstname>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tussenvoegsel</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name=infix>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Achternaam</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name=lastname>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require APPROOT . '/views/includes/footer.php'; ?>


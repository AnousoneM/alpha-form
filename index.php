<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container bg-light mt-5 p-3">
        <h1>Formulaire de la mort</h1>
        <?php if (!empty($_POST) && count($error) < 1) { ?>
            <p>Vous avez bien été enregistré !</p>
            <p>NOM : <?= htmlspecialchars($_POST['lastname']) ?></p>
            <p>Prénom : <?= htmlspecialchars($_POST['firstname']) ?></p>
        <?php } else { ?>
            <form action="" method="POST" novalidate>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="ex. NOM" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['lastname']) ? $error['lastname'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="ex. Prénom" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>"required>
                    <span class="text-danger"><?= isset($error['firstname']) ? $error['firstname'] : '' ?></span>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        <?php } ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
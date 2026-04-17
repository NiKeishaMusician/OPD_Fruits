<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Izveidot augli</h1>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Augļu saraksts</title>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>
<body>
    </body>
</html>
<form method="POST">
<label> <input name="content" value='<?= $_POST["name"]  ?? ""?>'/></label>
<button>Izveidot</button>
<?php if (isset($errors) == true) { ?>
    <p>❌ <?= $errors["name"] ?> 🥭</p>
    <?php }?>
</form>
<?php require "views/components/footer.php"; ?>
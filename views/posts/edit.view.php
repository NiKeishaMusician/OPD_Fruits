<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Rediģēt augli</h1>
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

    <input type="hidden" name="id" value="<?= $fruit['id'] ?>">
           <label>Augļa nosaukums:
                  <input type="text" name="name" value="<?= htmlspecialchars($fruit['name'] ?? $fruit['name'] ) ?>">
           </label>
    <button>Saglabāt izmaiņas</button>
    <?php if (!empty($errors['name'])) : ?>
        <p><?= $errors['name'] ?></p>
    <?php endif; ?>
</form>
<?php require "views/components/footer.php"; ?>
<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1><?= htmlspecialchars($fruit["name"]) ?></h1>
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
<li><a href="/edit?id=<?= $fruit["id"] ?>">Rediģēt augli</a> </li>
<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($fruit['id']) ?>">
    <button type="submit">Dzēst augli</button>
</form>
<?php require "views/components/footer.php"; ?>
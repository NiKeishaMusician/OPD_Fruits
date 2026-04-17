<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Visi augļi</h1>

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

<form>
    <input type="text" name="search" placeholder="Meklē" value="<?= $_GET['search'] ?? '' ?>">
    <button>Meklēt</button>
</form>

<ul>
    <?php foreach ($fruits as $fruit) { ?>
        <li>
            <a href="/show?id=<?= $fruit['id'] ?>"><?= htmlspecialchars($fruit['name']) ?> </a>
        </li>
    <?php } ?>
</ul>
<?php require "views/components/footer.php"; ?>
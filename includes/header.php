<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>
<body>
    <header>
        <nav style="background-color : blue">
            <h1 style="color:#FFF"><?= $h1 ?></h1>
            <ul style="display :flex;">
                <li style="margin-right: 30px; color:#FFF ; list-style :none;"><a style="color:red" href="<?= 'index.php' ?>">Acceuil</a></li>
                <li style="margin-right: 30px; color:#FFF ; list-style :none;"><a style="color:red" href="<?= 'articles.php' ?>">Articles</a></li>
                <li style="margin-right: 30px; color:#FFF ; list-style :none;">Article</li>
                <li style="margin-right: 30px; color:#FFF ; list-style :none;">Inscription</li>
                <li style="margin-right: 30px; color:#FFF ; list-style :none;">Connexion</li>
            </ul>
        </nav>
    </header>
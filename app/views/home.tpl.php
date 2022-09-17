<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/style.css">
    <title>Sonic</title>
</head>
<body>
    <nav>
        <a href="<?= $router->generate('home') ?>">Home</a>
        <a href="<?= $router->generate('creator') ?>">Creator</a>
    </nav>
    <h1>Voici ci-dessous, la liste des personnages avec leur image, leur nom, leur type ainsi que leur description</h1>
    <table>
        <thead>
            <tr>
                <td>Image</td>
                <td>Nom</td>
                <td>Type</td>
                <td>Description</td>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($viewData as $character) {
        ?>
        <tr>
            <td><img width="80px" height="auto" src="<?= $absoluteURL . '/../docs/images/' . $character->getPicture(); ?>" alt="Picture of the character"></td>
            <td><?= $character->getName(); ?></td>
            <td><?= $character->getType_id(); ?></td>
            <td><?= $character->getDescription(); ?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>
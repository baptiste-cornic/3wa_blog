<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <title>3wa Blog create category</title>
</head>
<body>
    <header>
        <?php include_once('templates/headerView.php') ?>
    </header>
    <main>
        <h2>Création d'une catégorie</h2>
        <form method="POST">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title">
            <label for="color">Couleur</label>
            <textarea name="color" id="color"></textarea>
            <input type="submit">
        </form>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <title>3wa Blog create user</title>
</head>
<body>
    <header>
        <?php include_once('templates/headerView.php') ?>
    </header>
    <main>
        <h2>Création d'un utilisateur</h2>
        <form id="subscribe_form" method="POST">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <input type="submit">
        </form>
    </main>
</body>
</html>
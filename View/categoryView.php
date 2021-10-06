<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <title>3wa Blog Catégorie</title>
</head>
<body>
    <header>
        <?php include_once('templates/headerView.php') ?>
    </header>
    <main>
        <h2>3wa blog - catégorie</h2>
        <div class="category">
            <?php                
                echo '<div>
                        <h3>'.$category->getTitle().'</h3>
                        <p>'.$category->getColor().'</p>
                        <p><em>Crée le : '.$category->getCreatedAt()->format('y-m-d').'</em></p>
                        <p> Etat : '.$category->getStatus().'</p>
                    </div>';
            ?>
        </div>
    </main>
    
</body>
</html>
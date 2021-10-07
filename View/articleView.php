<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <title>3wa Blog Articles</title>
</head>
<body>
    <header>
        <?php include_once('templates/headerView.php') ?>
    </header>
    <main>
        <h2>3wa blog - articles</h2>
        <div class="content">
            <?php                
                echo '<div>
                        <h3>'.$article->getTitle().'</h3>
                        <p>'.$article->getContent().'</p>
                        <p><em>Crée le : '.$article->getCreatedAt()->format('y-m-d').'</em></p>
                        <p> Etat : '.$article->getStatus().'</p>
                        <p>Note : '.$articleScore.'</p>
                    </div>';
            ?>
        </div>
    </main>
    
</body>
</html>
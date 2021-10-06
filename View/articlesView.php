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
                foreach($articles as $article)
                {   echo '<div>
                            <h3><a href="article.php?id='.$article->getId().'">'.$article->getTitle().'</a></h3>
                            <p>'.$article->getContent().'</p>
                        </div>';
                }
            ?>
        </div>
        
    </main>
    
</body>
</html>
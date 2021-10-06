<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <title>3wa Blog</title>
</head>
<body>
    <header>
        <?php include_once('templates/headerView.php') ?>
    </header>
    <main>
        <h2>3wa blog - index</h2>
        <section>
            <div class="articles_index">
                <?php
                    foreach($articles as $article)
                    {
                        echo '<div>
                                <h3>'.$article->getTitle().'</h3>
                                <p>'.$article->getContent().'</p>
                                <p class="delete"><a href="delete.php?id='.$article->getId().'">Delete</a></p>
                            </div>';
                    }
                ?>
            </div>
            <div class="category">
                <?php
                    foreach($categories as $category)
                    {
                        echo '<div>
                                <h3>'.$category->getTitle().'</h3>
                                <p>'.$category->getColor().'</p>
                                <p class="delete"><a href="delete-category.php?id='.$category->getId().'">Delete</a></p>
                            </div>';
                    }
                ?>
            </div>
        </section>
    </main>
</body>
</html>
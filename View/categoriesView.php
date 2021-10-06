<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <title>3wa Blog Categories</title>
</head>
<body>
    <header>
        <?php include_once('templates/headerView.php') ?>
    </header>
    <main>
        <h2>3wa blog - categories</h2>
        <div class="category">
            <?php
                foreach($categories as $category)
                {   echo '<div>
                            <h3><a href="category.php?id='.$category->getId().'">'.$category->getTitle().'</a></h3>
                            <p>'.$category->getColor().'</p>
                        </div>';
                }
            ?>
        </div>
        
    </main>
    
</body>
</html>
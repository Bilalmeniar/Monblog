<?php 
require_once __DIR__ . '/index.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        .grille-articles {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .carte-article {
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        .etiquette-categorie {
            color: blue;
        }
    </style>
</head>

<body>

    <h1>Mon Blog</h1>

    <div class="grille-articles">

        <?php foreach($articles as $article): ?>

            <div class="carte-article">
                <img src="images/<?= htmlspecialchars($article['image']) ?>" alt="illustration">
                <span class="etiquette-categorie">
                    <?= htmlspecialchars($article['categorie_libelle']) ?>
                </span>
            <h2><?= htmlspecialchars($article['titre'])?></h2>
            <p><?= htmlspecialchars($article['contenu'])?></p>
            <div class="carte-meta">
                <?= date('d M Y', strtotime($article['date_creation'])) ?><br>
                <span>5 min</span>

            </div>
            </div>

            <?php endforeach; ?>

    </div>
    
</body>
</html>

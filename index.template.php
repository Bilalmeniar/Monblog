<?php 
require_once __DIR__ . '/index.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="css/components.css">
</head>

<body>

    <h1>Mon Blog</h1>

    <div class="grille-articles">

        <?php foreach($articles as $article): ?>

            <div class="carte-article">

                <img src="images/<?= htmlspecialchars($article['image']) ?>" alt="illustration">

                <span class="etiquette-categorie <?php if($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
                    <?= htmlspecialchars($article['categorie_libelle']) ?>
                </span>

                <?php if($article['id'] == 1): ?>
                    <small class="badge-special">⭐ À la une</small>
                <?php endif; ?>

                <h2><?= htmlspecialchars($article['titre']) ?></h2>

                <p><?= htmlspecialchars($article['contenu']) ?></p>

                <div class="carte-meta">
                    <?= date('d M Y', strtotime($article['date_creation'])) ?><br>
                    <span>5 min</span>
                </div>

            </div>

        <?php endforeach; ?>

    </div>

</body>
</html>


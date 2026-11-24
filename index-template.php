
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">

    <h1>Bienvenue sur mon Portfolio</h1>
    <nav>
        <a href="#accueil">Accueil</a>
        <a href="#projets">Projets</a>
        <a href="#contact">Contact</a>
    </nav>
    </header>
    <main>
        <section id="accueil" class="hero">

            <h2>Bonjours, je suis développeur web</h2>
            <p>je crée des sites web modernes et simples</p>

        </section>
         <section id="projets" class="projets">

         <h2>Mes projets</h2>

         <div class="grille-projets">

    <?php foreach($projets as $projet): ?>

        <div class="projet">
        <h3><?= htmlspecialchars($projet['titre']) ?></h3>
        <p><?= htmlspecialchars($projet['description']) ?></p>
        <span class="technologies"><?= htmlspecialchars($projet['technologies']) ?> </span>
        <?php if($projet['technologies'] === 'HTML, CSS, PHP'): ?>
            <p>
                full stuck
            </p>
            <?php else: ?>
            <p>
                not full stuck
            </p>
            
            <?php endif; ?>
        </div>    
        <?php endforeach; ?>
   
   
    </div>
    
    </section>

    <section id="contact" class="contact">
        <h2>contact</h2>
        <p>contactez moi pour discuter de vos projets</p>
    </section>
    <footer class="footer">
        <p>&copy; 2026 Mon portfolio, tous droits réservés</p>
    </footer>
    </main>

</body>
</html>

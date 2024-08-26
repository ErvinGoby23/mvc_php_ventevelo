
<h1>Page d'accueil</h1>

<h2>Le plus récent modèle de bicyclette disponible actuellement</h2>
<p>Nom: <?= $lastVelo['nom'] ?? 'Aucun vélo trouvé'; ?></p>
<p>Description: <?= $lastVelo['description'] ?? ''; ?></p>


<?php if (isset($lastVelo['image'])): ?>
    <img src="<?= $lastVelo['image']; ?>" alt="<?= $lastVelo['nom'] ?? 'Image du dernier vélo ajouté'; ?>">
<?php endif; ?>


<h1>Informations sur le/des Vélo(s)</h1>

<?php foreach ($selectedVelos as $selectedVelo) : ?>
    <div>
        <p>Nom: <?= $selectedVelo['nom'] ?? 'Non disponible'; ?></p>
        <p>Description: <?= $selectedVelo['description'] ?? 'Non disponible'; ?></p>
        <p>Prix: <?= $selectedVelo['prix'] ?? 'Non disponible'; ?></p>
        <img src="<?= $selectedVelo['image'] ?? 'chemin/par/defaut.jpg'; ?>" alt="Image du vélo">
        <a href="?page=commander&velo=<?= $selectedVelo['id']; ?>">Commander</a>
    </div>
<?php endforeach; ?>

<h1>Nos Vélos</h1>

<?php
foreach ($velo as $velo) {
    echo "<div class='velo-card'>";
        echo "<img src='".$velo["image"]."' alt='".$velo["nom"]."' class='velo-image'>";
        echo "<div class='velo-content'>";
            echo "<h2>".$velo["nom"]."</h2>";
            echo "<p>".$velo["description"]."</p>";
            echo "<p class='price'>Prix : ".$velo["prix"]."</p>";
            echo "<div class='velo-actions'>";
                echo "<a href='?page=commander' class='btn commander-btn'>Commander</a>";
                echo "<a href='?page=information&velo=" . $velo['id'] . "' class='btn info-btn'>Plus d'info</a>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
}
?>

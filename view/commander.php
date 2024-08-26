
<h1>Commander le vélo</h1>

<form action="?page=commander" method="post">

    <label for="id_velos">Choisir un Vélo :</label>
    <select name="id_velos" id="id_velos">
        <?php
        foreach ($velos as $velo) {
            echo "<option value=" . $velo["id"] . ">" . $velo["nom"] . "</option>";
        }
        ?>
    </select>
    <br>

    <label for="nom">Nom : *</label>
    <input type="text" id="nom" name="nom" required>
    <br>

    <label for="prenom">Prénom : *</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>

    <label for="email">Email : *</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="message">Message : *</label>
    <textarea id="message" name="message" required></textarea>
    <br>

    <button type="submit" name="submit">Commander</button>
</form>

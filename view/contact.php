<h1>Contact</h1>
<form action="index.php?page=contact" method="post">
        <label for="nom">Nom : *</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom : *</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email : *</label>
        <input type="email" name="email" required><br>

        <label for="message">Message : *</label>
        <textarea name="message" required></textarea><br>

        <input type="submit" value="Envoyer">
    </form>
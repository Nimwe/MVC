<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/mvc/petitmvc/index.php?execution=inscription/creer" method="POST">
        
        <select name="id_etudiant">
        <option>--selectionner etudiant--</option>
        <?php foreach($etudiants as $et){ ?>
                <option value="<?= $et['id'] ?>" > <?= $et['nom'] ?> <?= $et['prenom'] ?></option>
       <?php } ?>
        </select>
<br>
        <select name="id_professeur">
            <option>--selectionner prof--</option>
        <?php foreach($professeurs as $prof){ ?>
                <option value="<?= $prof['id'] ?>" > <?= $prof['nom'] ?> <?= $prof['prenom'] ?> 
                <?= $prof['specialite'] ?></option>
       <?php } ?>
        </select>
<br>
        <input type="submit" value="Créer" ><br>
        
    </form>

</body>
</html>
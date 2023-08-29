<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="http://localhost/mvc/petitmvc/index.php?execution=professeur/modifier" method="POST">
        <input type="text" name="nom" placeholder="nom" value = <?= $lprof['nom'] ?> ><br>
        <input type="text" name="prenom" placeholder="prenom" value = <?= $lprof['prenom'] ?>><br>
        <input type="hidden" name="id" value = <?= $lprof['id'] ?>>
        <input type="submit" value="Modifier" ><br>
        <input type="delete" value="Delete" >
    </form>
</body>
</html>
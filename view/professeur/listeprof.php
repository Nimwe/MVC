<html>
<head>
</head>
<body>
<h1> Voici la liste des professeurs</h1>

<?php
foreach($professeur as $et) { ?>
<h1><?= $et['nom'] ?> <?= $et['prenom'] ?> <button>liste</button></h1>
<?php } ?>

</body>
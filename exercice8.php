<!DOCTYPE html>
<html>
<head>
  <title>Vérifier nombre pair ou impair</title>
</head>

<body>

<form method="GET">
  Entrez un nombre : <input type="text" name="nb">
  <input type="submit" value="Valider">
</form>

<?php
//isset tchoof el variable nul welle wela $_get tjibli el contenu mt3 elii mawjood fil formualire
if(isset($_GET['nb'])) {
  $nb = $_GET['nb'];

  if($nb % 2 == 0) {
    echo "<p>Le nombre $nb est pair</p>";
  }
  else {
    echo "<p>Le nombre $nb est impair</p>";
  }
}
?>

</body>
</html>
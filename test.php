
<?php
$A=1 ; //int
$B=1.0 ; //float
$etat=true ; //boolean
$classe="l2dsi2" ; //string
var_dump($B) ;
// echo '<h1>hello world ' . $classe.'</h1>';

// echo "<h1>hello world $classe</h1>";
// echo $A .'<br>'. $B;

echo"<script>
alert('bonjur  $classe') </script>";
?>
<html lang="en">
<head>
</head>
<body>
   <script>alert ('bonjour <?= $classe?>') </script>
</body>
</html>
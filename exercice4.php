<?php
$Nom="rahma" ;
$pre="othmani" ;
echo $Nom ." ".$pre ;
echo "<br>" ;
echo $Nom ;
echo "<br>" ;
echo $pre ;
echo "<br>" ;
$info=$Nom ." ".$pre ;
echo "<script> alert( $(info)) </script>" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        <table border="1">
            <tr>
                <td>nom</td>
                <td><?=$Nom?></td>
            </tr>
            <tr>
                <td>prenom</td>
                <td><?=$pre?></td>
                
            </tr>
        </table>
        <script>
          //  alert('dg') ;
</script>
       
</body>
</html>
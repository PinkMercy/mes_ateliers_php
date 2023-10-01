<?php
$num=0; 
$num2=0;
$resultat=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://exercice6.php/" method="post">
        
        <input type="text" id="num" >+<input type="text" id="num2" >
        <input type="button" value="calculer" id="res"><br>
         <label> Le résultat est :</label>
        
        <script>
            selecte1 = document.forms[0].elements[2]
            console.log(selecte1.textContent);
                selecte1.addEventListener("click", bluur)
                function bluur()
            {
                console.log(selecte1);
                var num = document.getElementById("num").value;
                console.log(num);
                var num2 = document.getElementById("num2").value;
                console.log(num2);
                //var resultat = document.getElementById("resultat").value;
                resultat = parseInt(num) + parseInt(num2);
                console.log(resultat);
               
            }
           
        </script> 
        <?$resultat=$_POST['resultat'];?>
    </form>
</body>
</html>
<?php
echo $resultat;
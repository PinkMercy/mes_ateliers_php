<?php
$j=rand(1,7);
//echo("lundi");

/*if($j==1)
{
    echo("lundi");
}

else if($j==2)
{
    echo("mardi");
}

else if($j==2)
{
    echo("jeudi");
}

else if($j==2)
{
    echo("vendredi");
}

else if($j==2)
{
    echo("mardi");
}

else if($j==2)
{
    echo("samedi");
}

else if($j==2)
{
    echo("dimanche");
}
*/
switch($j)
{
    case 1 :    echo("lundi");
    break;
    case 2 :    echo("mardi");
    break;
    case 3 :    echo("mercredi");
    break;
    case 4 :    echo("jeudi");
    break;
    case 5 :    echo("vndredi");
    break;
    case 6 :    echo("samedi");
    break;
    case 7 :    echo("dimanche");
    break;
}
echo("<br>") ;

switch($j)
{
    case 1 : 
    case 2 :  
    case 3 :  echo("inferieur");
    break ; 
    case 4 :  echo("egale") ;
    break ;
    default : echo("superieur") ;
    
}
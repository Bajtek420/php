<form method="Get">
<input name="kwota"></input>
<input name="podatek"></input>
<input type ="submit" name="dod"value="policz"></input>
</form>

<?php
if(isset($_GET['dod']))
{
    $Licz1=  $_GET['kwota'];
    $Licz2=  $_GET['podatek']; 
    $podatek= $Licz1*$Licz2/100;
    $wynik= "$Licz1" - "$podatek";
    echo "zaplacisz $podatek podatku, więc z $Licz1 otrzymasz $wynik";
}

?>


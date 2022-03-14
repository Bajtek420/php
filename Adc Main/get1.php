<form method ="Get">
<input name="kwota"></input>
<input name="podatek"></input>
<input type ="submit" name="dod"value="dodaj"></input>
</form>
<form method ="Get">
<input name="kwota"></input>
<input name="podatek"></input>
<input type ="submit" name="odejm"value="odejmij"></input>
</form>
<form method ="Get">
<input name="kwota"></input>
<input name="podatek"></input>
<input type ="submit" name="razy"value="razy"></input>
</form>
<form method ="Get">
<input name="kwota"></input>
<input name="podatek"></input>
<input type ="submit" name="podziel"value="podziel"></input>
</form>

<?php
if(isset($_GET['dod']))
{
    $Licz1=  $_GET['kwota'];
    $Licz2=  $_GET['podatek']; 
    echo $Licz1+$Licz2;
}
if(isset($_GET['odejm']))
{
    $Licz1=  $_GET['kwota'];
    $Licz2=  $_GET['podatek']; 
    echo $Licz1-$Licz2;
}
if(isset($_GET['razy']))
{
    $Licz1=  $_GET['kwota'];
    $Licz2=  $_GET['podatek']; 
    echo $Licz1*$Licz2;
}
if(isset($_GET['podziel']))
{
    $Licz1=  $_GET['kwota'];
    $Licz2=  $_GET['podatek']; 
    echo $Licz1/$Licz2;
}

?>

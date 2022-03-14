<form method ="Get">
<input name="Liczba1"></input>
<input name="Liczba2"></input>
<input type ="submit" name="XD"></input>
</form>

<?php
if(isset($_GET['XD']))
{
    $Licz1=  $_GET['Liczba1']; 
    echo $Licz1;
}


?>


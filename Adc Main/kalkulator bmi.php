<form method="Get">
<input name="waga"></input>
Podaj swoją wagę<br>
<input name="wzrost"></input>
Podaj swój wzrost w centymetrach<br>
<input type ="submit" name="oblicz"value="oblicz"></input>
</form>

<?php
    if(isset($_GET['oblicz BMI']))
    {
        $Licz1=  $_GET['waga'];
        $Licz2=  $_GET['wzrost']; 
        $BMI= $Licz1/$Licz2*($Licz2^2);
        $Wynik= (int)$BMI;
        echo "Twoje BMI wynosi $Wynik";
    
    if ($Wynik >=1){
        echo "Masz niedowagę";
    }
    if ($Wynik <18){
        echo "Masz niedowagę";
        }
    if ($Wynik >18){
        echo "Normalne BMI";
    }
    if ($Wynik <25){
        echo "Normalne BMI";
    }
    if ($Wynik >25){
        echo "Masz nadwagę";
    }
    if ($Wynik <30){
        echo "Masz nadwagę";
    }
    if ($Wynik >29){
        echo "To już otyłość mordo";
    }
    if ($Wynik <40){
        echo "To już otyłość mordo";
    }
    if ($Wynik >40){
        echo "Taka giga otyłość";
    }
    if ($Wynik <999){
        echo "Taka giga otyłość";
    }
}
?>

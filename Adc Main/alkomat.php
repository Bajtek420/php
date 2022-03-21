<form method="Get">
<input name="Liczba1"></input>
Podaj ile wypiłeś w gramach<br>
<input name="Liczba2"></input>
Wpisz wage<br>
<input type ="submit" name="jd"></input>
</form>
<?php
    if (isset($_GET["jd"]))
    {
        $liczba1 = $_GET['Liczba1'];
        $liczba2 = $_GET['Liczba2'];

        $wynik = $liczba1 / (0.65 * $liczba2);
        
        echo "tyle masz alkoholu w krwi : $wynik";
    }
?>
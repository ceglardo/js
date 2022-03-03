<?php
echo "Mnozenie: <br>"; 
    
    $wynik_mnozenia1= $_POST['liczba1']*$_POST['liczba5'];
    $wynik_mnozenia2= $_POST['liczba2']*$_POST['liczba6'];
    $wynik_mnozenia3= $_POST['liczba3']*$_POST['liczba7'];
    $wynik_mnozenia4= $_POST['liczba4']*$_POST['liczba8'];

    echo "Wyniki mnozenia: <br>";

 echo $wynik_mnozenia1." ".$wynik_mnozenia2." ".$wynik_mnozenia3." ".$wynik_mnozenia4."<br>"; 

 $wynik_dodawania1= $_POST['liczba1']+$_POST['liczba5'];
 $wynik_dodawania2= $_POST['liczba2']+$_POST['liczba6'];
 $wynik_dodawania3= $_POST['liczba3']+$_POST['liczba7'];
 $wynik_dodawania4= $_POST['liczba4']+$_POST['liczba8'];

 echo "Wyniki dodawania: <br>";

 echo $wynik_dodawania1." ".$wynik_dodawania2." ".$wynik_dodawania3." ".$wynik_dodawania4."<br>"; 

 $wynik_odejmowania1= $_POST['liczba1']-$_POST['liczba5'];
 $wynik_odejmowania2= $_POST['liczba2']-$_POST['liczba6'];
 $wynik_odejmowania3= $_POST['liczba3']-$_POST['liczba7'];
 $wynik_odejmowania4= $_POST['liczba4']-$_POST['liczba8'];

 echo "Wyniki odejmowania: <br>";

 echo $wynik_odejmowania1." ".$wynik_odejmowania2." ".$wynik_odejmowania3." ".$wynik_odejmowania4."<br>"; 






?>
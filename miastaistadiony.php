<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miasta i Stadiony</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="strona_1">
        <div class="naglowek">
            <h1>Mistrzostwa Świata w Piłce Nożnej 2022 w Katarze</h1>
        </div>
        <div class="odnosniki">
            <a href="index.html"><img class="home" src="home.jpeg" alt=""></a>
            <a class="linki" href="miastaistadiony.php">Miasta i Stadiony</a>
            <a class="linki" href="sedziowie.php">Sędziowie</a>
            <a class="linki" href="fazagrupowa.php">Faza Grupowa</a>
            <a class="linki" href="dodaj_usun.php">Dodaj lub usuń</a>
        </div>
        <div class="srodek_1">
        <br> 
            <table>
                <tr>
                    <td class="pogrubienie">Miasto</td>
                    <td class="pogrubienie">Stadion</td>
                    <td class="pogrubienie">Pojemność</td>
                    <td class="pogrubienie">Mecze</td>
                    <td class="pogrubienie">Pierwszy mecz</td>
                    <td class="pogrubienie">Ostatni mecz</td>
                </tr>
            <?php funkcja() ?>
            </table>
        </div>
</div>
</body>
</html>
<?php
    function funkcja(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `miastaistadiony` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
?>
<style>
   td {
        padding: 20px;
        text-aligin: center;
       
    }
</style>
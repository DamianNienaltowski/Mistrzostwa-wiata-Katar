
<?php
funkcja();
function funkcja(){
    if(isset($_POST["nazwa_druzyny"]) && $_POST["nazwa_druzyny"] !="" && ($_POST["nazwa_grupy"]) && $_POST["nazwa_grupy"] !=""){
            $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
            $druzyna = $_POST["nazwa_druzyny"];
            $grupa = $_POST["nazwa_grupy"];

            $zapytanie = "DELETE FROM $grupa WHERE `zespol` = '$druzyna' ";
            $odpowiedz = mysqli_query($polaczenie , $zapytanie);
            if($odpowiedz) echo "Usunieto druzyne";
            else echo "Nie udalo sie usunac druzyny";
            mysqli_close($polaczenie);

        }
        else
        echo " Wypelnij wszystkie pola";     


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<br>
<br> <br> <br> <br>
<a class="linki" href="dodaj_usun.php">Powrót do strony</a> 

</html>

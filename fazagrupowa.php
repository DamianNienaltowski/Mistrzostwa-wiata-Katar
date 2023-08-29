<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miasta i Stadiony</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="strona_2">
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
                    <td class="pogrubienie">GRUPA A</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_a() ?>
            </table>
            <br>
            <table>
                
                <tr>
                    <td class="pogrubienie">GRUPA B</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_b() ?>
            </table>
            <br>
            <table>
                
                <tr>
                    <td class="pogrubienie">GRUPA C</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_c() ?>
            </table>
            <br>
            <table>
                
                <tr>
                    <td class="pogrubienie">GRUPA D</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_d() ?>
            </table>
            <br>
            <table>
                
                <tr>
                    <td class="pogrubienie">GRUPA E</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_e() ?>
            </table>
            <br>
            <table>
                
                <tr>
                    <td class="pogrubienie">GRUPA F</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_f() ?>
            </table>
            <br>
            <table>
                
                <tr>
                    <td class="pogrubienie">GRUPA G</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_g() ?>
            </table>
            <br>
            <table>
                
                <tr>
                    <td class="pogrubienie">GRUPA H</td>
                    <td class="pogrubienie">Pkt</td>
                    <td class="pogrubienie">Liczba Meczy</td>
                    <td class="pogrubienie">Wygrane</td>
                    <td class="pogrubienie">Remisy</td>
                    <td class="pogrubienie">Porażki</td>
                    <td class="pogrubienie">Bramki zdobyte</td>
                    <td class="pogrubienie">Bramki stracone</td>
                    <td class="pogrubienie">Bilans bramek</td>
                </tr>
            <?php grupa_h() ?>
            </table>
        </div>
</div>
</body>
</html>
<?php
    function grupa_a(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_a` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
    function grupa_b(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_b` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
    function grupa_c(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_c` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
    function grupa_d(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_d` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
    function grupa_e(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_e` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
    function grupa_f(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_f` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
    function grupa_g(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_g` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

            </tr>";
        }
        mysqli_close($polaczenie);
    
    }
    function grupa_h(){
        $polaczenie = mysqli_connect("localhost","root","","ms_katar");
            if(!$polaczenie){
                echo "BRAK POŁĄCZENIA Z BAZĄ";
                return;
            }
        
        $zapytanie =" SELECT * FROM `grupa_h` ";
        
        $odpowiedz = mysqli_query($polaczenie , $zapytanie);
        while($wiersz = mysqli_fetch_row($odpowiedz)){
            echo " 
            <tr>
            <td>$wiersz[0]</td>
            <td>$wiersz[1]</td>
            <td>$wiersz[2]</td>
            <td>$wiersz[3]</td>
            <td>$wiersz[4]</td>
            <td>$wiersz[5]</td>
            <td>$wiersz[6]</td>
            <td>$wiersz[7]</td>
            <td>$wiersz[8]</td>
            
            

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
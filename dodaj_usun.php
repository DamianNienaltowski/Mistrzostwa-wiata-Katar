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
        <div class="">
        <br> 
        <form action="dodaj.php" method="POST">
            <h3>Dodaj nową drużyne do grupy</h3>
            Nazwa Drużyny
            <input type="text" name="nazwa_druzyny"> <br>
            Wpisz nazwe grupy do której ma być dodana drużyna (Grupa A - Grupa H) 
            <input type="text" name="nazwa_grupy"> <br>
            <input type="submit" value="Dodaj">
            </form>
            
        <form action="usun.php" method="POST">
            <h3>Usun aktualną drużyne z grupy</h3>
            Nazwa drużyny 
            <input type="text" name="nazwa_druzyny"> <br>
            Wpisz nazwę grupy z której ma być usunięta drużyna (Grupa A - Grupa H)
            <input type="text" name="nazwa_grupy"> <br>
            <input type="submit" value="Usuń">
            </form>
        
            
        </div>
</div>
</body>
</html>


   


        
        
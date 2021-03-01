<?php include_once("polaczenie2.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połacznie</title>
</head>
<body>
    <div>
    <table> 
    <tr><td>ids</td><td>Marki</td><td>Silnik</td></tr>
    <?php
    $zapytanie_do_bazy = $polaczenie2->query("SELECT ids, marka_samochodu, silnik FROM samochody")
    (while ($wiersz = $zapytanie_do_bazy->fetch_assoc()){
        echo $wiersz['ids']." ".$wiersz['marka_samochodu']." "$wiersz['silnik']."<br>";
    }
    ?>
    </table>
    </div>

<div>
    <table>
    <tr><td>idk</td><td>Marki</td><td>Nazwa</td></tr>
    <?php
    $zapytanie_do_bazy = $polaczenie->query("SELECT idk, marka_komputerowa, nazwa FROM komputery");
    while(list($idk, $marka_komputerowa, $nazwa) = mysqli_fetch_array($zapytanie_do_bazy)){
        echo("
        <tr><td>$idk</td><td>$marka_komputerowa</td><td>$nazwa</td></tr>
        ");
    }
        </table>
    </div>
    
</body>
</html>
<?php $polaczenie->close();?>
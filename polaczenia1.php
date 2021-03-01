<?php
/**
 * Połączenie do bazy danych Mysql za pomocą klasy Mysqli
 * Tworze nowy obiekt $polaczenie za pomocą konstruktora new Mysqli
 */
$host = "localhost";//ip, nazwe domową lub lokalnie na komp: localhost
$username = "root";//Nazwa użytkownika z uprawnieniami do bazy danych
$password = "";//Hasło dostepu do bazy danych
$dbname = "paulinawilczynska";//Nazwa bazy danych
$port = 3306;//Obcjonalnie port

//Tworzą nowe połączenie w mysql, znak at(@) ukrywa komunikaty czyli errory
$polaczenie = @new Mysqli($host, $username, $password, $dbname, $port);

if (mysqli_connect_errno()!=0) {
    echo("Bład połączenia do bazy danych ".mysqli_connect_error());
}else{
    echo("Połączono do bazy danych");
}
?>
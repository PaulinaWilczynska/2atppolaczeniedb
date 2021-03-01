<?php
$host = "localhost";
$username = "PaulinaW";
$password = "123";
$dbname = "warsztaty";
$port = 3306;

$polaczenie2 = @new Mysqli($host, $username, $password, $dbname, $port);

if (mysqli_connect_errno()!=0) {
    echo("Bład połączenia do bazy danych ".mysqli_connect_error());
}else{
    echo("Połączono do bazy danych");
}
?>
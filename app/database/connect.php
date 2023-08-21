<?php
    $host = "localhost";
    $username = "developer";
    $password = "1qazxsw2#EDC";
    $database = "jaspacms";

    $dbConnection = new MySQLi($host, $username, $password, $database);

    if ($dbConnection->connect_error) {
        die('Database Error: ' . $dbConnection->connect_error);
    }else{
        echo ('Connection Successful');
    }

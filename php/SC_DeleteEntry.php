<?php

if (isset($_GET['a'])) $string_a = htmlentities($_GET['a']);
if (isset($_GET['b'])) $string_b = htmlentities($_GET['b']);
if (isset($_GET['c'])) $string_c = htmlentities($_GET['c']);

$a = (String)$string_a;
$b = (String)$string_b;
$c = (String)$string_c;

$db_host = "localhost";      // Имя сервера
$db_user = "cc33953_server"; // Имя пользователя
$db_password = "69911201";   // Пароль
$db_name = "cc33953_server"; // 
$charset = 'utf8';           // 

// Соединение с БД
$link = mysqli_connect($db_host,$db_user,$db_password,$db_name); 

// Соединение с PDO
$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $db_user, $db_password, $opt);

// Проверка соединения с БД
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL   " . mysqli_connect_error());
}

if ($link == true)
{
    if ($c == "client") 
    {
      $query ="DELETE FROM client WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "delivery_for_repairs") 
    {
      $query ="DELETE FROM delivery_for_repairs WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "detail") 
    {
      $query ="DELETE FROM detail WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "details_service_center") 
    {
      $query ="DELETE FROM details_service_center WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "details_used_work") 
    {
      $query ="DELETE FROM details_used_work WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "device") 
    {
      $query ="DELETE FROM device WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "device_type") 
    {
      $query ="DELETE FROM device_type WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "promotion") 
    {
      $query ="DELETE FROM promotion WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "record_repair") 
    {
      $query ="DELETE FROM record_repair WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "record_repair_promotion") 
    {
      $query ="DELETE FROM record_repair_promotion WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "repair_work") 
    {
      $query ="DELETE FROM repair_work WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "service_center") 
    {
      $query ="DELETE FROM service_center WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

    if ($c == "worker") 
    {
      $query ="DELETE FROM worker WHERE id = ?";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$b]);
      $data = $stmt->fetchAll();
    }

}

?>

<?php

if (isset($_GET['a'])) $string_a = htmlentities($_GET['a']);
if (isset($_GET['b'])) $string_b = htmlentities($_GET['b']);

$a = (String)$string_a;
$b = (String)$string_b;

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

if ($link == true) {
  
    // Вернуть все записи из таблицы client
    if($a == 'client') 
    {
        $sql = 'SELECT id, name, surname, address, phone, email, clientHistory 
            FROM client';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['name'] ."   ". 
                $row['surname'] ."   ". $row['address'] ."   ". 
                $row['phone'] ."   ". $row['email'] ."   ". 
                $row['clientHistory'] ."\n\n");
        } 
    }
  
    // Вернуть все записи из таблицы delivery_for_repairs
    if($a == 'delivery_for_repairs')
    {
        $sql = 'SELECT id, delivery_for_repairs 
            FROM delivery_for_repairs';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['delivery_for_repairs'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы detail
    if($a == 'detail')
    {
        $sql = 'SELECT id, name, availability, price, dimensions 
            FROM detail';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['name'] ."   ". 
                $row['availability'] ."   ". $row['price'] ."   ". 
                $row['dimensions'] ."   ". $row['email'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы details_service_center
    if($a == 'details_service_center')
    {
        $sql = 'SELECT id, service_center_id, detail_id, count 
            FROM details_service_center';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['service_center_id'] ."   ". 
                $row['detail_id'] ."   ". $row['count'] ."\n\n");
        }
    }   
  
    // Вернуть все записи из таблицы details_used_work
    if($a == 'details_used_work')
    {
        $sql = 'SELECT id, details_id, repair_work_id, count 
            FROM details_used_work';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['details_id'] ."   ". 
                $row['repair_work_id'] ."   ". $row['count'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы device
    if($a == 'device')
    {
        $sql = 'SELECT id, name, model, production_date, dimensions, 
                price, device_comment, device_type_id 
            FROM device';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['name'] ."   ". $row['model'] ."   ". 
                $row['production_date'] ."   ". $row['dimensions'] ."   ".
                $row['price'] ."   ". $row['device_comment'] ."   ".
                $row['device_type_id '] ."\n\n");
        }
    }

    // Вернуть все записи из таблицы device_type
    if($a == 'device_type')
    {
        $sql = 'SELECT id, device_type
            FROM device_type';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['device_type'] ."\n\n");
        }
    }  

    // Вернуть все записи из таблицы promotion
    if($a == 'promotion')
    {
        $sql = 'SELECT id, start_date, end_date, name, discount, promo_code
            FROM promotion';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['start_date'] ."   ".
                $row['end_date'] ."   ". $row['name'] ."   ".
                $row['discount'] ."   ". $row['promo_code'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы record_repair
    if($a == 'record_repair')
    {
        $sql = 'SELECT id, start_data, end_data, payment_method, quality, urgency,
                guarantee,problem_description, comment, review_worker, 
                client_id, delivery_for_repairs_id, worker_id,
                repair_work_id, device_id, service_center_id
            FROM record_repair';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['start_data'] ."   ".
                $row['end_data'] ."   ". $row['payment_method'] ."   ".
                $row['quality'] ."   ". $row['urgency'] ."   ".
                $row['guarantee'] ."   ". $row['problem_description'] ."   ".
                $row['comment'] ."   ". $row['review_worker'] ."   ".   
                $row['client_id'] ."   ". $row['delivery_for_repairs_id'] ."   ".  
                $row['worker_id'] ."   ". $row['repair_work_id'] ."   ".  
                $row['device_id'] ."   ". $row['service_center_id'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы record_repair_promotion
    if($a == 'record_repair_promotion')
    {
        $sql = 'SELECT id, record_repair_id, promotion_id
            FROM record_repair_promotion';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['record_repair_id'] ."   ".
            $row['promotion_id'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы repair_work
    if($a == 'repair_work')
    {
        $sql = 'SELECT id, complexity, execution_time, price, name
            FROM repair_work';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['complexity'] ."   ".
                $row['execution_time'] ."   ". $row['price'] ."   ".
                $row['name'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы repair_work_device_type
    if($a == 'repair_work_device_type')
    {
        $sql = 'SELECT id, repair_work_id, device_type_id
            FROM repair_work_device_type';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['repair_work_id'] ."   ".
            $row['device_type_id'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы service_center
    if($a == 'service_center')
    {
        $sql = 'SELECT id, name, address, phone, email
            FROM service_center';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['name'] ."   ".
                $row['address'] ."   ". $row['phone'] ."   ".
                $row['email'] ."\n\n");
        }
    }
  
    // Вернуть все записи из таблицы worker
    if($a == 'worker')
    {
        $sql = 'SELECT id, name, surname, address, phone, email,
                education,access_complexity, price_multiplier, position, 
                service_center_id
            FROM worker';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['id'] ."   ". $row['name'] ."   ".
                $row['surname'] ."   ". $row['address'] ."   ".
                $row['phone'] ."   ". $row['email'] ."   ".
                $row['education'] ."   ". $row['access_complexity'] ."   ".
                $row['price_multiplier'] ."   ". $row['position'] ."   ".   
                $row['service_center_id'] ."\n\n");
        }
    }

    // Вернуть все записи из таблицы all_info
    if($a == 'all_info')
    {
        $sql = 'SELECT * FROM all_info';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['Начало работ'] ."   ". $row['Конец работ'] ."   ".
                $row['Способ оплаты'] ."   ". $row['Гарантия'] ."   ".
                $row['Описание проблемы'] ."   ". $row['Комментарий о проделанной работе'] ."   ".
                $row['Комментарий об исполнителе'] ."   ". $row['Название СЦ'] ."   ".
                $row['Имя исполнителя'] ."   ". $row['Фамилия исполнителя'] ."   ".   
                $row['Имя заказчика'] ."   ". $row['Фамилия заказчика'] ."   ".   
                $row['Стоимость работ'] ."\n\n");
        }
    }
    
  // Вернуть все записи из таблицы all_info_device
    if($a == 'all_info_device')
    {
        $sql = 'SELECT * FROM all_info_device';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            print("" . $row['Тип устройства'] ."   ". $row['Название устройства'] ."   ".
                $row['Производитель'] ."   ". $row['Дата производства'] ."   ".
                $row['Цена'] ."\n\n");
        }
    }
  
  

}

?>
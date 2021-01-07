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
        $sql = 'SELECT id, name, surname, address, phone, email, clientHistory 
                FROM client';
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                    'id'            => $row['id'], 
                    'name'          => $row['name'], 
                    'surname'       => $row['surname'],
                    'address'       => $row['address'],
                    'phone'         => $row['phone'],
                    'email'         => $row['email'],
                    'clientHistory' => $row['clientHistory']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "delivery_for_repairs") 
    {
        $sql = 'SELECT id, delivery_for_repairs
                FROM delivery_for_repairs';
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                    'id'                    => $row['id'], 
                    'delivery_for_repairs'  => $row['delivery_for_repairs']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "detail") 
    {
        $sql = 'SELECT id, name, availability, price, dimensions
                FROM detail';
        $result = mysqli_query($link, $sql);
  
        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                'id'            => $row['id'], 
                'name'          => $row['name'], 
                'availability'  => $row['availability'],
                'price'         => $row['price'],
                'dimensions'    => $row['dimensions']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "details_service_center") 
    {
        $sql = 'SELECT id, service_center_id, detail_id, count
                FROM details_service_center';
        $result = mysqli_query($link, $sql);
  
        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                'id'                 => $row['id'], 
                'service_center_id'  => $row['service_center_id'], 
                'detail_id'          => $row['detail_id'],
                'count'              => $row['count'],
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "details_used_work") 
    {
        $sql = 'SELECT id, details_id, repair_work_id, count
                FROM details_used_work';
        $result = mysqli_query($link, $sql);
  
        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                'id'                 => $row['id'], 
                'details_id'         => $row['details_id'], 
                'repair_work_id'     => $row['repair_work_id'],
                'count'              => $row['count'],
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "device") 
    {
        $sql = 'SELECT id, name, model, production_date, dimensions, price, 
                    device_comment, device_type_id
                FROM device';
        $result = mysqli_query($link, $sql);
  
        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                'id'               => $row['id'], 
                'name'             => $row['name'], 
                'model'            => $row['model'],
                'production_date'  => $row['production_date'],
                'dimensions'       => $row['dimensions'],
                'price'            => $row['price'],
                'device_comment'   => $row['device_comment'],
                'device_type_id'   => $row['device_type_id'],
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "device_type") 
    {
        $sql = 'SELECT id, device_type
                FROM device_type';
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                    'id'           => $row['id'], 
                    'device_type'  => $row['device_type']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "promotion") 
    {
        $sql = 'SELECT id, start_date, end_date, name, discount, promo_code
                FROM promotion';
        $result = mysqli_query($link, $sql);
  
        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                'id'          => $row['id'], 
                'start_date'  => $row['start_date'], 
                'end_date'    => $row['end_date'],
                'name'        => $row['name'],
                'discount'    => $row['discount'],
                'promo_code'  => $row['promo_code'],
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "record_repair") 
    {
        $sql = 'SELECT id, start_data, end_data, payment_method, quality, 
                    urgency, guarantee, problem_description, comment, review_worker, 
                    client_id, delivery_for_repairs_id, worker_id, repair_work_id,
                    device_id, service_center_id
                FROM record_repair';
        $result = mysqli_query($link, $sql);
  
        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                'id'                      => $row['id'], 
                'start_data'              => $row['start_data'], 
                'end_data'                => $row['end_data'],
                'payment_method'          => $row['payment_method'],
                'quality'                 => $row['quality'],
                'urgency'                 => $row['urgency'],
                'guarantee'               => $row['guarantee'],
                'problem_description'     => $row['problem_description'],
                'comment'                 => $row['comment'],
                'review_worker'           => $row['review_worker'],
                'client_id'               => $row['client_id'],                
                'delivery_for_repairs_id' => $row['delivery_for_repairs_id'],
                'worker_id'               => $row['worker_id'],
                'repair_work_id'          => $row['repair_work_id'],
                'device_id'               => $row['device_id'],
                'service_center_id'       => $row['service_center_id']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "record_repair_promotion") 
    {
        $sql = 'SELECT id, record_repair_id, promotion_id
                FROM record_repair_promotion';
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                    'id'                => $row['id'], 
                    'record_repair_id'  => $row['record_repair_id'],
                    'promotion_id'      => $row['promotion_id']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "repair_work") 
    {
        $sql = 'SELECT id, complexity, execution_time, price, name
                FROM repair_work';
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                    'id'                => $row['id'], 
                    'complexity'        => $row['complexity'],
                    'execution_time'    => $row['execution_time'],
                    'price'             => $row['price'],
                    'name'              => $row['name']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "service_center") 
    {
        $sql = 'SELECT id, name, address, phone, email
                FROM service_center';
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                    'id'            => $row['id'], 
                    'name'          => $row['name'], 
                    'address'       => $row['address'],
                    'phone'         => $row['phone'],
                    'email'         => $row['email']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            }
        }
    }

    if ($c == "worker") 
    {
        $sql = 'SELECT id, name, surname, address, phone, email, education, access_complexity, price_multiplier, position, service_center_id
                FROM worker';
        $result = mysqli_query($link, $sql);
  
        while ($row = mysqli_fetch_array($result)) 
        {
            if($row[$a] == $b)
            {
                $arr = array(
                'id'                => $row['id'], 
                'name'              => $row['name'], 
                'surname'           => $row['surname'],
                'address'           => $row['address'],
                'phone'             => $row['phone'],
                'email'             => $row['email'],
                'education'         => $row['education'],
                'access_complexity' => $row['access_complexity'],
                'price_multiplier'  => $row['price_multiplier'],
                'position'          => $row['position'],
                'service_center_id' => $row['service_center_id']
                );
                echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);  
            
            }
        }
    }

}
?>

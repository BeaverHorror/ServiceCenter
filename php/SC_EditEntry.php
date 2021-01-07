<?php
if (isset($_POST['a'])) $string_a = htmlentities($_POST['a']);
if (isset($_POST['b'])) $string_b = htmlentities($_POST['b']);
if (isset($_POST['c'])) $string_c = htmlentities($_POST['c']);

if (isset($_POST['indexClient']))            $string_indexClient            = htmlentities($_POST['indexClient']);
if (isset($_POST['clientHistoryClient']))    $string_clientHistoryClient    = htmlentities($_POST['clientHistoryClient']);
if (isset($_POST['nameClient']))             $string_nameClient             = htmlentities($_POST['nameClient']);
if (isset($_POST['surnameClient']))          $string_surnameClient          = htmlentities($_POST['surnameClient']);
if (isset($_POST['addressClient']))          $string_addressClient          = htmlentities($_POST['addressClient']);
if (isset($_POST['phoneClient']))            $string_phoneClient            = htmlentities($_POST['phoneClient']);
if (isset($_POST['emailClient']))            $string_emailClient            = htmlentities($_POST['emailClient']);

if (isset($_POST['indexDetail']))            $string_indexDetail            = htmlentities($_POST['indexDetail']);
if (isset($_POST['nameDetail']))             $string_nameDetail             = htmlentities($_POST['nameDetail']);
if (isset($_POST['availabilityDetail']))     $string_availabilityDetail     = htmlentities($_POST['availabilityDetail']);
if (isset($_POST['priceDetail']))            $string_priceDetail            = htmlentities($_POST['priceDetail']);
if (isset($_POST['dimensionsDetail']))       $string_dimensionsDetail       = htmlentities($_POST['dimensionsDetail']);

if (isset($_POST['indexWorker']))            $string_indexWorker            = htmlentities($_POST['indexWorker']);
if (isset($_POST['nameWorker']))             $string_nameWorker             = htmlentities($_POST['nameWorker']);
if (isset($_POST['surnameWorker']))          $string_surnameWorker          = htmlentities($_POST['surnameWorker']);
if (isset($_POST['addressWorker']))          $string_addressWorker          = htmlentities($_POST['addressWorker']);
if (isset($_POST['phoneWorker']))            $string_phoneWorker            = htmlentities($_POST['phoneWorker']);
if (isset($_POST['emailWorker']))            $string_emailWorker            = htmlentities($_POST['emailWorker']);
if (isset($_POST['educationWorker']))        $string_educationWorker        = htmlentities($_POST['educationWorker']);
if (isset($_POST['accessComplexityWorker'])) $string_accessComplexityWorker = htmlentities($_POST['accessComplexityWorker']);
if (isset($_POST['priceMultiplierWorker']))  $string_priceMultiplierWorker  = htmlentities($_POST['priceMultiplierWorker']);
if (isset($_POST['positionWorker']))         $string_positionWorker         = htmlentities($_POST['positionWorker']);
if (isset($_POST['serviceCenterIDWorker']))  $string_serviceCenterIDWorker  = htmlentities($_POST['serviceCenterIDWorker']);

if (isset($_POST['id_RecordRepair']))                      $string_id_RecordRepair                      = htmlentities($_POST['id_RecordRepair']);
if (isset($_POST['start_data_RecordRepair']))              $string_start_data_RecordRepair              = htmlentities($_POST['start_data_RecordRepair']);
if (isset($_POST['end_data_RecordRepair']))                $string_end_data_RecordRepair                = htmlentities($_POST['end_data_RecordRepair']);
if (isset($_POST['payment_method_RecordRepair']))          $string_payment_method_RecordRepair          = htmlentities($_POST['payment_method_RecordRepair']);
if (isset($_POST['quality_RecordRepair']))                 $string_quality_RecordRepair                 = htmlentities($_POST['quality_RecordRepair']);
if (isset($_POST['urgency_RecordRepair']))                 $string_urgency_RecordRepair                 = htmlentities($_POST['urgency_RecordRepair']);
if (isset($_POST['guarantee_RecordRepair']))               $string_guarantee_RecordRepair               = htmlentities($_POST['guarantee_RecordRepair']);
if (isset($_POST['problem_description_RecordRepair']))     $string_problem_description_RecordRepair     = htmlentities($_POST['problem_description_RecordRepair']);
if (isset($_POST['comment_RecordRepair']))                 $string_comment_RecordRepair                 = htmlentities($_POST['comment_RecordRepair']);
if (isset($_POST['review_worker_RecordRepair']))           $string_review_worker_RecordRepair           = htmlentities($_POST['review_worker_RecordRepair']);
if (isset($_POST['client_id_RecordRepair']))               $string_client_id_RecordRepair               = htmlentities($_POST['client_id_RecordRepair']);
if (isset($_POST['delivery_for_repairs_id_RecordRepair'])) $string_delivery_for_repairs_id_RecordRepair = htmlentities($_POST['delivery_for_repairs_id_RecordRepair']);
if (isset($_POST['worker_id_RecordRepair']))               $string_worker_id_RecordRepair               = htmlentities($_POST['worker_id_RecordRepair']);
if (isset($_POST['repair_work_id_RecordRepair']))          $string_repair_work_id_RecordRepair          = htmlentities($_POST['repair_work_id_RecordRepair']);
if (isset($_POST['device_id_RecordRepair']))               $string_device_id_RecordRepair               = htmlentities($_POST['device_id_RecordRepair']);
if (isset($_POST['service_center_id_RecordRepair']))       $string_service_center_id_RecordRepair       = htmlentities($_POST['service_center_id_RecordRepair']);

$a = (String)$string_a;
$b = (String)$string_b;
$c = (String)$string_c;

$indexClient            = (String)$string_indexClient;
$nameClient             = (String)$string_nameClient;
$surnameClient          = (String)$string_surnameClient;
$addressClient          = (String)$string_addressClient;
$phoneClient            = (String)$string_phoneClient;
$emailClient            = (String)$string_emailClient;
$clientHistoryClient    = (String)$string_clientHistoryClient;

$indexDetail            = (String)$string_indexDetail;
$nameDetail             = (String)$string_nameDetail;
$availabilityDetail     = (String)$string_availabilityDetail;
$priceDetail            = (String)$string_priceDetail;
$dimensionsDetail       = (String)$string_dimensionsDetail;

$indexWorker            = (String)$string_indexWorker;
$nameWorker             = (String)$string_nameWorker;
$surnameWorker          = (String)$string_surnameWorker;
$addressWorker          = (String)$string_addressWorker;
$phoneWorker            = (String)$string_phoneWorker;
$emailWorker            = (String)$string_emailWorker;
$educationWorker        = (String)$string_educationWorker;
$accessComplexityWorker = (String)$string_accessComplexityWorker;
$priceMultiplierWorker  = (String)$string_priceMultiplierWorker;
$positionWorker         = (String)$string_positionWorker;
$serviceCenterIDWorker  = (String)$string_serviceCenterIDWorker;

$id_RecordRepair                      = (String)$string_id_RecordRepair;
$start_data_RecordRepair              = (String)$string_start_data_RecordRepair;
$end_data_RecordRepair                = (String)$string_end_data_RecordRepair;
$payment_method_RecordRepair          = (String)$string_payment_method_RecordRepair;
$quality_RecordRepair                 = (String)$string_quality_RecordRepair;
$urgency_RecordRepair                 = (String)$string_urgency_RecordRepair;
$guarantee_RecordRepair               = (String)$string_guarantee_RecordRepair;
$problem_description_RecordRepair     = (String)$string_problem_description_RecordRepair;
$comment_RecordRepair                 = (String)$string_comment_RecordRepair;
$review_worker_RecordRepair           = (String)$string_review_worker_RecordRepair;
$client_id_RecordRepair               = (String)$string_client_id_RecordRepair;
$delivery_for_repairs_id_RecordRepair = (String)$string_delivery_for_repairs_id_RecordRepair;
$worker_id_RecordRepair               = (String)$string_worker_id_RecordRepair;
$repair_work_id_RecordRepair          = (String)$string_repair_work_id_RecordRepair;
$device_id_RecordRepair               = (String)$string_device_id_RecordRepair;
$service_center_id_RecordRepair       = (String)$string_service_center_id_RecordRepair;




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

  if($c == "client"){
    $sql = 'UPDATE client SET name = ?, surname = ?, address = ?, phone = ?, email = ?, clientHistory = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nameClient,$surnameClient,$addressClient,$phoneClient,$emailClient,$clientHistoryClient,$indexClient]);
    $data = $stmt->fetchAll();
  }

  if($c == "detail"){
    $sql = 'UPDATE detail 
            SET name = ?, availability = ?, price = ?, dimensions = ? 
            WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nameDetail,$availabilityDetail,$priceDetail,$dimensionsDetail,$indexDetail]);
    $data = $stmt->fetchAll();
  }
  
  if($c == "worker"){
    $sql = 'UPDATE worker 
            SET name = ?, surname = ?, address = ?, phone = ?, email = ?, education = ?, 
                access_complexity = ?, price_multiplier = ?, position = ?, service_center_id = ? 
            WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nameWorker,$surnameWorker,$addressWorker,$phoneWorker,$emailWorker,
                    $educationWorker,$accessComplexityWorker, $priceMultiplierWorker, 
                    $positionWorker, $serviceCenterIDWorker, $indexWorker ]);
    $data = $stmt->fetchAll();
  }  

  if($c == "record_repair"){
    $sql = 'UPDATE record_repair 
            SET start_data = ?, end_data = ?, payment_method = ?, quality = ?, urgency = ?, 
                guarantee = ?, problem_description = ?, comment = ?, review_worker = ?, 
                client_id = ?, delivery_for_repairs_id = ?, worker_id = ?, repair_work_id = ?, 
                device_id = ?, service_center_id = ? 
            WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$start_data_RecordRepair, $end_data_RecordRepair, $payment_method_RecordRepair, 
                    $quality_RecordRepair, $urgency_RecordRepair, $guarantee_RecordRepair,  
                    $problem_description_RecordRepair, $comment_RecordRepair, $review_worker_RecordRepair, 
                    $client_id_RecordRepair, $delivery_for_repairs_id_RecordRepair, $worker_id_RecordRepair, 
                    $repair_work_id_RecordRepair, $device_id_RecordRepair, $service_center_id_RecordRepair, 
                    $id_RecordRepair ]);
    $data = $stmt->fetchAll();
  }  

  print("Запрос об изменении записи отправлен в БД ");

}

?>

<?php
if (isset($_POST['a'])) $string_a = htmlentities($_POST['a']);
if (isset($_POST['b'])) $string_b = htmlentities($_POST['b']);
if (isset($_POST['c'])) $string_c = htmlentities($_POST['c']);

if (isset($_POST['indexClient']))         $string_indexClient         = htmlentities($_POST['indexClient']);
if (isset($_POST['clientHistoryClient'])) $string_clientHistoryClient = htmlentities($_POST['clientHistoryClient']);
if (isset($_POST['nameClient']))          $string_nameClient          = htmlentities($_POST['nameClient']);
if (isset($_POST['surnameClient']))       $string_surnameClient       = htmlentities($_POST['surnameClient']);
if (isset($_POST['addressClient']))       $string_addressClient       = htmlentities($_POST['addressClient']);
if (isset($_POST['phoneClient']))         $string_phoneClient         = htmlentities($_POST['phoneClient']);
if (isset($_POST['emailClient']))         $string_emailClient         = htmlentities($_POST['emailClient']);

if (isset($_POST['indexDetail']))         $string_indexDetail         = htmlentities($_POST['indexDetail']);
if (isset($_POST['nameDetail']))          $string_nameDetail          = htmlentities($_POST['nameDetail']);
if (isset($_POST['availabilityDetail']))  $string_availabilityDetail  = htmlentities($_POST['availabilityDetail']);
if (isset($_POST['priceDetail']))         $string_priceDetail         = htmlentities($_POST['priceDetail']);
if (isset($_POST['dimensionsDetail']))    $string_dimensionsDetail    = htmlentities($_POST['dimensionsDetail']);

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
    $sql = 'UPDATE detail SET name = ?, availability = ?, price = ?, dimensions = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nameDetail,$availabilityDetail,$priceDetail,$dimensionsDetail,$indexDetail]);
    $data = $stmt->fetchAll();
  }
  
  if($c == "worker"){
    $sql = 'UPDATE worker SET name = ?, surname = ?, address = ?, phone = ?, email = ?, 
    education = ?, access_complexity = ?, price_multiplier = ?, position = ?, service_center_id = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nameWorker,$surnameWorker,$addressWorker,$phoneWorker,$emailWorker,$educationWorker,$accessComplexityWorker,
                   $priceMultiplierWorker, $positionWorker, $serviceCenterIDWorker, $indexWorker ]);
    $data = $stmt->fetchAll();

  }  

  print("Запрос об изменении записи отправлен в БД ");

}

?>
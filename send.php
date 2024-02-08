<?php 

$pers_info = [
  'fio' => $_POST["name"],
  'phone' => $_POST["phone"],
  'ip' => $_SERVER['REMOTE_ADDR']
];


//$temp = json_encode($pers_info);

$data = [
    'method' => "addRequest",
    'id' => "23312dsdasad21d2",
    'user_id' => 11111111,
    'api_key' => "3dsaDsdd2cj34jkk4wkdadasdas24",
    'flow' => "fdD74",
    'offer_id' => 1,
    'country' => 'SVK',
    'pers_info' => [
      'fio' => implode($_POST["name"]),
      'phone' => implode($_POST["phone"]),
      'ip' => $_SERVER['REMOTE_ADDR']
  ]
];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.lagoon.me/api/outsource',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

//echo $response;
//var_dump($data);

header("Location: success.php");
// or
//include('./success.php');
// but last option didn't redirect
exit();
?>
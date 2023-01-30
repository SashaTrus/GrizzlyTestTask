<?php
session_start();

$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);//указанный номер телефона
$phoneCountry = '';

$data = file_get_contents('data.json');//подключение файла с данными номеров всех стран
$CountryArray = json_decode($data, true);

$replaceArr = array("+", " ", "-", "(", ")");
$replacePhone = str_replace($replaceArr, "", $phone);//убираем символы с номера телефона
$replacePhoneCount = strlen($replacePhone);//считаем длинну номера

for ($i=0;$i,count($CountryArray);$i++){
    $replaceDataPhone = str_replace($replaceArr, "", $CountryArray[$i]['mask']);//убираем символы с номера телефона
    $replaceDataPhoneCount = strlen($replaceDataPhone);//считаем длинну номера
    $replaceDataPhoneForSearch = str_replace('#','', $replaceDataPhone);//убираем # с номера телефона для поиска
    $strpos = strpos($replacePhone,$replaceDataPhoneForSearch, 0);//ищем позицию первого вхождения строки
    if ($strpos === 0 && $replacePhoneCount===$replaceDataPhoneCount){
        $_SESSION['country'] = $CountryArray[$i]['name_ru'];
    }
}

header('Location: /');

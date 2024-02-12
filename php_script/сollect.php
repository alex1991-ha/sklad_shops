<?php
require('../Classes.php');
require('../connect_db.php');

$camers = $_POST["camers"];
$keyboard = $_POST["keyboard"];
$filter1_8 = $_POST["filter1_8"];
$filter5 = $_POST["filter5"];
$KVM = $_POST["KVM"];

// //ip-камеры
$camersObject = new Table();
$camersObject->collect(15, $camers);

// //клавиатуры
$keyboardObject = new Table();
$keyboardObject->collect(6, $keyboard);

// //сетевой фильтр 1.8
$filter1_8Object = new Table();
$filter1_8Object->collect(3, $filter1_8);

// //сетевой фильтр 5
$filter5Object = new Table();
$filter5Object->collect(4, $filter5);

//KVM-switch
if(isset($_POST['KVM']) == 'Yes') {
    $KVM = 1;
    $KVMObject = new Table();
    $KVMObject->collect(14, $KVM);
}

//другие устройства для магазинов
const minusOne = 1;
$arr_ID = [1,2,5,7,8,9,10,11,12,13,16,17];
foreach ($arr_ID as $key => $value) {
    $DeviceOther = new Table();
    $DeviceOther->collect($value, minusOne);
}

for ($x = 0; $x < count($arr_ID); $x++) {
    echo $x;
}

header('Location: ../index.php');
<?php

$db = new PDO("mysql:host=localhost;dbname=classicmodels;charset=utf8", 'root', '');






$form = file_get_contents('form.html');
$stmt = $db->prepare("SELECT distinct (country) as stat FROM customers");
$stmt->execute();
$staty = $stmt->fetchAll(PDO::FETCH_ASSOC);

$option = "";
foreach ($staty as $key => $value) {
    $option .= "<option>";
    foreach ($value as $key => $value2) {
        $option .= "value2";
    }
    $option .= "</option>";
}

$form = str_replace("[@option]", $option, $form);
echo $form;

$stmt = $db->prepare("SELECT * FROM customers");
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<table>";
foreach ($arr as $key => $value) {
    echo "<tr>";
    foreach ($value as $key => $value2) {
        echo "<td>$value2";
    }

}
echo "</table>";












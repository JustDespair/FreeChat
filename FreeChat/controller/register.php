<?php

require_once('../etc/Conection.php');
require_once('../model/query.php');

$conection = new Conection;

$query = new query($conection);

$data = [
    
    'name' => $_POST['name'],
    'lastname' => $_POST['lastname'],
    'nickname' => $_POST['nickname'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'age' => $_POST['age'],
    'gender' => $_POST['gender'],
    'nphone' => $_POST['nphone']
];

$query->register($data);

echo "Registro exitoso" . "<br>";
?>
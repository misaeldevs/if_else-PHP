<?php

$number1 = 70;
$number2 = 50;
$isAdmin = true;

$resultado = $number1 > $number2 && $isAdmin;

if($resultado){
    echo 'É verdadeiro.';
}else{
    echo 'Não é verdadeiro.';
}
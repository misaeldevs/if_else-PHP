<?php

$number1 = 70;
$number2 = 50;
$isAdmin = true;

$resultado = $number1 > $number2 && $isAdmin;

echo ($resultado) ? 'É verdadeiro.' : 'Não é verdadeiro.';
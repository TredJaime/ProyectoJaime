<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicios Operadores</title>
</head>
<body>

<h1>Ejercicio 1.</h1>
<p>Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste en la sección de discusiones.</p>
<?php
 $primero = 32+3;
 $segundo = 3 * (2+3) ;
 echo '<br>Resltados:' . $primero;
 echo '<br>Resltados:' . $segundo;
?>
<br>
<h1>Ejercicio 2.</h1>
<p>Tomando en cuenta que tenemos una variable llamada $valor, escribe en la sección de discusiones ¿Cómo sería un condicional para las siguientes opciones?
<br>
<br> *$valor es mayor que 5 pero menor que 10
<br> *$valor es mayor o igual a 0 pero menor o igual a 20
<br> *$valor es igual a “10” asegurando que el tipo de dato sea cadena
<br> *$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15 <br>
<br>
<br>Vamos a hardcodear la variable  $valor, según el número de acurdo a nuestra conveniencia <br>
</p>

<?php
  $valor = 7;
  echo  'Valor hardcodeado'. $valor . '<br>';
  if (($valor > 5) && ($valor < 10) ) {
    # code...
    echo '$valor es mayor que 5 pero menor que 10';
  }else {
    # code...
    echo 'Valor incorrecto';
  }
  echo '<br>';
  if (($valor >= 0) && ($valor <= 20) ) {
    # code...
    echo '$valor es mayor o igual a 0 pero menor o igual a 20';
  }else{
    echo 'Dicho valor no entra en el rango especificado';
  }
  $valor = 10;
  echo '<br>';
  if ($valor === '10') {
    # code...
    echo '$valor es igual a “10” asegurando que el tipo de dato sea cadena';
  }else{
    echo 'No son iguales';
  }
  $valor = 20;
  echo '<br>';
  if ((($valor > 0) && ($valor < 5)) || (($valor > 10) && ($valor < 15)) ) {
    # code...
    echo '$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15';
  }else {
    echo 'No son ok los valores';
  }
?>

</body>
</html>
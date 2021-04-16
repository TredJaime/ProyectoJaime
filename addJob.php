<!-- declaramos vaariable super globales nos permiten accedes a sesion
cokies valores de servidor
-->
<?php
var_dump($_GET); //ESTAMOS RECIVIENDO 
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    <title>Add Job</title>
</head>
<body>
    <h1> Add Job</h1>
    <form action="addJob.php" method="post">
    <label for="">Title</label>
    <input type="text" name="title"><br>
    <label for="">Descripcion</label>
    <input type="text" name="descripcion"><br>
    <button type="submit">Save</button>
    </form>
    
</body>
</html>
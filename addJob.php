<!-- declaramos vaariable super globales nos permiten accedes a sesion
cokies valores de servidor
-->
<?php
require_once 'vendor/autoload.php'; //este tengo que ponerlo ya que es que me carga los servicios de composer

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
//hasta es codigo de laravel eloquent

//chekeamos que venga vacio
if(!empty($_POST)){
  $job = new Job(); //creamos una nueva instancia 
  $job->title = $_POST['title'];
  $job->descripcion = $_POST['descripcion'];
  $job->save();
}
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
    <button type="submit">save</button>
    </form>
    
</body>
</html>
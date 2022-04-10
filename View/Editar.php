<?php 
    require '../vendor/autoload.php'; 

    $client = new MongoDB\Client;
    $companydb = $client->companydb;
    $empcollection = $companydb->empcollection;
    $id=isset($_GET['id']) ?$_GET['id']:"";
    $document = $empcollection->findOne(
        ['_id' => $id]
    );

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,600&display=swap" rel="stylesheet">
        <link href="../styles/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>

    <div class="container">
    <h1>Insertar Datos A modiificar</h1>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <form action="../Controller/update.php" method="POST">
                        <label for="id">ID usuario</label><br/>
                        <input class="form-control" type="text" name="id" value=<?php echo $id ;?> readonly><br/>
                        <label for="name">Ingrese Nombre </label><br/>
                        <input class="form-control" type="text" name="name" required="required" placeholder=<?php echo $document['name'];?>><br/>
                        <label for="age">Ingrese Edad</label><br/>
                        <input class="form-control" type="text" name="age" required="required" placeholder=<?php echo $document['age'];?> ><br/>
                        <label for="skill">Ingrese Skill</label><br/>
                        <input class="form-control" type="text" name="skill" required="required" placeholder=<?php echo $document['skill'];?> ><br/>
                        <input class="btn btn-outline-primary" type="submit" required="required" name="Editar Datos"/><br/>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <!-- 2 of 3 (wider) -->
            </div>
            <div class="col">
                <!-- 3 of 3 -->
            </div>
        </div>

    </div>
    <?php require_once("Pie.php") ?>
        
        <script src="" async defer></script>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>


<?php 
    require 'vendor/autoload.php'; 
    $client = new MongoDB\Client;
    $companydb = $client->companydb;
    $empcollection = $companydb->empcollection;

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
        <link href="styles/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <div class="container">
    <h1>Insertar Datos en mongo</h1>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <form action="Controller/insert.php" method="POST">
                        <label for="id">ID usuario</label><br/>
                        <input class="form-control" type="text" name="id" ><br/>
                        <label for="name">Ingrese Nombre </label><br/>
                        <input class="form-control" type="text" name="name" required="required" placeholder="usuario1" ><br/>
                        <label for="age">Ingrese Edad</label><br/>
                        <input class="form-control" type="text" name="age" required="required" placeholder="23" ><br/>
                        <label for="skill">Ingrese Skill</label><br/>
                        <input class="form-control" type="text" name="skill" required="required" placeholder="base de datos" ><br/>
                        <input class="btn btn-outline-primary" type="submit" required="required" name="Enviar Datos"/><br/>
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

        
        <?php
        require_once("connect_data.php");
        
        if ($name->count()>0)
        {
            $datos = $name->find();
            ?>
            <table class="table table-sm" >
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Skill</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($datos as $dato) { ?>      
            <tr>
                <th scope="row"><?php echo $dato["_id"]; ?></th>
                <td><?php echo $dato["name"]; ?></td>
                <td><?php echo $dato["age"]; ?></td>
                <td><?php echo $dato["skill"]; ?></td>
                <td><a class="edit" href="view/Editar.php?id=<?php echo $dato["_id"];?>">Editar</a></td>
                <td><a class="edit" href="Controller/delete.php?id=<?php echo $dato["_id"];?>">Eliminar</a></td>
            </tr>
                    <?php
            }//foreach
                    ?>
            <tbody>
            </table>
        <?php } else{ ?>
            <h4></i>Sin registros en la Base de Datos</h4>
        <?php } ?>

    </div>

    <?php require_once("View/Pie.php") ?>
        
        
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


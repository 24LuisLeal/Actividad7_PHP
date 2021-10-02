<!--Hacemos la conexión a la base de datos
    incluyendo el archivo data_base.php que
    es el encargado de hacerla-->

<?php
    include("data_base.php");
    //Sentencias mysql para llamar a los diferentes tipos de contacto
    $show_by_id = "SELECT * FROM persons ORDER BY id";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
        crossorigin="anonymous">
        <!--Google Fonts & Icons-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
        rel="stylesheet">
        <title>Actividad 7</title>
    </head>
    <body>
        <header>
            <div class="container pt-2">
                <h1>Actividad 7</h1>
            </div>
                <div class="container pt-5">
                    <a href="add-new-user.php" style = "text-decoration:none;">
                        <button type="button" class="btn btn-primary">
                            Agregar usuario
                        </button>
                    </a>
                    <a href="order-by-user.php" style = "text-decoration:none;">
                        <button type="button" class="btn btn-primary">
                            Ordenar por usuario
                        </button>
                    </a>
                    <a href="order-by-gender.php" style = "text-decoration:none;">
                        <button type="button" class="btn btn-primary">
                            Ordenar por género
                        </button>                        
                    </a>
                    <a href="index.php" style = "text-decoration:none;">
                        <button type="button" class="btn btn-primary">
                            Ordenar por ID
                        </button> 
                    </a>
                </div>
        </header>
        <section>
            <div class="container pt-5">
                <table class = "table table-hover table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th scope = "col" class = "text-center text-light">ID</th>
                            <th scope = "col" class = "text-center text-light">Usuario</th>
                            <th scope = "col" class = "text-center text-light">Género</th>
                            <th scope = "col" class = "text-center text-light">Color favorito</th>
                            <th scope = "col" class = "text-center text-light">Comida favorita</th>
                            <th scope = "col" class = "text-center text-light">Acciones</th>
                        </tr>
                    </thead>
                    <?php
                        //Hacemos una llamada a la base de datos
                        $result = mysqli_query(
                            $connection, //Conexión a la base de datos
                            $show_by_id //Sentencias para ver todo el contenido de la base de datos
                        );
                        //Iniciamos un ciclo para mostrar los resultdos
                        while($show = mysqli_fetch_assoc($result)){
                    ?>
                    <tbody>
                    <tr>
                        <!--LLamamos a las columnas de las tablas-->
                        <th scope = "row" class = "pt-3 text-center">
                            <?php echo $show['id']?>
                        </th>
                        <th scope = "row" class = "pt-3 text-center">
                            <?php echo $show['user_name']?>
                        </td>
                        <th scope = "row" class = "pt-3 text-center">
                            <?php echo $show['gender']?>
                        </td>
                        <th scope = "row" class = "pt-3 text-center">
                            <?php echo $show['favorite_color']?>
                        </td>
                        <th scope = "row" class = "pt-3 text-center">
                            <?php echo $show['favorite_food']?>
                        </td>
                        <th scope = "row" class = "text-center">
                            <button type="button" class="btn btn-success">
                                <a href="edit-user.php
                                    id= <?php echo $show['id']?> &
                                    user_name = <?php echo $show['user_name']?> &
                                    gender = <?php echo $show['gender']?> &
                                    favorite_color = <?php echo $show['favorite_color']?> &
                                    favorite_food = <?php echo $show['favorite_food']?>
                                    ">
                                    <span class="material-icons-outlined text-light">
                                        edit
                                    </span>
                                </a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a href="">
                                    <span class="material-icons-outlined text-light">
                                        delete
                                    </span>
                                </a>
                            </button>
                        </td>
                    </tr>
                </tbody>
                <?php
                    } //Cerramos el ciclo
                ?>
                </table>
            </div>
        </section>
        <!--JS Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" 
            integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
        </script>
    </body>
</html>
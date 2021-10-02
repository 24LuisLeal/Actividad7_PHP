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
    <title>Document</title>
</head>
    <body>
        <?php
            $id = $_GET['id'];
            $user_name = $_GET['user_name'];
            $gender = $_GET['gender'];
            $favorite_color = $_GET['favorite_color'];
            $favorite_food = $_GET['favorite_food'];
        ?>
        <div class="container">
            <h2>Editar un usuario</h2>
            <form action = "insert-user.php" method = "post">
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" name = "user_name" value = "<?=id?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name = "user_name" value = "<?=user_name?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Género</label>
                    <input type="text" class="form-control" name = "gender" value = "<?=gender?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Color Favorito</label>
                    <input type="text" class="form-control" name = "favorite_color" value = "<?=favorite_color?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Comida Favorita</label>
                    <input type="text" class="form-control" name = "favorite_food" value = <?=favorite_food?>>
                </div>
                <input type="submit" value = "Actualizar">
            </form>
        </div>
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
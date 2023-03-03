<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Prod APIs</title>
    
</head>
<body>
    <h2>APIs</h2>
    <h3>Petición GET</h3>
    <form method="get" action="post.php">
        <input type="submit" value="peticion GET - ver todo">
    </form>
    <form method="get" action="post.php">
        <p>ID a buscar: <input type="number" name="id"></p>
        <input type="submit" value="peticion GET - by ID">
    </form>
    <h3>Petición post</h3>
    <form method="post" action="post.php">
        <p>Titulo: <input type="text" name="title"></p>
        <p>Status: <input type="text" name="status"></p>
        <p>Content: <input type="text" name="content"></p>
        <p>user_id: <input type="number" name="user_id"></p>
        <input type="submit" value="peticion post - by ID">
    </form>
    <h3>ACTIVIDAD----------------------</h3>
    <form method="get" action="post.php">
        <input type="submit" value="peticion GET - ver todo">
    </form>
    <form method="get" action="post.php">
        <p>ID a buscar: <input type="number" name="id"></p>
        <input type="submit" value="peticion GET - by ID">
    </form>
    <form method="post" action="post.php">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Fecha: <input type="date" name="fecha_alta"></p>
        <p>Foto: <input type="text" name="foto"></p>
        <input type="submit" value="peticion post - by ID">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
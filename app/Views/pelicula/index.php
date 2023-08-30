<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
    <h1>Listado previo</h1>

    <a href="/pelicula/new/">Crear</a>
    <table>
        <tr>
            <th>
                Título
            </th>
            <th>
                Descripción
            </th>
            <th>
                Opciones
            </th>
        </tr>
            <?php foreach($peliculas as $key => $p) :?>
                <tr>
                    <td><?= $p['titulo'] ?></td>
                    <td><?= $p['descripcion'] ?></td>
                    <td>
                        <a href="/pelicula/show/<?= $p['id'] ?>">Show</a>
                        <a href="/pelicula/edit/<?= $p['id'] ?>">Editar</a>

                        <form action="/pelicula/delete/<?= $p['id'] ?>" method="post"></form>
                        <button type="submit">Delete</button>
                        </form>
                
                    </td>
                </tr>
            <?php endforeach ?>
    </table>

</body>
</html>
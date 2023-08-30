<p><label for="titulo">Título</label></p>
<input type="text" name="titulo" placeholder="Título" id="titulo" value="<?= $pelicula['titulo'] ?>">
<p><label for="descripcion">Descripción</label></p>
<textarea name="descripcion" id="descripcion">
            <?= $pelicula['descripcion'] ?>
        </textarea>
       
<p><button type="submit" ><?= $op ?></button></p>
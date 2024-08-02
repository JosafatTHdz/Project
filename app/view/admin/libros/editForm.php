<section>
    <h1>Editar el registro de <?= $datos['Titulo'] ?></h1>
    <form action="http://localhost/bibliotech/?C=bookController&M=edit" method="post">
        <input type="hidden" name="isbn" value= <?= $datos['ISBN'] ?>>
        <div>
            <label for="nombre">Titulo</label>
            <input type="text" name="title" require value= <?= $datos['Titulo'] ?> >
        </div>
        <div>
            <label for="apellido">Autor</label>
            <input type="text" name="author" require value = <?= $datos['Autor'] ?>>
        </div>
        <div>
            <label for="edad">Editorial</label>
            <input type="text" name="edit" require value = <?= $datos['Editorial'] ?>>
        </div>
        <div>
            <label for="edad">Categoria</label>
            <input type="text" name="cat" require value = <?= $datos['Categoria'] ?>>
        </div>
        <div>
            <label for="correo">Año de publicacion</label>
            <input type="text" name="apublic" require value = <?= $datos['Año_publicacion'] ?>>
        </div>
        <div>
            <label for="fecha">Cantidad</label>
            <input type="number" name="cant" require value = <?= $datos['Cantidad'] ?>>
        </div>
        <div>
            <input type="submit" value="Editar">
        </div>
        <div>
            <a href="http://localhost/bibliotech?C=bookController&M=callIndex" class="botons">Volver</a>
        </div>
    </form>
</s>
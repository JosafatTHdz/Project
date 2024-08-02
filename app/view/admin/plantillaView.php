<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/style.css">
    <title>BiblioTech</title>
</head>
<body>
    <header class="header">
        <h1>BiblioTech</h1>
        <nav class="navbar">
            <ul>
                <li><a href="http://localhost/bibliotech">Inicio</a></li>
                <li><a href="http://localhost/bibliotech?C=bookController&M=CallIndex">Libros</a></li>
                <li><a href="http://localhost/bibliotech?C=accionesController&M=index">Prestamo</a></li>
                <li><a href="#">Reservas</a></li>
                <li><a href="http://localhost/bibliotech?C=loginController&M=loged_out">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <?php include_once($vista) ?>
    </section>
    <footer class="footer">
        <h3>Derechos reservados 2024</h3>
    </footer>
</body>
</html>
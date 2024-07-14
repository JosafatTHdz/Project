<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTech</title>

</head>
<body>
    <header class="header">
        <h1>BiblioTech</h1>
        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="http://localhost/php-3a?C=registerController&M=index">Registro</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Login</a></li>
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
<section>
    <table class="table-data" border="1">
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Autor</td>
                <td>Editorial</td>
                <td>Categoria</td>
                <td>Año de publicación</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                session_start();
                if(!isset($_SESSION['username'])){
                    $vista ="app/view/admin/usuarios/login.php";
                    include_once("app/view/admin/plantillaView2.php");
                }
                $user = $_SESSION['username'];
                foreach($books as $book){
                    echo "<tr>";
                    echo "<td>" . $book['Titulo'] . "</td>";
                    echo "<td>" . $book['Autor'] . "</td>";
                    echo "<td>" . $book['Editorial'] . "</td>";
                    echo "<td>" . $book['Categoria'] . "</td>";
                    echo "<td>" . $book['Año_publicacion'] . "</td>";
                    echo "<td> 
                    <button onclick='solicitar(\"" . $book['Titulo'] . "\", \"$user\")'>Solicitar prestamo</button>
                    <button onclick='reservar(\"" . $book['Titulo'] . "\", \"$user\")'>Reservar</button> 
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
        function solicitar(titulo,usuario){
            window.location.href="http://localhost/bibliotech?C=accionesController&M=regPrest&titulo=" + encodeURIComponent(titulo) + "&user=" + encodeURIComponent(usuario);
        }
        function reservar(ISBN){
            window.location.href="http://localhost/bibliotech?C=accionesController&M=regReserv&titulo=" + encodeURIComponent(titulo) + "&user=" + encodeURIComponent(usuario);
        }
    </script>
</section>
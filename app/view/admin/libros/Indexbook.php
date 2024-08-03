<section>
<h1><a href="http://localhost/bibliotech?C=bookController&M=CallInsert" class="botons">Insertar un nuevo libro</a></h1>
    <table border="3px solid #ddd">
        <thead>
            <tr border>
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
                foreach($datos as $dato){
                    echo "<tr>";
                    echo "<td>" . $dato['Titulo'] . "</td>";
                    echo "<td>" . $dato['Autor'] . "</td>";
                    echo "<td>" . $dato['Editorial'] . "</td>";
                    echo "<td>" . $dato['Categoria'] . "</td>";
                    echo "<td>" . $dato['Año_publicacion'] . "</td>";
                    echo "<td> 
                    <button onclick='editar(". $dato['ISBN'] .")'>Editar</button>
                    <button onclick='eliminar(". $dato['ISBN'] .")'>Eliminar</button> 
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
        function editar(ISBN){
            window.location.href="http://localhost/bibliotech?C=bookController&M=callEdit&id="+ISBN;
        }
        function eliminar(ISBN){
            if(confirm("Realmente quieres eliminar al registro "+ ISBN+"?")){
                //alert("registro eliminado")
                window.location.href="http://localhost/bibliotech?C=bookController&M=delete&id="+ISBN;
            }
        }
    </script>
</section>
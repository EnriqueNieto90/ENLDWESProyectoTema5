<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 0 PDO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        header {
            background: green;
            color: white;
            padding: 15px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        main {
            max-width: 1400px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #ecf0f1;
            margin: 10px 0;
            padding: 15px;
            border-left: 5px solid green;
            border-right: 5px solid green;
            transition: 0.3s;
	    border-radius:8px;
        }
        li:hover {
            background: #d6eaf8;
            border-left: 5px solid purple;
            border-right: 5px solid purple;
        }

        footer{
            margin: auto;
            background-color: green;
            text-align: center;
            height: 150px;
	    color: white;
        }
	main{
	justify-content:center;
	}

    </style>
</head>
<body>
    <header>
        <h1><b>EJERCICIO 0 PDO</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 18/11/2025
            * 0. Mostrar el contenido de las variables superglobales y phpinfo().
            */
            
            //Contenido de la variable $_SERVER-----------------------------------------------
            echo '<h3>Contenido de la variable $_SERVER</h3>';
            echo '<table >';
            echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_SERVER)) {
                foreach ($_SERVER as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_SERVER[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
            }
            echo "</table>";

            //Contenido de la variable $_SESSION-------------------------------------------------------
            echo '<br><br><h3>Contenido de la variable $_SESSION</h3><br>';
            echo '<table >';
            echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_SESSION)) {
                foreach ($_SESSION as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_SESSION[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
            }
            echo "</table>";

            //Contenido de la variable $_COOKIE---------------------------------------------------
            echo '<br><br><h3>Contenido de la variable $_COOKIE</h3><br>';
            echo '<table >';
            echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_COOKIE)) {
                foreach ($_COOKIE as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_COOKIE[' . $variable . ']</td>';
                    echo "<td><pre>" . $resultado . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_COOKIE está vacía.</em></td></tr>";
            }
            echo "</table>";
            echo '<div id="phpinfo">'; // Contenedor para phpinfo()
            phpinfo();
            echo '</div>';
            ?>
        </section>
    </main>

    <footer>
        <caption>
            <a href="/ENLDWESProyectoTema5/indexProyectoTema5.php">Enrique Nieto Lorenzo</a> | 03/11/2025
        </caption>
    </footer>
</body>
</html>


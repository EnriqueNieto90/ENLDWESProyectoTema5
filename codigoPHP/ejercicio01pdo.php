<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1 PDO</title>
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
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        footer i{
            font-size: 2.1rem;
        }
	main{
	justify-content:center;
	}

    </style>
</head>
<body>
    <header>
        <h1><b>EJERCICIO 1 PDO</b></h1>
    </header>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 25/11/2025
            * 1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().
            */

            // Comprobar que se han enviado credenciales con isset. Y comprobar que son correctas
            if (!isset($_SERVER['PHP_AUTH_USER']) ||
                $_SERVER['PHP_AUTH_USER'] != 'admin' || 
                $_SERVER['PHP_AUTH_PW'] != 'paso'){
                // Enviar encabezado de autenticación para solicitar credenciales
                header('WWW-Authenticate: Basic realm="Contenido restringido"');
                header('HTTP/1.0 401 Unauthorized');
                //Si damos a cancelar mostramos mensaje de denegación de acceso
                echo '<h1>Acceso denegado. Se requiere autenticación.</h1>';
                exit;
            } 
            // Si el programa llega aquí, la autenticación tuvo éxito.
            ?>    
        <main>
            <h2>Acceso correcto</h2>
            <p>
                Su usuario de acceso es: <strong><?php echo $_SERVER['PHP_AUTH_USER']; ?></strong>
            </p>
            <p>
                Y su contraseña de acceso es: <strong><?php echo $_SERVER['PHP_AUTH_PW']; ?></strong>
            </p>
        </main>
    <footer>
        <div>
            <h4>2025-26 IES LOS SAUCES. © Todos los derechos reservados.</h4>
        <p><a href="/ENLDWESProyectoTema5/indexProyectoTema5.php">Enrique Nieto Lorenzo</a> Fecha de Actualización : 27-11-2025</p>
        <a href="https://github.com/EnriqueNieto90/ENLDWESLoginLogoffTema5.git" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
    </footer>
</body>
</html>




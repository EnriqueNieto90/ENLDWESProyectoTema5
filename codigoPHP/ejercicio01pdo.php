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
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 18/11/2025
            * 1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().
            */
            //Información de la función header en https://www.php.net/manual/es/function.header.php
            
            $aUsuarios = [
                "enrique" => [hash('sha256', 'paso'), "Enrique Nieto"],
                "heraclio" => [hash('sha256', 'paso'), "Héraclio Borbujo"]
            ];
            
            $usuario=$_SERVER['PHP_AUTH_USER'];
            $passwd = $_SERVER['PHP_AUTH_PW'];
            
            //si no se han enviado las credenciales hay que pedir autenticación
            if (!isset($usuario,$passwd )) {
                header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                header('HTTP/1.0 401 Unauthorized');
                echo "Usuario no reconocido!";
                //es obligatorio exit
                exit;
            }
            //se comprueban las credenciales
            if (!array_key_exists($usuario, $aUsuarios) || $aUsuarios[$usuario][0] !== hash('sha256', $passwd)) {
                header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                header('HTTP/1.0 401 Unauthorized');
                echo "Credenciales incorrectas!";
                //es obligatorio exit
                exit;
                }
            ?>
            
            // Verificar si se han enviado credenciales con isset. Y si son correctas
if (!isset($_SERVER['PHP_AUTH_USER']) ||
    $_SERVER['PHP_AUTH_USER'] != 'admin' || 
    $_SERVER['PHP_AUTH_PW'] != 'paso'){
    // Enviar encabezado de autenticación para solicitar credenciales
    header('WWW-Authenticate: Basic realm="Contenido restringido"');

    header('HTTP/1.0 401 Unauthorized');
    
    // Mostrar mensaje si damos a cancelar
    echo '<h1>Acceso denegado. Se requiere autenticación.</h1>';
    exit;
} 

// Si llega aquí, la autenticación fue exitosa.
?>
        </section>
        
            <h2>Bienvenido/a, <?php echo $aUsuarios[$usuario][1] ?> </h2>
            <h2>Has iniciado sesión correctamente.</h2>

    </main>

    <footer>
        <caption>
            <a href="/ENLDWESProyectoTema5/indexProyectoTema5.php">Enrique Nieto Lorenzo</a> | 03/11/2025
        </caption>
    </footer>
</body>
</html>




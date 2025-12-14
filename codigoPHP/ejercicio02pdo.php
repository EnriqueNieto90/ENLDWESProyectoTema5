<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 2 PDO</title>
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
        <h1><b>EJERCICIO 2 PDO</b></h1>
    </header>
    <main>   
        <section>
        <?php
        /**
         * @author: Enrique Nieto Lorenzo
         * @since 15/11/2025
         * 
         * Ejercicio 2: Desarrollo de un control de acceso con identificación del usuario basado 
         * en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).
         */
        //si no se han enviado las credenciales hay que pedir autenticación

        $usuarioPasswd=$_SERVER['PHP_AUTH_USER'].$_SERVER['PHP_AUTH_PW'];

       if(!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic Realm="Contenido restringido"');
            header('HTTP/1.0 401 Unauthorized');
            echo "Usuario no reconocido!";
            exit; //el programa acaba aqui
        }
        //si se han enviado las credenciales,se comprueban las credenciales, con la base de datos
        //enlace a los datos de conexión
        require_once '../config/confDBPDODes.php';
        try {
            $miDB = new PDO(DNS, USUARIODB, PSWD);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT T01_CodUsuario,T01_Password,T01_DescUsuario  FROM T_01Usuario 
              WHERE T01_CodUsuario= :usuario AND T01_Password = sha2(:passwd,256)";

            $resultado = $miDB->prepare($sql);
            $resultado->execute([
                ':usuario' => $_SERVER['PHP_AUTH_USER'],
                ':passwd' => $usuarioPasswd]);

            $usuarioBD = $resultado->fetch();
            // Si no exite, se vuelve a pedir las credenciales.
            if (!$usuarioBD || $usuarioBD['T01_Password'] !== hash('sha256', $usuarioPasswd)) {
                header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                header('HTTP/1.0 401 Unauthorized');
                echo "Credenciales incorrectas!";
                exit;
            }
        } catch (Exception $ex) {
            echo"Error: " . $ex->getMessage();
            exit;
        }
        ?>
        </section>
            <h2>Bienvenido/a, <?php echo $usuarioBD['T01_DescUsuario'];?> </h2>
            <h2>Has iniciado sesión correctamente.</h2>
    </main>

    <footer>
        <caption>
            <a href="/ENLDWESProyectoTema5/indexProyectoTema5.php">Enrique Nieto Lorenzo</a> | 03/11/2025
        </caption>
    </footer>
</body>
</html>



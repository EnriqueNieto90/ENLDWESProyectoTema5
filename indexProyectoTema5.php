<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TEMA 5 - DESARROLLO DE APLICACIONES WEB</title>
    <link rel="stylesheet" href="./webroot/css/estiloFormularioTabla.css">
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
            max-width: 800px;
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
        img {
            height: 25px;
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
	

    </style>
</head>
<body>
    <header>
        <h1><b>TEMA 5 - DESARROLLO DE APLICACIONES WEB</b></h1>
    </header>
    <main>
        <h2><b>ÍNDICE EJERCICIOS TEMA 5</b></h2>
        
        
        <table >
            <thead>
            <th></th>
            <th>ED</th>
            <th colspan="2">EE</th>
            </thead>
            <tr>
                <td>Script creación de base de datos y usuario</td>
                <td><a href="mostrarcodigo/muestrascript1.php"><img src="webroot/media/images/botoncode.png" alt="boton_code"></a></td>
                <td><a href=""></td>
                <td><a href=""></td>
            </tr>
            <tr>
                <td>Script carga inicial de base de datos</td>
                <td><a href="mostrarcodigo/muestrascript2.php"><img src="webroot/media/images/botoncode.png" alt="boton_code"></a></td>
                <td><a href=""></td>
                <td></td>
            </tr>
            <tr>
                <td>Script borrado de base de datos y usuario</td>
                <td><a href="mostrarcodigo/muestrascript3.php"><img src="webroot/media/images/botoncode.png" alt="boton_code"></a></td>
                <td><a href=""></td>
                <td></td>
            </tr>
        </table>
        <table >
            <thead>
            <th>Num</th>
            <th>Descripción</th>
            <th colspan="2">PDO</th>
            </thead>
            <tr>
                <td>0</td>
                <td>Mostrar el contenido de las variables superglobales y phpinfo().</td>
                <td><a href="codigoPHP/ejercicio00pdo.php"><img src="webroot/media/images/botonplay.png" alt="boton_play"></a></td>
                <td><a href="mostrarcodigo/muestraejercicio00pdo.php"><img src="webroot/media/images/botoncode.png" alt="boton_code"></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header().</td>
                <td><a href="codigoPHP/ejercicio01pdo.php"><img src="webroot/media/images/botonplay.png" alt="boton_play"></a></td>
                <td><a href="mostrarcodigo/muestraejercicio01pdo.php"><img src="webroot/media/images/botoncode.png" alt="boton_code"></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</td>
                <td><a href="codigoPHP/ejercicio02pdo.php"><img src="webroot/media/images/botonplay.png" alt="boton_play"></a></td>
                <td><a href="mostrarcodigo/muestraejercicio02pdo.php"><img src="webroot/media/images/botoncode.png" alt="boton_code"></a></td>
            </tr>
        </table>
    </main>
    <footer>
        <div>
            <h4>2025-26 IES LOS SAUCES. © Todos los derechos reservados.</h4>
        <p><a href="/ENLDWESProyectoDWES/indexProyectoDWES.php">Enrique Nieto Lorenzo</a> Fecha de Actualización : 20-11-2025</p>
        <a href="https://github.com/EnriqueNieto90/ENLDWESLoginLogoffTema5.git" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
    </footer>
</body>
</html>
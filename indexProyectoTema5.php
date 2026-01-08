<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 5 | Enrique Nieto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../webroot/css/all.min.css">
    
    <link rel="stylesheet" href="webroot/css/estilos.css"> 
    <link rel="stylesheet" href="webroot/css/estilosTabla.css"> 
</head>
<body>

    <header class="cabecera-principal">
        <div class="contenedor contenido-cabecera">
            <div class="identidad">
                <a href="../index.html" style="text-decoration:none;">
                    <div class="logo-iniciales">EN</div>
                </a>
                <h1>Enrique Nieto Lorenzo</h1>
            </div>
            <div class="curso-badge" style="background-color: #777BB4; color: white;">
                Tema 5
            </div>
        </div>
    </header>

    <main class="contenedor-principal">
        
        <h2 class="titulo-pagina">Desarrollo de Aplicaciones Web</h2>
        
        <h3 class="subtitulo-tabla">Scripts de Base de Datos</h3>
        <div class="contenedor-tabla">
            <table class="tabla-ejercicios">
                <thead>
                    <tr>
                        <th>Descripción del Script</th>
                        <th class="col-centro">Ver Código</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Script creación de base de datos y usuario</td>
                        <td>
                            <a href="mostrarcodigo/muestrascript1.php" class="btn-accion btn-code" title="Ver Código">
                                <i class="fa-solid fa-file-code"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Script carga inicial de base de datos</td>
                        <td>
                            <a href="mostrarcodigo/muestrascript2.php" class="btn-accion btn-code" title="Ver Código">
                                <i class="fa-solid fa-file-code"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Script borrado de base de datos y usuario</td>
                        <td>
                            <a href="mostrarcodigo/muestrascript3.php" class="btn-accion btn-code" title="Ver Código">
                                <i class="fa-solid fa-file-code"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br><br>

        <h3 class="subtitulo-tabla">Índice de Ejercicios</h3>
        <div class="contenedor-tabla">
            <table class="tabla-ejercicios">
                <thead>
                    <tr>
                        <th class="col-centro">Nº</th>
                        <th>Descripción</th>
                        <th class="col-centro">Ejecutar</th>
                        <th class="col-centro">Código</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td class="col-num">0</td>
                        <td>Mostrar el contenido de las variables superglobales y phpinfo().</td>
                        <td><a href="codigoPHP/ejercicio00pdo.php" class="btn-accion btn-play"><i class="fa-solid fa-play"></i></a></td>
                        <td><a href="mostrarcodigo/muestraejercicio00pdo.php" class="btn-accion btn-code"><i class="fa-solid fa-code"></i></a></td>
                    </tr>

                    <tr>
                        <td class="col-num">1</td>
                        <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header().</td>
                        <td><a href="codigoPHP/ejercicio01pdo.php" class="btn-accion btn-play"><i class="fa-solid fa-play"></i></a></td>
                        <td><a href="mostrarcodigo/muestraejercicio01pdo.php" class="btn-accion btn-code"><i class="fa-solid fa-code"></i></a></td>
                    </tr>

                    <tr>
                        <td class="col-num">2</td>
                        <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header() y uso de tabla "Usuario" (PDO).</td>
                        <td><a href="codigoPHP/ejercicio02pdo.php" class="btn-accion btn-play"><i class="fa-solid fa-play"></i></a></td>
                        <td><a href="mostrarcodigo/muestraejercicio02pdo.php" class="btn-accion btn-code"><i class="fa-solid fa-code"></i></a></td>
                    </tr>

                </tbody>
            </table>
        </div>

    </main>

    <footer class="pie-pagina">
        <div class="contenedor contenido-footer">
            <div class="texto-legal">
                <p>2025-26 IES LOS SAUCES. ©Todos los derechos reservados.</p>
                <p class="autor">Enrique Nieto Lorenzo. Fecha de Actualización: 07-01-2026</p>
            </div>
            <div class="iconos-footer">
                <a href="https://github.com/EnriqueNieto90/ENLDWESProyectoTema5" target="_blank" title="Repo Tema 5"><i class="fa-brands fa-github"></i></a>
                
                <a href="../index.html" title="Inicio"><i class="fa-solid fa-house"></i></a> 
                <a href="../ENLDWESProyectoDWES/indexProyectoDWES.php" title="Volver a DWES"><i class="fa-solid fa-arrow-turn-up"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>
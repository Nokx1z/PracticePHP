<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación PHP - Ejercicios</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        body {
            display: flex;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: #2d3748;
            color: white;
            padding: 20px;
            position: fixed;
            overflow-y: auto;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            width: calc(100% - 260px);
        }

        .sidebar h2 {
            color: #63b3ed;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar li {
            margin: 10px 0;
        }

        .sidebar a {
            color: #e2e8f0;
            text-decoration: none;
            font-size: 14px;
        }

        .endpoint {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12);
        }

        .method {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            margin-right: 10px;
        }

        .get { background-color: #38a169; }
        .post { background-color: #4299e1; }
        .function { background-color: #805ad5; }

        .params {
            margin: 20px 0;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
        }

        .params table {
            width: 100%;
            border-collapse: collapse;
        }

        .params th, .params td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .params th {
            background-color: #f7fafc;
        }

        code {
            background-color: #f7fafc;
            padding: 2px 5px;
            border-radius: 4px;
            font-family: monospace;
            font-size: 14px;
        }

        .example {
            background-color: #2d3748;
            color: #e2e8f0;
            padding: 15px;
            border-radius: 4px;
            margin: 10px 0;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>PHP Ejercicios</h2>
        <ul>
            <li><a href="#ejercicio1">Sistema de Calificaciones</a></li>
            <li><a href="#calcularPromedio">→ calcularPromedio()</a></li>
            <li><a href="#determinarEstado">→ determinarEstado()</a></li>
            <li><a href="#ejercicio2">Sistema de Inventario</a></li>
            <li><a href="#verificarStock">→ verificarStockBajo()</a></li>
            <li><a href="#calcularValor">→ calcularValorInventario()</a></li>
            <li><a href="#estructuras">Estructuras de Datos</a></li>
            <li><a href="#conceptos">Conceptos PHP</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Documentación de Ejercicios PHP</h1>
        <p style="margin: 20px 0;">Versión 1.0</p>

        <div id="ejercicio1" class="endpoint">
            <h2>Sistema de Gestión de Calificaciones</h2>
            <p>Sistema que gestiona las calificaciones de estudiantes, calcula promedios y genera reportes individuales.</p>
            
            <div id="calcularPromedio" class="endpoint">
                <span class="method function">FUNCIÓN</span>
                <strong>calcularPromedio()</strong>
                
                <div class="params">
                    <table>
                        <tr>
                            <th>Parámetro</th>
                            <th>Tipo</th>
                            <th>Descripción</th>
                        </tr>
                        <tr>
                            <td>calificaciones</td>
                            <td><code>array</code></td>
                            <td>Array numérico de calificaciones</td>
                        </tr>
                    </table>
                </div>

                <h4>Ejemplo de Uso:</h4>
                <div class="example">
                    <pre>$calificaciones = [85, 92, 78, 95, 88];
$promedio = calcularPromedio($calificaciones);
// Retorna: 87.6</pre>
                </div>
            </div>

            <div id="determinarEstado" class="endpoint">
                <span class="method function">FUNCIÓN</span>
                <strong>determinarEstado()</strong>
                
                <div class="params">
                    <table>
                        <tr>
                            <th>Parámetro</th>
                            <th>Tipo</th>
                            <th>Descripción</th>
                        </tr>
                        <tr>
                            <td>promedio</td>
                            <td><code>float</code></td>
                            <td>Promedio del estudiante</td>
                        </tr>
                    </table>
                </div>

                <h4>Estados Posibles:</h4>
                <div class="params">
                    <table>
                        <tr>
                            <th>Rango</th>
                            <th>Estado</th>
                        </tr>
                        <tr><td>≥ 90</td><td>Excelente</td></tr>
                        <tr><td>≥ 80</td><td>Muy Bueno</td></tr>
                        <tr><td>≥ 70</td><td>Bueno</td></tr>
                        <tr><td>≥ 60</td><td>Aprobado</td></tr>
                        <tr><td>< 60</td><td>Reprobado</td></tr>
                    </table>
                </div>
            </div>
        </div>

        <div id="ejercicio2" class="endpoint">
            <h2>Sistema de Gestión de Inventario de Videojuegos</h2>
            <p>Sistema que gestiona un inventario de videojuegos, incluyendo stock, precios y categorías por plataforma.</p>

            <div id="verificarStock" class="endpoint">
                <span class="method function">FUNCIÓN</span>
                <strong>verificarStockBajo()</strong>
                
                <div class="params">
                    <table>
                        <tr>
                            <th>Parámetro</th>
                            <th>Tipo</th>
                            <th>Descripción</th>
                        </tr>
                        <tr>
                            <td>juego</td>
                            <td><code>array</code></td>
                            <td>Array asociativo con datos del juego</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="calcularValor" class="endpoint">
                <span class="method function">FUNCIÓN</span>
                <strong>calcularValorInventario()</strong>
                
                <div class="params">
                    <table>
                        <tr>
                            <th>Parámetro</th>
                            <th>Tipo</th>
                            <th>Descripción</th>
                        </tr>
                        <tr>
                            <td>juegos</td>
                            <td><code>array</code></td>
                            <td>Array de juegos con precio y cantidad</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div id="estructuras" class="endpoint">
            <h2>Estructuras de Datos</h2>
            
            <h3>Estudiantes</h3>
            <div class="example">
                <pre>$estudiantes = [
    "María García" => [85, 92, 78, 95, 88],
    "Juan Pérez" => [72, 68, 55, 60, 65]
];</pre>
            </div>

            <h3>Inventario</h3>
            <div class="example">
                <pre>$inventario = [
    "PS5" => [
        [
            "nombre" => "God of War",
            "precio" => 59.99,
            "cantidad" => 15,
            "categoria" => "Acción"
        ]
    ]
];</pre>
            </div>
        </div>

        <div id="conceptos" class="endpoint">
            <h2>Conceptos PHP Utilizados</h2>
            
            <div class="params">
                <table>
                    <tr>
                        <th>Concepto</th>
                        <th>Descripción</th>
                    </tr>
                    <tr>
                        <td>Tipos de Datos</td>
                        <td>string, int, float, array, bool</td>
                    </tr>
                    <tr>
                        <td>Estructuras de Control</td>
                        <td>if/elseif/else, foreach, while, switch</td>
                    </tr>
                    <tr>
                        <td>Arrays</td>
                        <td>Indexados, Asociativos, Multidimensionales</td>
                    </tr>
                    <tr>
                        <td>Funciones PHP</td>
                        <td>array_sum(), count(), number_format(), json_encode()</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html> 
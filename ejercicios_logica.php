<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Lógica PHP</title>
    <style>
        /* ... mantenemos los mismos estilos ... */
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

        .difficulty {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            color: white;
            font-size: 12px;
            margin-left: 10px;
        }

        .facil { background-color: #38a169; }
        .intermedio { background-color: #d69e2e; }
        .dificil { background-color: #e53e3e; }
        .super-dificil { background-color: #805ad5; }

        .endpoint {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12);
        }

        .example {
            background-color: #2d3748;
            color: #e2e8f0;
            padding: 15px;
            border-radius: 4px;
            margin: 10px 0;
            overflow-x: auto;
        }

        .skills {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin: 10px 0;
        }

        .skill {
            background-color: #e2e8f0;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Ejercicios de Lógica PHP</h2>
        <ul>
            <li><h3 style="color: #38a169; margin: 20px 0 10px 0;">Nivel Fácil</h3></li>
            <li><a href="#ejercicio1">1. Serie Fibonacci</a></li>
            <li><a href="#ejercicio2">2. Números Primos</a></li>
            <li><a href="#ejercicio3">3. Palíndromo Numérico</a></li>
            <li><a href="#ejercicio4">4. Factorial</a></li>
            <li><a href="#ejercicio5">5. Ordenamiento Simple</a></li>

            <li><h3 style="color: #d69e2e; margin: 20px 0 10px 0;">Nivel Intermedio</h3></li>
            <li><a href="#ejercicio6">6. Matriz Espiral</a></li>
            <li><a href="#ejercicio7">7. Secuencia Collatz</a></li>
            <li><a href="#ejercicio8">8. Números Armstrong</a></li>
            <li><a href="#ejercicio9">9. Cifrado César</a></li>
            <li><a href="#ejercicio10">10. Triángulo de Pascal</a></li>
            <li><a href="#ejercicio11">11. Números Perfectos</a></li>
            <li><a href="#ejercicio12">12. Anagramas</a></li>
            <li><a href="#ejercicio13">13. Criba de Eratóstenes</a></li>
            <li><a href="#ejercicio14">14. Conversión Numérica</a></li>
            <li><a href="#ejercicio15">15. Subconjuntos</a></li>

            <li><h3 style="color: #e53e3e; margin: 20px 0 10px 0;">Nivel Difícil</h3></li>
            <li><a href="#ejercicio16">16. Torres de Hanoi</a></li>
            <li><a href="#ejercicio17">17. Sudoku Validator</a></li>
            <li><a href="#ejercicio18">18. Laberinto Recursivo</a></li>

            <li><h3 style="color: #805ad5; margin: 20px 0 10px 0;">Nivel Super Difícil</h3></li>
            <li><a href="#ejercicio19">19. N-Reinas</a></li>
            <li><a href="#ejercicio20">20. Problema del Viajante</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Ejercicios de Lógica en PHP</h1>
        <p style="margin: 20px 0;">20 Ejercicios de programación lógica y algoritmos</p>

        <!-- EJERCICIOS FÁCILES -->
        <div id="ejercicio1" class="endpoint">
            <h2>1. Serie Fibonacci <span class="difficulty facil">Fácil</span></h2>
            <p>Generar los primeros N números de la serie Fibonacci.</p>
            <div class="skills">
                <span class="skill">Bucles</span>
                <span class="skill">Arrays</span>
                <span class="skill">Matemáticas</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Función que reciba N como parámetro</li>
                <li>Validar que N sea positivo</li>
                <li>Retornar array con la serie</li>
            </ul>
            <div class="example">
                <pre>function fibonacci($n) {
    if ($n <= 0) return [];
    if ($n == 1) return [0];
    
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib;
}

// Ejemplo de uso:
print_r(fibonacci(6)); // [0, 1, 1, 2, 3, 5]</pre>
            </div>
        </div>

        <div id="ejercicio2" class="endpoint">
            <h2>2. Números Primos <span class="difficulty facil">Fácil</span></h2>
            <p>Verificar si un número es primo y encontrar todos los primos hasta N.</p>
            <div class="skills">
                <span class="skill">Bucles</span>
                <span class="skill">Condicionales</span>
                <span class="skill">Matemáticas</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Función para verificar si un número es primo</li>
                <li>Función para listar primos hasta N</li>
                <li>Optimizar para números grandes</li>
            </ul>
            <div class="example">
                <pre>function esPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// Ejemplo de uso:
var_dump(esPrimo(17)); // true
var_dump(esPrimo(4));  // false</pre>
            </div>
        </div>

        <div id="ejercicio3" class="endpoint">
            <h2>3. Palíndromo Numérico <span class="difficulty facil">Fácil</span></h2>
            <p>Crear una función que determine si un número es palíndromo (se lee igual de izquierda a derecha que de derecha a izquierda).</p>
            <div class="skills">
                <span class="skill">Strings</span>
                <span class="skill">Conversión</span>
                <span class="skill">Lógica</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Manejar números de cualquier longitud</li>
                <li>Validar entrada numérica</li>
                <li>Retornar true/false</li>
            </ul>
            <div class="example">
                <pre>function esPalindromoNumerico($numero) {
    $str = (string)$numero;
    return $str === strrev($str);
}

// Ejemplos de uso:
var_dump(esPalindromoNumerico(12321)); // true
var_dump(esPalindromoNumerico(12345)); // false</pre>
            </div>
        </div>

        <div id="ejercicio4" class="endpoint">
            <h2>4. Factorial <span class="difficulty facil">Fácil</span></h2>
            <p>Calcular el factorial de un número usando tanto iteración como recursividad.</p>
            <div class="skills">
                <span class="skill">Recursividad</span>
                <span class="skill">Bucles</span>
                <span class="skill">Matemáticas</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Implementar versión iterativa</li>
                <li>Implementar versión recursiva</li>
                <li>Manejar casos especiales (0, negativos)</li>
            </ul>
            <div class="example">
                <pre>// Versión iterativa
function factorialIterativo($n) {
    if ($n < 0) return null;
    if ($n <= 1) return 1;
    
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Versión recursiva
function factorialRecursivo($n) {
    if ($n < 0) return null;
    if ($n <= 1) return 1;
    return $n * factorialRecursivo($n - 1);
}</pre>
            </div>
        </div>

        <div id="ejercicio5" class="endpoint">
            <h2>5. Ordenamiento Simple <span class="difficulty facil">Fácil</span></h2>
            <p>Implementar algoritmos de ordenamiento básicos (burbuja y selección) para ordenar un array de números.</p>
            <div class="skills">
                <span class="skill">Arrays</span>
                <span class="skill">Bucles Anidados</span>
                <span class="skill">Comparación</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Implementar ordenamiento burbuja</li>
                <li>Implementar ordenamiento por selección</li>
                <li>Permitir orden ascendente/descendente</li>
            </ul>
            <div class="example">
                <pre>function ordenamientoBurbuja($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}</pre>
            </div>
        </div>

        <!-- EJERCICIOS INTERMEDIOS -->
        <div id="ejercicio6" class="endpoint">
            <h2>6. Matriz Espiral <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Generar una matriz de N x N y llenarla en forma de espiral desde el exterior hacia el centro.</p>
            <div class="skills">
                <span class="skill">Arrays 2D</span>
                <span class="skill">Lógica</span>
                <span class="skill">Bucles</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Crear matriz de tamaño variable</li>
                <li>Llenar en sentido horario</li>
                <li>Mostrar resultado formateado</li>
            </ul>
            <div class="example">
                <pre>function matrizEspiral($n) {
    $matriz = array_fill(0, $n, array_fill(0, $n, 0));
    $valor = 1;
    $inicio = 0;
    $fin = $n - 1;
    
    while ($valor <= $n * $n) {
        // Derecha
        for ($i = $inicio; $i <= $fin; $i++) {
            $matriz[$inicio][$i] = $valor++;
        }
        // Abajo
        for ($i = $inicio + 1; $i <= $fin; $i++) {
            $matriz[$i][$fin] = $valor++;
        }
        // ... completar otros lados
    }
    return $matriz;
}</pre>
            </div>
        </div>

        <div id="ejercicio7" class="endpoint">
            <h2>7. Secuencia Collatz <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Implementar el algoritmo de la Conjetura de Collatz y encontrar la secuencia más larga.</p>
            <div class="skills">
                <span class="skill">Recursividad</span>
                <span class="skill">Arrays</span>
                <span class="skill">Optimización</span>
            </div>
            <h4>Algoritmo:</h4>
            <ul>
                <li>Si n es par: n = n/2</li>
                <li>Si n es impar: n = 3n + 1</li>
                <li>Repetir hasta llegar a 1</li>
            </ul>
            <div class="example">
                <pre>function collatz($n, &$sequence = []) {
    $sequence[] = $n;
    if ($n == 1) return $sequence;
    
    if ($n % 2 == 0) {
        return collatz($n / 2, $sequence);
    } else {
        return collatz(3 * $n + 1, $sequence);
    }
}</pre>
            </div>
        </div>

        <div id="ejercicio8" class="endpoint">
            <h2>8. Números Armstrong <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Encontrar números Armstrong en un rango (un número que es igual a la suma de sus dígitos elevados a la potencia de su número de dígitos).</p>
            <div class="skills">
                <span class="skill">Matemáticas</span>
                <span class="skill">Bucles</span>
                <span class="skill">Funciones</span>
            </div>
            <h4>Ejemplo:</h4>
            <ul>
                <li>153 = 1³ + 5³ + 3³ = 1 + 125 + 27 = 153</li>
            </ul>
            <div class="example">
                <pre>function esArmstrong($numero) {
    $digitos = str_split($numero);
    $potencia = count($digitos);
    $suma = 0;
    
    foreach ($digitos as $digito) {
        $suma += pow($digito, $potencia);
    }
    
    return $suma == $numero;
}</pre>
            </div>
        </div>

        <div id="ejercicio9" class="endpoint">
            <h2>9. Cifrado César <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Implementar el cifrado César, que desplaza cada letra del alfabeto un número determinado de posiciones.</p>
            <div class="skills">
                <span class="skill">Strings</span>
                <span class="skill">ASCII</span>
                <span class="skill">Módulo</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Cifrar y descifrar texto</li>
                <li>Mantener mayúsculas/minúsculas</li>
                <li>Preservar espacios y signos</li>
            </ul>
            <div class="example">
                <pre>function cifrarCesar($texto, $desplazamiento) {
    $resultado = '';
    for ($i = 0; $i < strlen($texto); $i++) {
        if (ctype_alpha($texto[$i])) {
            $ascii = ord(strtoupper($texto[$i]));
            $ascii = (($ascii - 65 + $desplazamiento) % 26) + 65;
            $resultado .= chr($ascii);
        } else {
            $resultado .= $texto[$i];
        }
    }
    return $resultado;
}</pre>
            </div>
        </div>

        <div id="ejercicio10" class="endpoint">
            <h2>10. Triángulo de Pascal <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Generar las primeras N filas del Triángulo de Pascal.</p>
            <div class="skills">
                <span class="skill">Arrays 2D</span>
                <span class="skill">Combinatoria</span>
                <span class="skill">Matemáticas</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Generar N filas del triángulo</li>
                <li>Mostrar formato visual correcto</li>
                <li>Optimizar cálculos</li>
            </ul>
        </div>

        <div id="ejercicio11" class="endpoint">
            <h2>11. Números Perfectos <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Encontrar números perfectos (números que son iguales a la suma de sus divisores propios).</p>
            <div class="skills">
                <span class="skill">Matemáticas</span>
                <span class="skill">Optimización</span>
                <span class="skill">Bucles</span>
            </div>
            <h4>Ejemplo:</h4>
            <ul>
                <li>6 = 1 + 2 + 3 (divisores propios)</li>
                <li>28 = 1 + 2 + 4 + 7 + 14</li>
            </ul>
        </div>

        <div id="ejercicio12" class="endpoint">
            <h2>12. Anagramas <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Verificar si dos palabras son anagramas (contienen exactamente las mismas letras).</p>
            <div class="skills">
                <span class="skill">Strings</span>
                <span class="skill">Arrays</span>
                <span class="skill">Ordenamiento</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Ignorar espacios y puntuación</li>
                <li>No distinguir mayúsculas/minúsculas</li>
                <li>Manejar caracteres especiales</li>
            </ul>
        </div>

        <div id="ejercicio13" class="endpoint">
            <h2>13. Criba de Eratóstenes <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Implementar el algoritmo de la Criba de Eratóstenes para encontrar números primos eficientemente.</p>
            <div class="skills">
                <span class="skill">Arrays</span>
                <span class="skill">Matemáticas</span>
                <span class="skill">Optimización</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Implementar algoritmo eficiente</li>
                <li>Manejar rangos grandes</li>
                <li>Optimizar memoria</li>
            </ul>
        </div>

        <div id="ejercicio14" class="endpoint">
            <h2>14. Conversión Numérica <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Convertir números entre diferentes bases (binario, decimal, hexadecimal, octal).</p>
            <div class="skills">
                <span class="skill">Matemáticas</span>
                <span class="skill">Strings</span>
                <span class="skill">Conversión</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Convertir entre cualquier base</li>
                <li>Validar entrada</li>
                <li>Manejar números negativos</li>
            </ul>
        </div>

        <div id="ejercicio15" class="endpoint">
            <h2>15. Subconjuntos <span class="difficulty intermedio">Intermedio</span></h2>
            <p>Generar todos los posibles subconjuntos de un conjunto dado.</p>
            <div class="skills">
                <span class="skill">Recursividad</span>
                <span class="skill">Arrays</span>
                <span class="skill">Combinatoria</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Generar todos los subconjuntos</li>
                <li>Incluir conjunto vacío</li>
                <li>Manejar elementos duplicados</li>
            </ul>
        </div>

        <!-- EJERCICIOS DIFÍCILES -->
        <div id="ejercicio16" class="endpoint">
            <h2>16. Torres de Hanoi <span class="difficulty dificil">Difícil</span></h2>
            <p>Resolver el problema clásico de las Torres de Hanoi usando recursividad. El objetivo es mover una pila de discos de una torre a otra, usando una torre auxiliar, siguiendo las reglas: solo se puede mover un disco a la vez y nunca un disco mayor puede estar sobre uno menor.</p>
            <div class="skills">
                <span class="skill">Recursividad</span>
                <span class="skill">Arrays</span>
                <span class="skill">Lógica</span>
                <span class="skill">Visualización</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Implementar solución recursiva eficiente</li>
                <li>Mostrar cada movimiento en formato visual</li>
                <li>Calcular número mínimo de movimientos (2^n - 1)</li>
                <li>Validar entrada y manejar errores</li>
                <li>Implementar visualización del estado de las torres</li>
            </ul>
            <h4>Ejemplo de Implementación Completa:</h4>
            <div class="example">
                <pre>class TorresHanoi {
    private $movimientos = 0;
    private $torres = [];

    public function __construct($n) {
        $this->torres = [
            'A' => range($n, 1),
            'B' => [],
            'C' => []
        ];
    }

    public function resolver($n, $origen = 'A', $auxiliar = 'B', $destino = 'C') {
        if ($n == 1) {
            $this->moverDisco($origen, $destino);
            return;
        }
        
        $this->resolver($n - 1, $origen, $destino, $auxiliar);
        $this->moverDisco($origen, $destino);
        $this->resolver($n - 1, $auxiliar, $origen, $destino);
    }

    private function moverDisco($desde, $hasta) {
        $disco = array_shift($this->torres[$desde]);
        array_unshift($this->torres[$hasta], $disco);
        $this->movimientos++;
        $this->mostrarEstado();
    }

    private function mostrarEstado() {
        echo "\nMovimiento {$this->movimientos}:\n";
        foreach ($this->torres as $nombre => $discos) {
            echo "Torre $nombre: " . implode(' ', $discos) . "\n";
        }
    }

    public function obtenerMovimientos() {
        return $this->movimientos;
    }
}</pre>
            </div>
            <h4>Ejemplo de Uso:</h4>
            <div class="example">
                <pre>$hanoi = new TorresHanoi(3);
$hanoi->resolver(3);
echo "\nTotal de movimientos: " . $hanoi->obtenerMovimientos();

// Salida para 3 discos:
// Torre A: 3 2 1
// Torre B: 
// Torre C: 

// ... movimientos intermedios ...

// Torre A: 
// Torre B: 
// Torre C: 3 2 1</pre>
            </div>
        </div>

        <div id="ejercicio17" class="endpoint">
            <h2>17. Sudoku Validator <span class="difficulty dificil">Difícil</span></h2>
            <p>Verificar si una solución de Sudoku es válida. Un Sudoku válido debe tener números del 1 al 9 sin repetir en cada fila, columna y subcuadrícula de 3x3.</p>
            <div class="skills">
                <span class="skill">Arrays 2D</span>
                <span class="skill">Validación</span>
                <span class="skill">Lógica</span>
                <span class="skill">Optimización</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Validar que cada fila contenga números del 1 al 9 sin repetición</li>
                <li>Validar que cada columna contenga números del 1 al 9 sin repetición</li>
                <li>Validar que cada subcuadrícula 3x3 contenga números del 1 al 9 sin repetición</li>
                <li>Optimizar el proceso de validación para grandes conjuntos de datos</li>
                <li>Manejar casos de entrada inválida</li>
            </ul>
            <h4>Ejemplo de Implementación:</h4>
            <div class="example">
                <pre>function validarSudoku($tablero) {
    // Validar filas y columnas
    for ($i = 0; $i < 9; $i++) {
        $fila = array_fill(0, 10, 0);
        $columna = array_fill(0, 10, 0);
        
        for ($j = 0; $j < 9; $j++) {
            // Validar fila
            $numFila = $tablero[$i][$j];
            if ($numFila != 0) {
                if ($fila[$numFila] == 1) return false;
                $fila[$numFila] = 1;
            }
            
            // Validar columna
            $numCol = $tablero[$j][$i];
            if ($numCol != 0) {
                if ($columna[$numCol] == 1) return false;
                $columna[$numCol] = 1;
            }
        }
    }
    
    // Validar subcuadrículas 3x3
    for ($bloque = 0; $bloque < 9; $bloque++) {
        $nums = array_fill(0, 10, 0);
        $filaInicio = floor($bloque / 3) * 3;
        $colInicio = ($bloque % 3) * 3;
        
        for ($i = $filaInicio; $i < $filaInicio + 3; $i++) {
            for ($j = $colInicio; $j < $colInicio + 3; $j++) {
                $actual = $tablero[$i][$j];
                if ($actual != 0) {
                    if ($nums[$actual] == 1) return false;
                    $nums[$actual] = 1;
                }
            }
        }
    }
    
    return true;
}</pre>
            </div>
            <h4>Ejemplo de Uso:</h4>
            <div class="example">
                <pre>$sudoku = [
    [5,3,4,6,7,8,9,1,2],
    [6,7,2,1,9,5,3,4,8],
    [1,9,8,3,4,2,5,6,7],
    [8,5,9,7,6,1,4,2,3],
    [4,2,6,8,5,3,7,9,1],
    [7,1,3,9,2,4,8,5,6],
    [9,6,1,5,3,7,2,8,4],
    [2,8,7,4,1,9,6,3,5],
    [3,4,5,2,8,6,1,7,9]
];

$esValido = validarSudoku($sudoku);
echo $esValido ? "Sudoku válido" : "Sudoku inválido";</pre>
            </div>
        </div>

        <div id="ejercicio18" class="endpoint">
            <h2>18. Laberinto Recursivo <span class="difficulty dificil">Difícil</span></h2>
            <p>Encontrar la salida de un laberinto usando recursividad y backtracking. El laberinto se representa como una matriz donde 0 representa caminos libres, 1 representa paredes, 'S' es la salida y 'E' es la entrada.</p>
            <div class="skills">
                <span class="skill">Recursividad</span>
                <span class="skill">Backtracking</span>
                <span class="skill">Arrays 2D</span>
                <span class="skill">Pathfinding</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Encontrar el camino más corto desde la entrada hasta la salida</li>
                <li>Marcar el camino encontrado con '*' en la solución</li>
                <li>Manejar laberintos sin solución retornando false</li>
                <li>Implementar validación de movimientos (arriba, abajo, izquierda, derecha)</li>
                <li>Optimizar para evitar ciclos infinitos</li>
            </ul>
            <h4>Ejemplo de Implementación:</h4>
            <div class="example">
                <pre>function resolverLaberinto($laberinto) {
    $filas = count($laberinto);
    $columnas = count($laberinto[0]);
    $visitados = array_fill(0, $filas, array_fill(0, $columnas, false));

    function encontrarCamino(&$lab, &$visitados, $x, $y) {
        // Verificar límites y obstáculos
        if ($x < 0 || $x >= count($lab) || $y < 0 || $y >= count($lab[0]) || 
            $lab[$x][$y] == 1 || $visitados[$x][$y]) {
            return false;
        }

        // Marcar como visitado
        $visitados[$x][$y] = true;

        // Verificar si es la salida
        if ($lab[$x][$y] == 'S') {
            $lab[$x][$y] = '*';
            return true;
        }

        // Movimientos: derecha, abajo, izquierda, arriba
        $movimientos = [[0, 1], [1, 0], [0, -1], [-1, 0]];
        
        foreach ($movimientos as [$dx, $dy]) {
            if (encontrarCamino($lab, $visitados, $x + $dx, $y + $dy)) {
                $lab[$x][$y] = '*';
                return true;
            }
        }

        return false;
    }

    // Encontrar la entrada
    $entradaX = $entradaY = 0;
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            if ($laberinto[$i][$j] == 'E') {
                $entradaX = $i;
                $entradaY = $j;
                break 2;
            }
        }
    }

    return encontrarCamino($laberinto, $visitados, $entradaX, $entradaY);
}</pre>
            </div>
            <h4>Ejemplo de Laberinto:</h4>
            <div class="example">
                <pre>$laberinto = [
    ['E', 0, 1, 1],
    [1, 0, 0, 1],
    [1, 1, 0, 1],
    [1, 1, 0, 'S']
];

// Solución:
// E * 1 1
// 1 * 0 1
// 1 1 * 1
// 1 1 * S</pre>
            </div>
        </div>

        <div id="ejercicio19" class="endpoint">
            <h2>19. N-Reinas <span class="difficulty super-dificil">Super Difícil</span></h2>
            <p>Resolver el problema de las N-Reinas usando backtracking. El objetivo es colocar N reinas en un tablero de ajedrez de N×N de manera que ninguna reina pueda atacar a otra (no pueden compartir fila, columna o diagonal).</p>
            <div class="skills">
                <span class="skill">Backtracking</span>
                <span class="skill">Arrays 2D</span>
                <span class="skill">Recursividad</span>
                <span class="skill">Lógica</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Implementar algoritmo de backtracking eficiente</li>
                <li>Validar posiciones seguras considerando filas, columnas y diagonales</li>
                <li>Mostrar todas las soluciones posibles en formato visual</li>
                <li>Optimizar para tableros grandes (N > 8)</li>
                <li>Calcular el número total de soluciones</li>
            </ul>
            <h4>Ejemplo de Implementación:</h4>
            <div class="example">
                <pre>function esSeguro($tablero, $fila, $columna, $n) {
    // Verificar fila
    for ($i = 0; $i < $columna; $i++) {
        if ($tablero[$fila][$i]) return false;
    }

    // Verificar diagonal superior
    for ($i = $fila, $j = $columna; $i >= 0 && $j >= 0; $i--, $j--) {
        if ($tablero[$i][$j]) return false;
    }

    // Verificar diagonal inferior
    for ($i = $fila, $j = $columna; $i < $n && $j >= 0; $i++, $j--) {
        if ($tablero[$i][$j]) return false;
    }

    return true;
}

function resolverNReinas($n) {
    $tablero = array_fill(0, $n, array_fill(0, $n, 0));
    $soluciones = [];
    
    function backtrack(&$tablero, $columna, $n, &$soluciones) {
        if ($columna >= $n) {
            $soluciones[] = array_map(function($fila) {
                return implode(" ", $fila);
            }, $tablero);
            return;
        }

        for ($fila = 0; $fila < $n; $fila++) {
            if (esSeguro($tablero, $fila, $columna, $n)) {
                $tablero[$fila][$columna] = 1;
                backtrack($tablero, $columna + 1, $n, $soluciones);
                $tablero[$fila][$columna] = 0;
            }
        }
    }

    backtrack($tablero, 0, $n, $soluciones);
    return $soluciones;
}</pre>
            </div>
            <h4>Visualización de Solución:</h4>
            <div class="example">
                <pre>0 0 1 0
1 0 0 0
0 0 0 1
0 1 0 0

// Representa una solución para N=4 donde 1 indica la posición de una reina</pre>
            </div>
        </div>

        <div id="ejercicio20" class="endpoint">
            <h2>20. Problema del Viajante <span class="difficulty super-dificil">Super Difícil</span></h2>
            <p>Implementar una solución al problema del viajante (TSP) usando diferentes estrategias. El problema consiste en encontrar la ruta más corta que visita cada ciudad exactamente una vez y regresa a la ciudad de origen.</p>
            <div class="skills">
                <span class="skill">Grafos</span>
                <span class="skill">Optimización</span>
                <span class="skill">Algoritmos</span>
                <span class="skill">Matrices</span>
            </div>
            <h4>Requisitos:</h4>
            <ul>
                <li>Implementar solución por fuerza bruta para conjuntos pequeños</li>
                <li>Implementar heurística greedy (vecino más cercano)</li>
                <li>Visualizar el recorrido en formato de matriz y lista</li>
                <li>Comparar diferentes soluciones y sus tiempos de ejecución</li>
                <li>Manejar distancias asimétricas entre ciudades</li>
            </ul>
            <h4>Ejemplo de Implementación:</h4>
            <div class="example">
                <pre>function tspGreedy($distancias, $ciudadInicial = 0) {
    $n = count($distancias);
    $visitadas = array_fill(0, $n, false);
    $ruta = [$ciudadInicial];
    $visitadas[$ciudadInicial] = true;
    $distanciaTotal = 0;

    for ($i = 0; $i < $n - 1; $i++) {
        $actual = end($ruta);
        $siguiente = -1;
        $minDistancia = PHP_FLOAT_MAX;

        // Encontrar la ciudad más cercana no visitada
        for ($j = 0; $j < $n; $j++) {
            if (!$visitadas[$j] && $distancias[$actual][$j] < $minDistancia) {
                $minDistancia = $distancias[$actual][$j];
                $siguiente = $j;
            }
        }

        $ruta[] = $siguiente;
        $visitadas[$siguiente] = true;
        $distanciaTotal += $minDistancia;
    }

    // Volver a la ciudad inicial
    $distanciaTotal += $distancias[end($ruta)][$ciudadInicial];
    $ruta[] = $ciudadInicial;

    return [
        'ruta' => $ruta,
        'distancia' => $distanciaTotal
    ];
}</pre>
            </div>
            <h4>Ejemplo de Uso:</h4>
            <div class="example">
                <pre>// Matriz de distancias entre ciudades
$distancias = [
    [0, 10, 15, 20],
    [10, 0, 35, 25],
    [15, 35, 0, 30],
    [20, 25, 30, 0]
];

$resultado = tspGreedy($distancias);
echo "Ruta: " . implode(" -> ", $resultado['ruta']) . "\n";
echo "Distancia total: " . $resultado['distancia'];</pre>
            </div>
        </div>

    </div>
</body>
</html> 
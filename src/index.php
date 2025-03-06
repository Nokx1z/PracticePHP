<?php

$name = "John";
$age = 25;


// Salida de datos en php echo
echo "Name: $name <br>"; // Output: Name: John
echo "Age: $age <br>"; // Output: Age: 25


// Funciones en php
function saludar(?string $nombre): ?string { // ?string es un tipo de dato que puede ser una cadena de caracteres o null, fuerza que el parametro sea una cadena de caracteres
    return $nombre ? "Hola $nombre <br>" : null; // Si $nombre es null, devuelve null, si no, devuelve "Hola $nombre"
}

echo saludar("John"); // Output: Hello, John!
echo saludar(null); // Output: null

// Estructuras de control en php

$number = 10;

if ($number > 0) {
    echo "El número es positivo";
} else {
    echo "El número es negativo";
}

//tambien se puede usar el operador ternario

echo $number > 0 ? "El número es positivo <br>" : "El número es negativo";

//tambien se puede usar el operador ternario para asignar un valor a una variable

$result = $number > 0 ? "El número es positivo <br>" : "El número es negativo";
echo $result;

// Switch en php

$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Es lunes";
        break;
    case "Tuesday":
        echo "Es martes";
        break;
    default:
        echo "No es un día válido";
}

// Bucles en php

for ($i = 0; $i < 5; $i++) {
    echo "El número es: $i <br>";
}

// Bucles while en php

$i = 0;
while ($i < 5) {
    echo "El número es: $i <br>";
    $i++;
}

// Bucles do while en php

$i = 0;
do {
    echo "El número es: $i <br>";
    $i++;
} while ($i < 5);

// Bucles foreach en php

$fruits = ["apple", "banana", "cherry"];
foreach ($fruits as $fruit) {
    echo "El fruto es: $fruit <br>";
}



?>

<br>
<br>

<?php

// tipos de datos en php

$name = "John";
$age = 25;
$isStudent = true;
$average = 8.5;
$nullValue = null;

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Is Student: $isStudent <br>";
echo "Average: $average <br>";
echo "Null Value: $nullValue <br>";


// Arreglos en php

$fruits = ["apple", "banana", "cherry"];

echo "Fruits: " . implode(", ", $fruits) . "<br>";


// Asociativos en php

$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];

echo "Person: " . json_encode($person) . "<br>";
?>

<br>
<br>

<?php

// Listas dobles en php

$lista = [
    "0" => [
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Madrid"
    ],
    "1" => [
        "nombre" => "Maria",
        "edad" => 30,
        "ciudad" => "Barcelona"
    ],
    "2" => [
        "nombre" => "Pedro",
        "edad" => 35,
        "ciudad" => "Valencia"
    ],
    "3" => [
        "nombre" => "Ana",
        "edad" => 28,
        "ciudad" => "Santiago"
    ]
];
function mostrarLista($lista) {
    foreach ($lista as $key => $value) {
        echo "Nombre: " . $value["nombre"] . "<br>";
        echo "Edad: " . $value["edad"] . "<br>";
        echo "Ciudad: " . $value["ciudad"] . "<br>";
    }   
}

mostrarLista($lista);

?>

<br>
<br>

<?php

    // Funciones magicas en php
    echo is_array($lista)? "Es un array" . "<br>" : "No es un array" . "<br>"; // Verifica si es un array
    echo is_string($name)? "Es una cadena de caracteres". "<br>" : "No es una cadena de caracteres". "<br>"; // Verifica si es una cadena de caracteres
    echo is_int($age)? "Es un entero". "<br>" : "No es un entero". "<br>"; // Verifica si es un entero
    echo is_float($average)? "Es un flotante". "<br>" : "No es un flotante". "<br>"; // Verifica si es un flotante
    echo is_null($nullValue)? "Es null". "<br>" : "No es null". "<br>"; // Verifica si es null
    echo is_bool($isStudent)? "Es un booleano". "<br>" : "No es un booleano". "<br>"; // Verifica si es un booleano
    echo is_object($person)? "Es un objeto". "<br>" : "No es un objeto". "<br>"; // Verifica si es un objeto
    //is_resource($file); // Verifica si es un recurso
    /*is_file($file); // Verifica si es un archivo
    is_dir($dir); // Verifica si es un directorio
    is_link($link); // Verifica si es un enlace
    is_executable($file); // Verifica si es ejecutable
    is_writable($file); // Verifica si es writable
    is_readable($file); // Verifica si es readable
    is_uploaded_file($file); // Verifica si es un archivo subido
    is_dir($dir); // Verifica si es un directorio
    is_link($link); // Verifica si es un enlace
    is_executable($file); // Verifica si es ejecutable
    is_writable($file); // Verifica si es writable
    is_readable($file); // Verifica si es readable*/
    echo isset($name)? "Existe la variable" . "<br>" : "No existe la variable" . "<br>"; // Verifica si existe una variable
    echo empty($name)? "Esta vacia la variable" . "<br>" : "No esta vacia la variable" . "<br>"; // Verifica si esta vacia una variable
    echo is_numeric($average)? "Es un numero" . "<br>" : "No es un numero" . "<br>"; // Verifica si es un numero
    // Funciones de cadenas de caracteres en php

    $string = "Hello, World!";
    $string2 = "Hello, World!";

    echo strlen($string). "<br>"; // Devuelve la longitud de la cadena
    echo strpos($string, "World"). "<br>"; // Devuelve la posición de la cadena
    echo str_replace("World", "PHP", $string). "<br>"; // Reemplaza la cadena

    // Funciones de arrays en php

    $array = [1, 2, 3, 4, 5];
    $array2 = [6, 7, 8, 9, 10]; // Definimos el segundo array

    echo "Número de elementos: " . count($array) . "<br>"; // Devuelve el número de elementos del array
    
    array_push($array, 6); // Agrega un elemento al array
    echo "Después de push: ";
    print_r($array);
    echo "<br>";
    
    $elementoEliminado = array_pop($array); // Elimina el último elemento del array
    echo "Elemento eliminado con pop: " . $elementoEliminado . "<br>";
    
    $primerElemento = array_shift($array); // Elimina el primer elemento del array
    echo "Primer elemento eliminado con shift: " . $primerElemento . "<br>";
    
    array_unshift($array, 0); // Agrega un elemento al principio del array
    echo "Después de unshift: ";
    print_r($array);
    echo "<br>";

    $segmento = array_slice($array, 0, 3); // Devuelve un segmento del array
    echo "Segmento del array: ";
    print_r($segmento);
    echo "<br>";

    $arrayFusionado = array_merge($array, $array2); // Fusiona dos arrays
    echo "Arrays fusionados: ";
    print_r($arrayFusionado);
    echo "<br>";

    // Funciones de fechas y horas en php

    $date = date("Y-m-d"); // Devuelve la fecha actual
    echo $date. "<br>";

    // Funciones de manejo de errores en php
    try {
        $divisor = 0;
        if ($divisor === 0) {
            throw new DivisionByZeroError("No se puede dividir por cero");
        }
        $resultado = 10 / $divisor;
    } catch (DivisionByZeroError $e) {
        echo "Error matemático: " . $e->getMessage() . "<br>";
    } catch (Exception $e) {
        echo "Error general: " . $e->getMessage() . "<br>";
    }

    // Ejemplo adicional de manejo de errores
    try {
        $numero = 10;
        $texto = "No es un número";
        if (!is_numeric($texto)) {
            throw new TypeError("El valor debe ser numérico");
        }
        $resultado = $numero + $texto;
    } catch (TypeError $e) {
        echo "Error de tipo: " . $e->getMessage() . "<br>";
    }

?>
    



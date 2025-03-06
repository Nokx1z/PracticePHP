<?php
// Sistema de Gestión de Calificaciones

// Función para calcular el promedio de un array de calificaciones
function calcularPromedio(array $calificaciones): float {
    return array_sum($calificaciones) / count($calificaciones);
}

// Función para determinar el estado del estudiante
function determinarEstado(float $promedio): string {
    if ($promedio >= 90) {
        return "Excelente";
    } elseif ($promedio >= 80) {
        return "Muy Bueno";
    } elseif ($promedio >= 70) {
        return "Bueno";
    } elseif ($promedio >= 60) {
        return "Aprobado";
    } else {
        return "Reprobado";
    }
}

// Función para generar reporte del estudiante
function generarReporte(string $nombre, array $calificaciones): void {
    echo "<h3>Reporte de Calificaciones - $nombre</h3>";
    
    // Mostrar todas las calificaciones
    echo "<p>Calificaciones individuales:</p>";
    foreach ($calificaciones as $indice => $calificacion) {
        $numeroExamen = $indice + 1;
        echo "Examen $numeroExamen: $calificacion<br>";
    }
    
    // Calcular y mostrar estadísticas
    $promedio = calcularPromedio($calificaciones);
    $calificacionMaxima = max($calificaciones);
    $calificacionMinima = min($calificaciones);
    $estado = determinarEstado($promedio);
    
    echo "<br>Estadísticas:<br>";
    echo "Promedio: " . number_format($promedio, 2) . "<br>";
    echo "Calificación más alta: $calificacionMaxima<br>";
    echo "Calificación más baja: $calificacionMinima<br>";
    echo "Estado: $estado<br>";
}

// Lista de estudiantes y sus calificaciones
$estudiantes = [
    "María García" => [85, 92, 78, 95, 88],
    "Juan Pérez" => [72, 68, 55, 60, 65],
    "Ana López" => [98, 95, 92, 97, 99]
];

// Procesar cada estudiante
foreach ($estudiantes as $nombre => $calificaciones) {
    generarReporte($nombre, $calificaciones);
    echo "<hr>";
}

// Encontrar el mejor estudiante
$mejorPromedio = 0;
$mejorEstudiante = "";

foreach ($estudiantes as $nombre => $calificaciones) {
    $promedio = calcularPromedio($calificaciones);
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}

echo "<h3>Resumen General</h3>";
echo "Mejor estudiante: $mejorEstudiante con promedio de " . number_format($mejorPromedio, 2);

?>
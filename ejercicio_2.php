<?php
// Sistema de Gestión de Inventario de Videojuegos

// Definir el inventario inicial
$inventario = [
    "PS5" => [
        ["nombre" => "God of War Ragnarök", "precio" => 59.99, "cantidad" => 15, "categoria" => "Acción"],
        ["nombre" => "Spider-Man 2", "precio" => 69.99, "cantidad" => 8, "categoria" => "Acción"],
        ["nombre" => "Final Fantasy XVI", "precio" => 49.99, "cantidad" => 12, "categoria" => "RPG"]
    ],
    "Xbox" => [
        ["nombre" => "Halo Infinite", "precio" => 59.99, "cantidad" => 10, "categoria" => "FPS"],
        ["nombre" => "Forza Horizon 5", "precio" => 49.99, "cantidad" => 5, "categoria" => "Carreras"]
    ],
    "Nintendo" => [
        ["nombre" => "Zelda: Tears of the Kingdom", "precio" => 69.99, "cantidad" => 20, "categoria" => "Aventura"],
        ["nombre" => "Mario Odyssey", "precio" => 39.99, "cantidad" => 3, "categoria" => "Plataformas"]
    ]
];

// Función para verificar stock bajo
function verificarStockBajo(array $juego): bool {
    return $juego["cantidad"] <= 5;
}

// Función para calcular el valor total del inventario por plataforma
function calcularValorInventario(array $juegos): float {
    $total = 0;
    foreach ($juegos as $juego) {
        $total += $juego["precio"] * $juego["cantidad"];
    }
    return $total;
}

// Función para buscar juegos por categoría
function buscarPorCategoria(array $inventario, string $categoria): array {
    $resultados = [];
    foreach ($inventario as $plataforma => $juegos) {
        foreach ($juegos as $juego) {
            if (strtolower($juego["categoria"]) === strtolower($categoria)) {
                $resultados[] = [
                    "plataforma" => $plataforma,
                    "juego" => $juego["nombre"],
                    "precio" => $juego["precio"]
                ];
            }
        }
    }
    return $resultados;
}

// Función para generar reporte de inventario
function generarReporteInventario(array $inventario): void {
    echo "<h2>Reporte de Inventario de Videojuegos</h2>";
    
    foreach ($inventario as $plataforma => $juegos) {
        echo "<h3>Plataforma: $plataforma</h3>";
        echo "<table border='1' style='border-collapse: collapse; margin-bottom: 20px;'>";
        echo "<tr><th>Juego</th><th>Precio</th><th>Cantidad</th><th>Categoría</th><th>Estado</th></tr>";
        
        foreach ($juegos as $juego) {
            $estado = verificarStockBajo($juego) ? "⚠️ Stock Bajo" : "✅ En Stock";
            echo "<tr>";
            echo "<td>{$juego['nombre']}</td>";
            echo "<td>$" . number_format($juego['precio'], 2) . "</td>";
            echo "<td>{$juego['cantidad']}</td>";
            echo "<td>{$juego['categoria']}</td>";
            echo "<td>$estado</td>";
            echo "</tr>";
        }
        
        $valorTotal = calcularValorInventario($juegos);
        echo "<tr><td colspan='5'><strong>Valor Total del Inventario: $" . number_format($valorTotal, 2) . "</strong></td></tr>";
        echo "</table>";
    }
}

// Función para mostrar juegos por rango de precio
function mostrarJuegosPorPrecio(array $inventario, float $minPrecio, float $maxPrecio): void {
    echo "<h3>Juegos entre $" . number_format($minPrecio, 2) . " y $" . number_format($maxPrecio, 2) . "</h3>";
    echo "<ul>";
    foreach ($inventario as $plataforma => $juegos) {
        foreach ($juegos as $juego) {
            if ($juego["precio"] >= $minPrecio && $juego["precio"] <= $maxPrecio) {
                echo "<li>{$juego['nombre']} ({$plataforma}) - $" . number_format($juego['precio'], 2) . "</li>";
            }
        }
    }
    echo "</ul>";
}

// Generar reportes y análisis
generarReporteInventario($inventario);

// Buscar juegos de acción
echo "<h3>Juegos de Acción Disponibles:</h3>";
$juegosAccion = buscarPorCategoria($inventario, "Acción");
foreach ($juegosAccion as $juego) {
    echo "- {$juego['juego']} ({$juego['plataforma']}) - $" . number_format($juego['precio'], 2) . "<br>";
}

// Mostrar juegos en rango de precio
mostrarJuegosPorPrecio($inventario, 40, 60);

// Calcular estadísticas generales
$totalJuegos = 0;
$plataformasMasJuegos = "";
$maxJuegos = 0;

foreach ($inventario as $plataforma => $juegos) {
    $cantidadJuegos = count($juegos);
    $totalJuegos += $cantidadJuegos;
    
    if ($cantidadJuegos > $maxJuegos) {
        $maxJuegos = $cantidadJuegos;
        $plataformasMasJuegos = $plataforma;
    }
}

echo "<h3>Estadísticas Generales</h3>";
echo "Total de juegos diferentes: $totalJuegos<br>";
echo "Plataforma con más variedad: $plataformasMasJuegos ($maxJuegos juegos)<br>";

?>
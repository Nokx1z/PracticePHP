<?php
/**
 * Documentación de Ejercicios Prácticos en PHP
 * ==========================================
 * 
 * Esta documentación cubre dos ejercicios prácticos que demuestran el uso de
 * diferentes características y funcionalidades de PHP.
 * 
 * Autor: Claude AI
 * Versión: 1.0
 */

/**
 * EJERCICIO 1: Sistema de Gestión de Calificaciones
 * ===============================================
 * 
 * Descripción:
 * Sistema que gestiona las calificaciones de estudiantes, calcula promedios
 * y genera reportes individuales.
 * 
 * Características principales:
 * - Manejo de arrays asociativos
 * - Cálculo de promedios
 * - Generación de reportes
 * - Análisis estadístico
 * 
 * Funciones Principales:
 */

/**
 * Calcula el promedio de un array de calificaciones
 * 
 * @param array $calificaciones Array numérico de calificaciones
 * @return float Promedio calculado
 */
function calcularPromedio(array $calificaciones): float {
    return array_sum($calificaciones) / count($calificaciones);
}

/**
 * Determina el estado académico según el promedio
 * 
 * @param float $promedio Promedio del estudiante
 * @return string Estado académico
 */
function determinarEstado(float $promedio): string {
    if ($promedio >= 90) return "Excelente";
    elseif ($promedio >= 80) return "Muy Bueno";
    elseif ($promedio >= 70) return "Bueno";
    elseif ($promedio >= 60) return "Aprobado";
    else return "Reprobado";
}

/**
 * Estructura de Datos:
 * 
 * $estudiantes = [
 *     "Nombre" => [calificacion1, calificacion2, ...],
 *     ...
 * ];
 * 
 * Ejemplo de Uso:
 * $estudiantes = [
 *     "María García" => [85, 92, 78, 95, 88],
 *     "Juan Pérez" => [72, 68, 55, 60, 65]
 * ];
 */

/**
 * EJERCICIO 2: Sistema de Gestión de Inventario de Videojuegos
 * =======================================================
 * 
 * Descripción:
 * Sistema que gestiona un inventario de videojuegos, incluyendo stock,
 * precios y categorías por plataforma.
 * 
 * Características principales:
 * - Arrays multidimensionales
 * - Control de inventario
 * - Búsqueda y filtrado
 * - Reportes formatados
 * 
 * Funciones Principales:
 */

/**
 * Verifica si un juego tiene stock bajo
 * 
 * @param array $juego Array asociativo con datos del juego
 * @return bool True si el stock es bajo
 */
function verificarStockBajo(array $juego): bool {
    return $juego["cantidad"] <= 5;
}

/**
 * Calcula el valor total del inventario
 * 
 * @param array $juegos Array de juegos
 * @return float Valor total del inventario
 */
function calcularValorInventario(array $juegos): float {
    $total = 0;
    foreach ($juegos as $juego) {
        $total += $juego["precio"] * $juego["cantidad"];
    }
    return $total;
}

/**
 * Estructura de Datos:
 * 
 * $inventario = [
 *     "Plataforma" => [
 *         [
 *             "nombre" => string,
 *             "precio" => float,
 *             "cantidad" => int,
 *             "categoria" => string
 *         ],
 *         ...
 *     ],
 *     ...
 * ];
 * 
 * Ejemplo de Uso:
 * $inventario = [
 *     "PS5" => [
 *         ["nombre" => "God of War", "precio" => 59.99, "cantidad" => 15, "categoria" => "Acción"]
 *     ]
 * ];
 */

/**
 * Conceptos PHP Utilizados
 * ====================
 * 
 * 1. Tipos de Datos:
 *    - string: Para textos
 *    - int: Para números enteros
 *    - float: Para números decimales
 *    - array: Para colecciones
 *    - bool: Para valores lógicos
 * 
 * 2. Estructuras de Control:
 *    - if/elseif/else: Para decisiones
 *    - foreach: Para iteración de arrays
 *    - while/do-while: Para bucles
 *    - switch: Para múltiples casos
 * 
 * 3. Funciones:
 *    - Declaración de tipos
 *    - Retorno tipado
 *    - Parámetros tipados
 * 
 * 4. Arrays:
 *    - Indexados
 *    - Asociativos
 *    - Multidimensionales
 * 
 * 5. Funciones de PHP Utilizadas:
 *    - array_sum()
 *    - count()
 *    - number_format()
 *    - strtolower()
 *    - implode()
 *    - json_encode()
 * 
 * Mejores Prácticas Implementadas
 * ===========================
 * 
 * 1. Tipado Fuerte:
 *    - Uso de declaraciones de tipo
 *    - Tipos de retorno explícitos
 * 
 * 2. Organización del Código:
 *    - Funciones modulares
 *    - Nombres descriptivos
 *    - Comentarios explicativos
 * 
 * 3. Manejo de Datos:
 *    - Validación de entrada
 *    - Formato de salida
 *    - Estructuras de datos apropiadas
 * 
 * 4. Presentación:
 *    - HTML formateado
 *    - Tablas estructuradas
 *    - Mensajes claros
 * 
 * Posibles Mejoras
 * =============
 * 
 * Ejercicio 1 (Calificaciones):
 * - Agregar validación de notas (0-100)
 * - Implementar curva de calificación
 * - Añadir persistencia de datos
 * - Generar gráficos estadísticos
 * 
 * Ejercicio 2 (Inventario):
 * - Implementar sistema de ventas
 * - Agregar gestión de proveedores
 * - Incluir historial de precios
 * - Automatizar reorden de stock
 * 
 * @author Claude AI
 * @version 1.0
 * @license MIT
 */
?> 
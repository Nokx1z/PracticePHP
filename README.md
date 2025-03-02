# Ejercicios de Lógica en PHP 🚀

Este repositorio contiene una colección de 20 ejercicios de programación lógica en PHP, organizados por niveles de dificultad. Los ejercicios están diseñados para mejorar las habilidades de programación y comprensión de algoritmos.

## 📚 Estructura del Proyecto

```
.
├── README.md
├── ejercicios_logica.php   # Interfaz web con todos los ejercicios
└── assets/                 # Recursos estáticos (CSS, JS, etc.)
```

## 🎯 Niveles de Dificultad

### Nivel Fácil (5 ejercicios)
1. Serie Fibonacci
2. Números Primos
3. Palíndromo Numérico
4. Factorial
5. Ordenamiento Simple

### Nivel Intermedio (10 ejercicios)
6. Matriz Espiral
7. Secuencia Collatz
8. Números Armstrong
9. Cifrado César
10. Triángulo de Pascal
11. Números Perfectos
12. Anagramas
13. Criba de Eratóstenes
14. Conversión Numérica
15. Subconjuntos

### Nivel Difícil (3 ejercicios)
16. Torres de Hanoi
17. Sudoku Validator
18. Laberinto Recursivo

### Nivel Super Difícil (2 ejercicios)
19. N-Reinas
20. Problema del Viajante

## 🛠️ Tecnologías Utilizadas

- PHP 7.4+
- HTML5
- CSS3
- JavaScript (opcional para mejoras de UI)

## 📋 Requisitos

- Servidor web (Apache/Nginx)
- PHP 7.4 o superior
- Navegador web moderno

## 🚀 Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/DevCappa/ejercicios-logica-php.git
```

2. Coloca los archivos en tu servidor web local:
```bash
# Para XAMPP
cp -r ejercicios-logica-php /path/to/htdocs/
```

3. Accede a través del navegador:
```
http://localhost/ejercicios-logica-php/ejercicios_logica.php
```

## 💡 Características

- Interfaz web intuitiva y responsive
- Código documentado y explicado
- Ejemplos de implementación para cada ejercicio
- Visualización de soluciones
- Categorización por dificultad

## 📝 Registro de Cambios

### Versión 1.0.0 (Fecha: YYYY-MM-DD)
- Implementación inicial con 20 ejercicios
- Diseño de interfaz web responsive
- Documentación completa de ejercicios

### Versión 1.1.0 (Planificada)
- Agregar más ejemplos de uso
- Implementar tests unitarios
- Mejorar visualización de soluciones
- Agregar modo oscuro

## 🤝 Contribución

Las contribuciones son bienvenidas. Para contribuir:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.

## ✨ Agradecimientos

- A todos los contribuidores que ayudan a mejorar estos ejercicios
- A la comunidad PHP por sus valiosos recursos y documentación

## 📞 Contacto

Link del proyecto: [https://github.com/DevCappa/ejercicios-logica-php](https://github.com/DevCappa/ejercicios-logica-php)

## 📌 Notas Adicionales

- Cada ejercicio incluye una descripción detallada del problema
- Se proporcionan ejemplos de código y casos de uso
- Los ejercicios están diseñados para ser educativos y prácticos
- Se recomienda resolver los ejercicios en orden de dificultad

## 📚 Ejemplos de Implementación

### Ejemplo 1: Serie Fibonacci (Nivel Fácil)
```php
function fibonacci($n) {
    if ($n <= 0) return [];
    if ($n == 1) return [0];
    
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib;
}

// Uso:
print_r(fibonacci(6)); // [0, 1, 1, 2, 3, 5]
```

### Ejemplo 2: Cifrado César (Nivel Intermedio)
```php
function cifrarCesar($texto, $desplazamiento) {
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
}

// Uso:
echo cifrarCesar("HOLA MUNDO", 3); // KROD PXQGR
```

### Ejemplo 3: Torres de Hanoi (Nivel Difícil)
```php
class TorresHanoi {
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
}
```

## 🎯 Ejercicios Propuestos

### Nivel Fácil
1. **Contador de Vocales**
   - Crear una función que cuente el número de vocales en una cadena
   - Manejar mayúsculas y minúsculas
   - Opcional: Contar cada vocal por separado

2. **Suma de Dígitos**
   - Sumar todos los dígitos de un número hasta obtener un solo dígito
   - Ejemplo: 789 → 7+8+9=24 → 2+4=6

3. **Invertir Palabras**
   - Invertir el orden de las palabras en una frase
   - Mantener los espacios y signos de puntuación
   - Ejemplo: "Hola Mundo PHP" → "PHP Mundo Hola"

### Nivel Intermedio
1. **Validador de Contraseñas**
   - Verificar longitud mínima (8 caracteres)
   - Debe contener mayúsculas, minúsculas y números
   - Al menos un carácter especial
   - No puede contener espacios

2. **Calculadora de Expresiones**
   - Evaluar expresiones matemáticas básicas
   - Soportar +, -, *, /
   - Manejar paréntesis
   - Ejemplo: "3 + (4 * 2) - 1" = 10

3. **Generador de Patrones**
   - Crear patrones de asteriscos
   - Diferentes formas: triángulo, rombo, etc.
   - Parámetros configurables de tamaño

### Nivel Difícil
1. **Compresión de Texto**
   - Implementar algoritmo de compresión RLE
   - Mostrar ratio de compresión
   - Ejemplo: "AABBBCCCC" → "2A3B4C"

2. **Juego de la Vida**
   - Implementar el Juego de la Vida de Conway
   - Visualización en consola o HTML
   - Reglas configurables

### Nivel Super Difícil
1. **Parser JSON**
   - Implementar un parser JSON básico
   - Soportar objetos anidados
   - Manejar arrays y tipos básicos

## 📝 Guía de Resolución

1. **Análisis del Problema**
   - Leer cuidadosamente el enunciado
   - Identificar entradas y salidas esperadas
   - Listar casos especiales

2. **Diseño de la Solución**
   - Escribir pseudocódigo
   - Identificar estructuras de datos necesarias
   - Planear manejo de errores

3. **Implementación**
   - Seguir buenas prácticas de código
   - Documentar funciones principales
   - Usar nombres descriptivos

4. **Pruebas**
   - Probar casos normales
   - Probar casos límite
   - Verificar manejo de errores

---
⌨️ con ❤️ por [Jose Sequera](https://github.com/DevCappa) 😊DevCappa
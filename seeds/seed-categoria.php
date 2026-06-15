<?php
require __DIR__ . "/../config/conexion.php";

// Eliminar la tabla si existe y volver a crearla
// Vaciar la tabla respetando la FK con articulo
ejecutarConsulta("SET FOREIGN_KEY_CHECKS = 0");
ejecutarConsulta("TRUNCATE TABLE categoria");
ejecutarConsulta("SET FOREIGN_KEY_CHECKS = 1");

echo "Tabla categoria vaciada.\n\n";


// Categorías a insertar
$categorias = [
    [
        'nombre'      => 'Periféricos',
        'descripcion' => 'Mouses, teclados, mousepads y dispositivos de entrada',
    ],
    [
        'nombre'      => 'Monitores',
        'descripcion' => 'Monitores gaming, 4K, ultrawide y de oficina',
    ],
    [
        'nombre'      => 'Auriculares',
        'descripcion' => 'Auriculares gaming, inalámbricos y con cable',
    ],
    [
        'nombre'      => 'Almacenamiento',
        'descripcion' => 'Discos SSD, HDD, pendrives y tarjetas de memoria',
    ],
    [
        'nombre'      => 'Sillas Ergonómicas',
        'descripcion' => 'Sillas gamer y de oficina con soporte ergonómico',
    ],
    [
        'nombre'      => 'Cámaras Web',
        'descripcion' => 'Webcams HD y 4K para streaming, videollamadas y trabajo remoto',
    ],
    [
        'nombre'      => 'Procesadores',
        'descripcion' => 'CPUs Intel y AMD para escritorio y portátiles',
    ],
    [
        'nombre'      => 'Placas de Video',
        'descripcion' => 'Tarjetas gráficas NVIDIA y AMD para gaming y diseño',
    ],
    [
        'nombre'      => 'PC Armadas',
        'descripcion' => 'Computadoras de escritorio ensambladas listas para usar',
    ],
    [
        'nombre'      => 'Memorias RAM',
        'descripcion' => 'Módulos de memoria DDR4 y DDR5 para escritorio y laptop',
    ],
    [
        'nombre'      => 'Placas Madre',
        'descripcion' => 'Motherboards para Intel y AMD en distintos formatos',
    ],
    [
        'nombre'      => 'Fuentes de Alimentación',
        'descripcion' => 'Fuentes ATX certificadas para todo tipo de configuraciones',
    ],
    [
        'nombre'      => 'Gabinetes',
        'descripcion' => 'Cases ATX, micro-ATX y mini-ITX con y sin iluminación RGB',
    ],
    [
        'nombre'      => 'Refrigeración',
        'descripcion' => 'Coolers, ventiladores y sistemas de refrigeración líquida',
    ],
    [
        'nombre'      => 'Parlantes',
        'descripcion' => 'Parlantes de escritorio, bluetooth y sistemas de audio 2.1',
    ],
    [
        'nombre'      => 'Micrófonos',
        'descripcion' => 'Micrófonos USB y XLR para streaming, podcasting y conferencias',
    ],
    [
        'nombre'      => 'Conectividad',
        'descripcion' => 'Routers, adaptadores WiFi, switches y cables de red',
    ],
    [
        'nombre'      => 'Iluminación RGB',
        'descripcion' => 'Tiras LED, controladores y paneles de iluminación para PC',
    ],
    [
        'nombre'      => 'Notebooks',
        'descripcion' => 'Laptops gaming, ultrabooks y portátiles de trabajo',
    ],
    [
        'nombre'      => 'Otros',
        'descripcion' => 'Productos tecnológicos que no corresponden a ninguna categoría específica',
    ],
];

// ─── Insertar ─────────────────────────────────────────────────────────────────
$insertadas = 0;
$errores    = 0;

foreach ($categorias as $cat) {
    $nombre      = addslashes($cat['nombre']);
    $descripcion = addslashes($cat['descripcion']);

    $sql = "INSERT INTO categoria (nombre, descripcion, condicion)
            VALUES ('$nombre', '$descripcion', 1)";

    $resultado = ejecutarConsulta($sql);

    if ($resultado) {
        echo "Insertada: {$cat['nombre']}\n";
        $insertadas++;
    } else {
        echo "Error al insertar: {$cat['nombre']}\n";
        $errores++;
    }
}

// ─── Resumen ──────────────────────────────────────────────────────────────────
echo "\n---------------------------------\n";
echo "Insertadas : $insertadas\n";
echo "Errores    : $errores\n";
echo "---------------------------------\n";

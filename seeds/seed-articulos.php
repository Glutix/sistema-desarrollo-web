<?php
/**
 * APEX TECH - Seed de Artículos
 * Tabla: articulo (dbsistema)
 * Columnas: idarticulo, idcategoria, codigo, nombre, stock, descripcion, imagen, condicion
 *
 * Ejecutar: php seed_articulos.php
 */

require "../config/Conexion.php";

$articulos = [

    // ── 1. Periféricos ────────────────────────────────────────────────────────
    ['idcategoria' => 1, 'codigo' => 'ART-001', 'nombre' => 'Mouse Logitech G502 Hero', 'stock' => 15, 'descripcion' => 'Mouse gaming con sensor HERO 25K, 11 botones programables y peso ajustable'],
    ['idcategoria' => 1, 'codigo' => 'ART-002', 'nombre' => 'Teclado Mecánico Redragon K552', 'stock' => 10, 'descripcion' => 'Teclado mecánico TKL con switches Outemu Red, retroiluminación RGB'],
    ['idcategoria' => 1, 'codigo' => 'ART-003', 'nombre' => 'Mousepad Razer Gigantus V2 XL', 'stock' => 20, 'descripcion' => 'Mousepad extendido con superficie de tela optimizada y base antideslizante'],
    ['idcategoria' => 1, 'codigo' => 'ART-004', 'nombre' => 'Mouse Inalámbrico Logitech MX Master 3', 'stock' => 8, 'descripcion' => 'Mouse inalámbrico de alta precisión con rueda de desplazamiento electromagnética'],

    // ── 2. Monitores ──────────────────────────────────────────────────────────
    ['idcategoria' => 2, 'codigo' => 'ART-005', 'nombre' => 'Monitor LG 27GP850-B 27" 165Hz', 'stock' => 6, 'descripcion' => 'Monitor gaming IPS 1440p, 165Hz, 1ms, compatible con G-Sync y FreeSync'],
    ['idcategoria' => 2, 'codigo' => 'ART-006', 'nombre' => 'Monitor Samsung Odyssey G5 32"', 'stock' => 4, 'descripcion' => 'Monitor curvo VA 1440p, 165Hz con soporte AMD FreeSync Premium'],
    ['idcategoria' => 2, 'codigo' => 'ART-007', 'nombre' => 'Monitor AOC 24G2 24" 144Hz', 'stock' => 12, 'descripcion' => 'Monitor gaming IPS Full HD, 144Hz, 1ms, ideal para esports'],
    ['idcategoria' => 2, 'codigo' => 'ART-008', 'nombre' => 'Monitor Dell UltraSharp U2722D 27"', 'stock' => 5, 'descripcion' => 'Monitor 4K IPS para diseño y trabajo con cobertura 100% sRGB'],

    // ── 3. Auriculares ────────────────────────────────────────────────────────
    ['idcategoria' => 3, 'codigo' => 'ART-009', 'nombre' => 'Auricular HyperX Cloud II', 'stock' => 14, 'descripcion' => 'Auricular gaming con sonido surround 7.1, micrófono extraíble y drivers de 53mm'],
    ['idcategoria' => 3, 'codigo' => 'ART-010', 'nombre' => 'Auricular SteelSeries Arctis 7+', 'stock' => 9, 'descripcion' => 'Auricular inalámbrico con batería de 30 horas y sonido lossless 2.4GHz'],
    ['idcategoria' => 3, 'codigo' => 'ART-011', 'nombre' => 'Auricular Razer BlackShark V2', 'stock' => 11, 'descripcion' => 'Auricular gaming con tecnología THX Spatial Audio y micrófono cardioide'],
    ['idcategoria' => 3, 'codigo' => 'ART-012', 'nombre' => 'Auricular Sony WH-1000XM5', 'stock' => 7, 'descripcion' => 'Auricular inalámbrico con cancelación de ruido líder en su clase'],

    // ── 4. Almacenamiento ─────────────────────────────────────────────────────
    ['idcategoria' => 4, 'codigo' => 'ART-013', 'nombre' => 'SSD Samsung 970 Evo Plus 1TB NVMe', 'stock' => 18, 'descripcion' => 'SSD NVMe M.2 con velocidades de lectura hasta 3500 MB/s'],
    ['idcategoria' => 4, 'codigo' => 'ART-014', 'nombre' => 'SSD Kingston A400 480GB SATA', 'stock' => 22, 'descripcion' => 'SSD SATA 2.5" ideal para reemplazar discos duros tradicionales'],
    ['idcategoria' => 4, 'codigo' => 'ART-015', 'nombre' => 'Disco Rígido Seagate Barracuda 2TB', 'stock' => 16, 'descripcion' => 'HDD 3.5" 7200 RPM para almacenamiento masivo de datos'],
    ['idcategoria' => 4, 'codigo' => 'ART-016', 'nombre' => 'Pendrive Kingston DataTraveler 64GB', 'stock' => 30, 'descripcion' => 'Pendrive USB 3.2 con velocidades de lectura de hasta 200 MB/s'],

    // ── 5. Sillas Ergonómicas ─────────────────────────────────────────────────
    ['idcategoria' => 5, 'codigo' => 'ART-017', 'nombre' => 'Silla Gamer DXRacer Formula Series', 'stock' => 5, 'descripcion' => 'Silla gamer con soporte lumbar, reposabrazos ajustables y reclinación 135°'],
    ['idcategoria' => 5, 'codigo' => 'ART-018', 'nombre' => 'Silla Ergonómica SecretLab Titan Evo', 'stock' => 3, 'descripcion' => 'Silla premium con soporte lumbar magnético y reposacabezas de memory foam'],
    ['idcategoria' => 5, 'codigo' => 'ART-019', 'nombre' => 'Silla de Oficina Ergonómica Markus IKEA', 'stock' => 8, 'descripcion' => 'Silla de oficina con soporte lumbar integrado y asiento transpirable'],
    ['idcategoria' => 5, 'codigo' => 'ART-020', 'nombre' => 'Silla Gamer Cougar Armor One', 'stock' => 6, 'descripcion' => 'Silla gaming con estructura de acero, tapizado PVC y soporte lumbar ajustable'],

    // ── 6. Cámaras Web ────────────────────────────────────────────────────────
    ['idcategoria' => 6, 'codigo' => 'ART-021', 'nombre' => 'Webcam Logitech C920 HD Pro', 'stock' => 13, 'descripcion' => 'Cámara web Full HD 1080p con micrófono estéreo y corrección de luz automática'],
    ['idcategoria' => 6, 'codigo' => 'ART-022', 'nombre' => 'Webcam Razer Kiyo Pro', 'stock' => 7, 'descripcion' => 'Webcam 1080p con sensor CMOS sin comprimir y apertura adaptativa'],
    ['idcategoria' => 6, 'codigo' => 'ART-023', 'nombre' => 'Webcam Logitech StreamCam', 'stock' => 9, 'descripcion' => 'Cámara web 1080p 60fps con conexión USB-C, ideal para streaming'],
    ['idcategoria' => 6, 'codigo' => 'ART-024', 'nombre' => 'Webcam Microsoft LifeCam HD-3000', 'stock' => 17, 'descripcion' => 'Cámara web HD 720p con micrófono con reducción de ruido, plug and play'],

    // ── 7. Procesadores ───────────────────────────────────────────────────────
    ['idcategoria' => 7, 'codigo' => 'ART-025', 'nombre' => 'Procesador Intel Core i5-13600K', 'stock' => 8, 'descripcion' => 'CPU Intel de 13a gen, 14 núcleos, 20 hilos, hasta 5.1GHz sin cooler incluido'],
    ['idcategoria' => 7, 'codigo' => 'ART-026', 'nombre' => 'Procesador AMD Ryzen 5 7600X', 'stock' => 10, 'descripcion' => 'CPU AMD Zen 4, 6 núcleos, 12 hilos, hasta 5.3GHz, socket AM5'],
    ['idcategoria' => 7, 'codigo' => 'ART-027', 'nombre' => 'Procesador Intel Core i9-13900K', 'stock' => 4, 'descripcion' => 'CPU Intel tope de gama, 24 núcleos, 32 hilos, hasta 5.8GHz'],
    ['idcategoria' => 7, 'codigo' => 'ART-028', 'nombre' => 'Procesador AMD Ryzen 9 7950X', 'stock' => 3, 'descripcion' => 'CPU AMD de alto rendimiento, 16 núcleos, 32 hilos, hasta 5.7GHz'],

    // ── 8. Placas de Video ────────────────────────────────────────────────────
    ['idcategoria' => 8, 'codigo' => 'ART-029', 'nombre' => 'Placa de Video NVIDIA RTX 4070', 'stock' => 5, 'descripcion' => 'GPU NVIDIA con 12GB GDDR6X, ray tracing y DLSS 3 para gaming 1440p'],
    ['idcategoria' => 8, 'codigo' => 'ART-030', 'nombre' => 'Placa de Video AMD Radeon RX 7800 XT', 'stock' => 6, 'descripcion' => 'GPU AMD con 16GB GDDR6, ideal para gaming en 1440p y resoluciones altas'],
    ['idcategoria' => 8, 'codigo' => 'ART-031', 'nombre' => 'Placa de Video NVIDIA RTX 4060 Ti', 'stock' => 8, 'descripcion' => 'GPU NVIDIA con 8GB GDDR6, excelente relación precio-rendimiento para 1080p'],
    ['idcategoria' => 8, 'codigo' => 'ART-032', 'nombre' => 'Placa de Video AMD Radeon RX 6600', 'stock' => 9, 'descripcion' => 'GPU AMD con 8GB GDDR6, orientada a gaming Full HD con bajo consumo'],

    // ── 9. PC Armadas ─────────────────────────────────────────────────────────
    ['idcategoria' => 9, 'codigo' => 'ART-033', 'nombre' => 'PC Gamer Apex Entry i5 + RTX 4060', 'stock' => 3, 'descripcion' => 'PC armada con i5-13400F, RTX 4060, 16GB RAM, SSD 500GB, lista para gaming'],
    ['idcategoria' => 9, 'codigo' => 'ART-034', 'nombre' => 'PC Gamer Apex Pro Ryzen 7 + RTX 4070', 'stock' => 2, 'descripcion' => 'PC armada con Ryzen 7 7700X, RTX 4070, 32GB RAM, SSD 1TB NVMe'],
    ['idcategoria' => 9, 'codigo' => 'ART-035', 'nombre' => 'PC Ofimática Apex Office i3', 'stock' => 7, 'descripcion' => 'PC para trabajo y estudio con i3-13100, 8GB RAM, SSD 240GB'],
    ['idcategoria' => 9, 'codigo' => 'ART-036', 'nombre' => 'PC Workstation Apex Creator Ryzen 9', 'stock' => 2, 'descripcion' => 'PC para diseño y edición con Ryzen 9 7950X, RTX 4080, 64GB RAM, SSD 2TB'],

    // ── 10. Memorias RAM ──────────────────────────────────────────────────────
    ['idcategoria' => 10, 'codigo' => 'ART-037', 'nombre' => 'RAM Corsair Vengeance 16GB DDR4 3200MHz', 'stock' => 25, 'descripcion' => 'Kit de memoria DDR4 2x8GB con perfil XMP para overclock automático'],
    ['idcategoria' => 10, 'codigo' => 'ART-038', 'nombre' => 'RAM Kingston Fury Beast 32GB DDR5 5200MHz', 'stock' => 12, 'descripcion' => 'Kit DDR5 2x16GB de alto rendimiento para plataformas Intel y AMD de nueva generación'],
    ['idcategoria' => 10, 'codigo' => 'ART-039', 'nombre' => 'RAM G.Skill Trident Z5 32GB DDR5 6000MHz', 'stock' => 8, 'descripcion' => 'Memoria DDR5 premium con disipador aluminio y perfil XMP 3.0'],
    ['idcategoria' => 10, 'codigo' => 'ART-040', 'nombre' => 'RAM Crucial 8GB DDR4 2666MHz', 'stock' => 30, 'descripcion' => 'Módulo de memoria DDR4 individual, compatible con la mayoría de placas madre'],

    // ── 11. Placas Madre ──────────────────────────────────────────────────────
    ['idcategoria' => 11, 'codigo' => 'ART-041', 'nombre' => 'Placa Madre ASUS ROG Strix B650-A WiFi', 'stock' => 6, 'descripcion' => 'Motherboard AMD AM5 DDR5 con WiFi 6E, PCIe 5.0 y conectividad USB4'],
    ['idcategoria' => 11, 'codigo' => 'ART-042', 'nombre' => 'Placa Madre MSI Pro Z790-A WiFi', 'stock' => 5, 'descripcion' => 'Motherboard Intel LGA1700 DDR5, soporte PCIe 5.0 y conectividad 2.5G LAN'],
    ['idcategoria' => 11, 'codigo' => 'ART-043', 'nombre' => 'Placa Madre Gigabyte B550M DS3H', 'stock' => 10, 'descripcion' => 'Motherboard AMD AM4 micro-ATX económica, soporte DDR4 y PCIe 4.0'],
    ['idcategoria' => 11, 'codigo' => 'ART-044', 'nombre' => 'Placa Madre ASRock B760M Pro RS', 'stock' => 8, 'descripcion' => 'Motherboard Intel LGA1700 micro-ATX con soporte DDR4 y conectividad M.2'],

    // ── 12. Fuentes de Alimentación ───────────────────────────────────────────
    ['idcategoria' => 12, 'codigo' => 'ART-045', 'nombre' => 'Fuente Corsair RM750x 750W 80+ Gold', 'stock' => 10, 'descripcion' => 'Fuente modular 750W certificación 80+ Gold, ventilador silencioso de 135mm'],
    ['idcategoria' => 12, 'codigo' => 'ART-046', 'nombre' => 'Fuente EVGA SuperNOVA 650W 80+ Gold', 'stock' => 8, 'descripcion' => 'Fuente semi-modular 650W con protección contra sobretensión y cortocircuito'],
    ['idcategoria' => 12, 'codigo' => 'ART-047', 'nombre' => 'Fuente Cooler Master MWE 550W 80+ Bronze', 'stock' => 15, 'descripcion' => 'Fuente no modular 550W certificación 80+ Bronze, ideal para equipos de gama media'],
    ['idcategoria' => 12, 'codigo' => 'ART-048', 'nombre' => 'Fuente Seasonic Focus GX-850 850W 80+ Gold', 'stock' => 6, 'descripcion' => 'Fuente totalmente modular 850W con garantía de 10 años'],

    // ── 13. Gabinetes ─────────────────────────────────────────────────────────
    ['idcategoria' => 13, 'codigo' => 'ART-049', 'nombre' => 'Gabinete NZXT H510 ATX Mid Tower', 'stock' => 7, 'descripcion' => 'Gabinete ATX con panel de vidrio templado, gestión de cables integrada y dos ventiladores'],
    ['idcategoria' => 13, 'codigo' => 'ART-050', 'nombre' => 'Gabinete Corsair 4000D Airflow', 'stock' => 6, 'descripcion' => 'Gabinete ATX con diseño optimizado para flujo de aire y panel frontal perforado'],
    ['idcategoria' => 13, 'codigo' => 'ART-051', 'nombre' => 'Gabinete Lian Li PC-O11 Dynamic', 'stock' => 4, 'descripcion' => 'Gabinete premium ATX con doble panel de vidrio templado y soporte para radiadores 360mm'],
    ['idcategoria' => 13, 'codigo' => 'ART-052', 'nombre' => 'Gabinete Thermaltake Versa H18 Micro-ATX', 'stock' => 12, 'descripcion' => 'Gabinete micro-ATX compacto con panel lateral de acrílico y buen flujo de aire'],

    // ── 14. Refrigeración ─────────────────────────────────────────────────────
    ['idcategoria' => 14, 'codigo' => 'ART-053', 'nombre' => 'Cooler CPU Noctua NH-D15', 'stock' => 8, 'descripcion' => 'Cooler de aire dual torre con dos ventiladores NF-A15, uno de los mejores del mercado'],
    ['idcategoria' => 14, 'codigo' => 'ART-054', 'nombre' => 'Refrigeración Líquida Corsair H100i Elite 240mm', 'stock' => 6, 'descripcion' => 'AIO 240mm con bomba de alta potencia, dos ventiladores LL120 RGB y control iCUE'],
    ['idcategoria' => 14, 'codigo' => 'ART-055', 'nombre' => 'Ventilador Lian Li UNI Fan SL120 RGB', 'stock' => 20, 'descripcion' => 'Ventilador 120mm con diseño daisy-chain, RGB direccionable y bajo ruido'],
    ['idcategoria' => 14, 'codigo' => 'ART-056', 'nombre' => 'Refrigeración Líquida NZXT Kraken X63 280mm', 'stock' => 5, 'descripcion' => 'AIO 280mm con pantalla LCD en la bomba, dos ventiladores Aer RGB de 140mm'],

    // ── 15. Parlantes ─────────────────────────────────────────────────────────
    ['idcategoria' => 15, 'codigo' => 'ART-057', 'nombre' => 'Parlantes Logitech Z623 2.1 200W', 'stock' => 9, 'descripcion' => 'Sistema de audio 2.1 con subwoofer de 200W RMS, certificado THX'],
    ['idcategoria' => 15, 'codigo' => 'ART-058', 'nombre' => 'Parlante Bluetooth JBL Charge 5', 'stock' => 14, 'descripcion' => 'Parlante portátil bluetooth con 20 horas de batería, resistente al agua IPX7'],
    ['idcategoria' => 15, 'codigo' => 'ART-059', 'nombre' => 'Parlantes Razer Nommo V2', 'stock' => 6, 'descripcion' => 'Parlantes gaming 2.0 con drivers de 3 pulgadas, THX Spatial Audio y RGB'],
    ['idcategoria' => 15, 'codigo' => 'ART-060', 'nombre' => 'Parlantes Creative Pebble V3', 'stock' => 18, 'descripcion' => 'Parlantes de escritorio compactos con conexión USB-C y salida para auriculares'],

    // ── 16. Micrófonos ────────────────────────────────────────────────────────
    ['idcategoria' => 16, 'codigo' => 'ART-061', 'nombre' => 'Micrófono Blue Yeti USB', 'stock' => 11, 'descripcion' => 'Micrófono USB de condensador con cuatro patrones polares y control de ganancia'],
    ['idcategoria' => 16, 'codigo' => 'ART-062', 'nombre' => 'Micrófono HyperX QuadCast S', 'stock' => 8, 'descripcion' => 'Micrófono USB con iluminación RGB, cuatro patrones polares y filtro anti-pop integrado'],
    ['idcategoria' => 16, 'codigo' => 'ART-063', 'nombre' => 'Micrófono Rode NT-USB Mini', 'stock' => 7, 'descripcion' => 'Micrófono USB compacto de estudio con patrón cardioide y soporte integrado'],
    ['idcategoria' => 16, 'codigo' => 'ART-064', 'nombre' => 'Micrófono Razer Seiren Mini', 'stock' => 13, 'descripcion' => 'Micrófono USB ultracompacto con patrón supercardioide para streaming'],

    // ── 17. Conectividad ──────────────────────────────────────────────────────
    ['idcategoria' => 17, 'codigo' => 'ART-065', 'nombre' => 'Router TP-Link Archer AX73 WiFi 6', 'stock' => 9, 'descripcion' => 'Router WiFi 6 AX5400 con seis antenas y tecnología OFDMA para mayor velocidad'],
    ['idcategoria' => 17, 'codigo' => 'ART-066', 'nombre' => 'Switch TP-Link TL-SG108 8 puertos Gigabit', 'stock' => 12, 'descripcion' => 'Switch no administrado con 8 puertos Gigabit, plug and play sin configuración'],
    ['idcategoria' => 17, 'codigo' => 'ART-067', 'nombre' => 'Adaptador WiFi USB TP-Link Archer T3U', 'stock' => 20, 'descripcion' => 'Adaptador USB WiFi AC1300 de doble banda, compatible con Windows y Mac'],
    ['idcategoria' => 17, 'codigo' => 'ART-068', 'nombre' => 'Cable HDMI 2.1 Ugreen 2 metros', 'stock' => 35, 'descripcion' => 'Cable HDMI 2.1 con soporte 8K 60Hz y 4K 120Hz, compatible con PS5 y Xbox Series X'],

    // ── 18. Iluminación RGB ───────────────────────────────────────────────────
    ['idcategoria' => 18, 'codigo' => 'ART-069', 'nombre' => 'Tira LED RGB Govee 5 metros', 'stock' => 22, 'descripcion' => 'Tira LED RGB con control por app, compatible con Alexa y Google Assistant'],
    ['idcategoria' => 18, 'codigo' => 'ART-070', 'nombre' => 'Panel LED Nanoleaf Shapes Hexagons', 'stock' => 5, 'descripcion' => 'Paneles LED hexagonales con 16 millones de colores y sincronización con música'],
    ['idcategoria' => 18, 'codigo' => 'ART-071', 'nombre' => 'Controlador RGB NZXT Hue 2', 'stock' => 8, 'descripcion' => 'Controlador de iluminación RGB para interior de gabinete, compatible con CAM'],
    ['idcategoria' => 18, 'codigo' => 'ART-072', 'nombre' => 'Tira LED Corsair iCUE LS100 Kit Starter', 'stock' => 7, 'descripcion' => 'Kit de tiras LED para escritorio con sincronización iCUE y reacción al contenido en pantalla'],

    // ── 19. Notebooks ─────────────────────────────────────────────────────────
    ['idcategoria' => 19, 'codigo' => 'ART-073', 'nombre' => 'Notebook ASUS ROG Zephyrus G14', 'stock' => 4, 'descripcion' => 'Laptop gaming 14" con Ryzen 9, RTX 4060, pantalla 165Hz y batería de larga duración'],
    ['idcategoria' => 19, 'codigo' => 'ART-074', 'nombre' => 'Notebook Lenovo IdeaPad 5 15"', 'stock' => 7, 'descripcion' => 'Laptop para trabajo con Ryzen 5, 16GB RAM, SSD 512GB y pantalla Full HD'],
    ['idcategoria' => 19, 'codigo' => 'ART-075', 'nombre' => 'Notebook MSI Stealth 15 i7 RTX 4070', 'stock' => 3, 'descripcion' => 'Laptop gaming ultradelgada con i7 de 13a gen, RTX 4070 y pantalla QHD 240Hz'],
    ['idcategoria' => 19, 'codigo' => 'ART-076', 'nombre' => 'Notebook HP Pavilion 15 i5', 'stock' => 8, 'descripcion' => 'Laptop de uso general con i5 de 12a gen, 8GB RAM, SSD 256GB y pantalla Full HD'],

    // ── 20. Otros ─────────────────────────────────────────────────────────────
    ['idcategoria' => 20, 'codigo' => 'ART-077', 'nombre' => 'Soporte para Monitor Dual Brateck', 'stock' => 10, 'descripcion' => 'Brazo articulado para dos monitores de hasta 27", con ajuste de altura y rotación'],
    ['idcategoria' => 20, 'codigo' => 'ART-078', 'nombre' => 'UPS APC Back-UPS 600VA', 'stock' => 8, 'descripcion' => 'Sistema de alimentación ininterrumpida con 600VA, protege equipos ante cortes de luz'],
    ['idcategoria' => 20, 'codigo' => 'ART-079', 'nombre' => 'Limpiador de Pantallas Kit Ugreen', 'stock' => 40, 'descripcion' => 'Kit de limpieza para pantallas con líquido y paño de microfibra'],
    ['idcategoria' => 20, 'codigo' => 'ART-080', 'nombre' => 'Organizador de Cables Velcro 10 unidades', 'stock' => 50, 'descripcion' => 'Bridas de velcro reutilizables para ordenar cables de escritorio y PC'],
];

// ─── Insertar ─────────────────────────────────────────────────────────────────
$insertados = 0;
$omitidos   = 0;
$errores    = 0;

foreach ($articulos as $art) {
    // Verificar si ya existe por nombre (tiene UNIQUE INDEX)
    $check = ejecutarConsultaSimpleFila(
        "SELECT idarticulo FROM articulo WHERE nombre = '{$art['nombre']}'"
    );

    if ($check) {
        echo "Ya existe: {$art['nombre']}\n";
        $omitidos++;
        continue;
    }

    $nombre      = addslashes($art['nombre']);
    $descripcion = addslashes($art['descripcion']);
    $codigo      = addslashes($art['codigo']);

    $sql = "INSERT INTO articulo (idcategoria, codigo, nombre, stock, descripcion, imagen, condicion)
            VALUES ('{$art['idcategoria']}', '$codigo', '$nombre', '{$art['stock']}', '$descripcion', NULL, 1)";

    $resultado = ejecutarConsulta($sql);

    if ($resultado) {
        echo "Insertado: {$art['nombre']}\n";
        $insertados++;
    } else {
        echo "Error al insertar: {$art['nombre']}\n";
        $errores++;
    }
}

// ─── Resumen ──────────────────────────────────────────────────────────────────
echo "\n---------------------------------\n";
echo "Insertados : $insertados\n";
echo "Omitidos   : $omitidos\n";
echo "Errores    : $errores\n";
echo "---------------------------------\n";
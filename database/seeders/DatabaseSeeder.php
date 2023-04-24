<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\producto;
use App\Models\rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //comando para los seeders "php artisan db:seed"
        $roles = new rol();
        $roles->tipo_rol = 'Administrador';
        $roles->save();
        
         $proveedor = new provedor();
        $proveedor->nombrep = 'brandon';
        $proveedor->correo = 'brandon@gmail.com';
        $proveedor->rfc = '13231';
        $proveedor->direccion = 'fraccionamiento san mrtin 1';
        $proveedor->save();


        $marca = new marca();
        $marca->nombre = 'nike';
        $marca->origen = 'china';
        $marca->id_provedor = '1';
        $marca->save();

        $roles = new rol();
        $roles->tipo_rol = 'Cliente';
        $roles->save();

        //producto 1
        $producto = new producto();
        $producto->nombre_producto = 'Surface Laptop Go';
        $producto->identificador = 'laptop';
        $producto->descripcion_producto = '<h1>Microsoft - Surface Laptop Go Pantalla táctil de 12.4", Intel Core i5, 8 GB de memoria, SSD de 256 GB, color gris plata (Platinum)</h1>
        <br>
        <p>Descripción del producto</p><br>
        -Compatible con la Pluma para Surface<br>
        -cámara HD mejorada y puertos USB-C y USB-A integrados, Surface Connect y entrada para audífonos.<br>
        -Teclado de tamaño completo y un panel táctil de precisión.<br>
        -Botón de encendido por huella digital con Windows Hello y el inicio de One Touch, permite acceder a tus archivos de forma rápida y segura.<br>
        -Micrófonos Studio Mics y altavoces Omnisonic integrados.<br>
        -Incluye Mouse Bluetooth.<br>';
        $producto->precio = '13800';
        $producto->existentes = '62';
        $producto->imagen = 'https://http2.mlstatic.com/D_NQ_NP_618978-MLA52663080646_112022-O.jpg';
        $producto->estado_producto = 'Oferta';
        $producto->id_marca= 1;
        $producto->save();

        //producto 2
        $producto = new producto();
        $producto->nombre_producto = 'Black Shark 5 Pro';
        $producto->identificador = 'Telefono-Celular';
        $producto->descripcion_producto = '<h1>Black Shark 5 Pro Teléfono para Juegos 5G Versión, teléfono Inteligente Snapdragon 8 Gen 1, batería de 4650 mAh, gatillos emergentes magnéticos, 6.67" AMOLED 144 Hz, Dual Sim, 8 + 128 GB, Negro</h1>
        <br>
        <p>Descripción del producto</p><br>
        *【Snapdragon 8 Gen 1, 8GB 128GB, LPDDR5 6400MHz RAM, ROM: UFS3.1 mejorado, NFC multifuncional】 Procesador Qualcomm Snapdragon 8 Gen 1, Performance Evolution. El teléfono para juegos Black Shark 5 Pro 5G cuenta con una CPU y GPU completamente actualizadas en un proceso de 4 nm, ofrece un rendimiento inigualable aún más potente y duradero.<br>
        *【Pantalla OLED de 6,67 pulgadas, pantalla E-Sports de 144 Hz, profundidad de color de 10 bits】 La pantalla OLED flexible de 6,67" de Black Shark 5 Pro con una frecuencia de actualización de 144 Hz, proceso COP con marco más estrecho. ofrece una experiencia visual ultra suave y colorida en cada juego o uso diario.<br>
        *【Disparadores emergentes magnéticos, juegos móviles a nivel de consola】 El teléfono para juegos Black Shark 5 Pro está equipado con la segunda generación de disparadores emergentes magnéticos. Además, los 7 niveles de accionamiento magnético brindan una experiencia de alternancia suave y estable. Microinterruptores de nivel de juego incorporados, 
        que tienen un toque nítido y una respuesta de disparo sensible.<br>';
        $producto->precio = '15000';
        $producto->existentes = '3';
        $producto->imagen = 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQlRmlbn96G_CUtXZfpataTmVN4yLA3ALzD9CMyABxt8h7AhAcvkedWRZkokN6hdVfjJISDEYkTQWtbVcirge8H9wRRtpvCDg';
        $producto->estado_producto = 'Oferta';
        $producto->id_marca= 1;
        $producto->save();

        //producto 3
        $producto = new producto();
        $producto->nombre_producto = 'Smart TV';
        $producto->identificador = 'pantalla';
        $producto->descripcion_producto = '<h1>onn Pantalla de 32" LED Smart TV HD ROKU 720P Compatible con Google Assistant desde Apps Mod. 100012589 (Reacondicionado)</h1>
        <br>
        <p>Descripción del producto</p><br>
        El producto está reacondicionado, es totalmente funcional y está en excelentes condiciones. Respaldado por la garantía de 90 días de Amazon Renewed.<br>
        - Los proveedores cualificados de Amazon han inspeccionado, probado y limpiado profesionalmente este producto usado.<br>
        - Este producto está en "Condición excelente". No muestra signos de daños cosméticos visibles desde una distancia de 30 centímetros.<br>
        - Los productos con baterías superarán el 80 % de capacidad en comparación con uno nuevo. Es posible que los accesorios no sean originales, pero serán compatibles y totalmente operativos. Es posible que el producto venga en una caja genérica.<br>
        - Este producto viene con una garantía de 90 días respaldada por el proveedor.<br>';
        $producto->precio = '3800';
        $producto->existentes = '32';
        $producto->imagen = 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:good/mg/gm/3pp/asr/c32dba69-1e55-40fc-89db-b53959d734ee.5cd5e0b7dbc605f59fc86e9cd15d6250.jpeg?odnHeight=2000&odnWidth=2000&odnBg=ffffff';
        $producto->estado_producto = 'Oferta';
        $producto->id_marca= 1;
        $producto->save();

        //producto 4
        $producto = new producto();
        $producto->nombre_producto = 'HUAWEI Pro Max';
        $producto->identificador = 'monitor';
        $producto->descripcion_producto = '<h1>HUAWEI Display- Monitor de 23.8", Resolución 1920 * 1080, Relación de Aspecto 16:9,Color Negro</h1>
        <br>
        <p>Descripción del producto</p><br>
        *Tamaño de la pantalla:	24 Pulgadas<br>
        *Resolución máxima de la pantalla: 1920 x 1080<br>
        *Marca:	HUAWEI<br>
        *Frecuencia de actualización: 60<br>
        *Tecnología de conectividad: VGA, HDMI<br><br>
        Acerca de este artículo<br>
        Pantalla de 23,8", 1080P Full HD FullView<br>
        90% relación cuerpo-pantalla<br>
        Borde ultrafino de 5,7 mm<br>
        178° ángulo de visión<br>';
        $producto->precio = '3149';
        $producto->existentes = '10';
        $producto->imagen = 'https://www.eluniverso.com/resizer/ymW4n6craHStyrORbGU6E-r2VkA=/1155x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/VTHGTIAK7VGW5OZ2243GYA2U6I.jpg';
        $producto->estado_producto = 'Oferta';
        $producto->id_marca= 1;
        $producto->save();

        //producto 5
        $producto = new producto();
        $producto->nombre_producto = 'Hip Hop Youth Hoody';
        $producto->identificador = 'sueter-sudadera';
        $producto->descripcion_producto = '<h1>Unisex 3D Realistic Hoodies Front Pocket Pullover Sweatshirt Hip Hop Youth Hoody S-3XL</h1>
        <br>
        <p>Descripción del producto</p><br>
        Consejos de tamaño: Corre pequeño, los hombres adultos piden 1 talla más, las mujeres y los adolescentes piden el tamaño normal.<br>
        Cierre de sudaderas con capucha unisex (adultos, adolescentes)<br>
        🔥Sudaderas con estampado divertido y genial: totalmente impresas con patrones 3D coloridos y únicos: sudadera con capucha Taco Cat, sudaderas con capucha Galaxy, sudadera con capucha Tie Dye, ropa de hierba, sudadera con capucha Flamingo, camisa con el pecho peludo, sudadera 80S 90S, sudadera Lion, sudadera con capucha Wolf, sudadera con capucha Geometry , Sudaderas de carne, Sudaderas Trippy, Suéter navideño feo<br>
        🔥 Diseño de bolsillos grandes con cordón ajustable: sudadera con capucha de tela liviana con cordón para bloquear el calor alrededor del cuello y la cabeza. Gran bolsillo canguro para calentar la mano y conveniente para guardar cosas esenciales. Las mangas acanaladas y el dobladillo desgarrado ayudan a mantener el calor y ofrecen un aspecto moderno.<br>';
        $producto->precio = '500';
        $producto->existentes = '9';
        $producto->imagen = 'https://ae01.alicdn.com/kf/H91e7847d669946a694d6793c991d24d65/3-To-14-Years-Kids-Hoodie-Rapper-6IX9INE-3D-Printed-Hoodies-Sweatshirt-Boy-Girls-Hip-Hop.jpg_Q90.jpg_.webp';
        $producto->estado_producto = 'Moda';
        $producto->id_marca= 1;
        $producto->save();

        //producto 6
        $producto = new producto();
        $producto->nombre_producto = 'L ANGE HAIR Le Volume';
        $producto->identificador = 'secador-cepillo-peine';
        $producto->descripcion_producto = '<h1>L ANGE HAIR Le Volume</h1>
        <br>
        <p>Descripción del producto</p><br>
        Cepillo secador de titanio 2 en 1 | Cepillo secador de aire caliente de 1.57 pulgadas en uno con barril ovalado | Estilizador de cabello para resultados suaves y sin encrespamiento para todo tipo de cabello<br>';
        $producto->precio = '899';
        $producto->existentes = '17';
        $producto->imagen = 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRs14zqfOOYl9hkwso8K-ydihT1R85prAaBlaFUbNIpsLNJt0epl4uFfI3IcAGIuaXrcepHAihS0m4&usqp=CAc';
        $producto->estado_producto = 'Descuento';
        $producto->id_marca= 1;
        $producto->save();

        //producto 7
        $producto = new producto();
        $producto->nombre_producto = 'BISSELL SpotClean Pet Pro Limpiador de alfombras';
        $producto->identificador = 'secadora';
        $producto->descripcion_producto = '<h1>BISSELL SpotClean Pet Pro </h1>
        <br>
        <p>Descripción del producto</p><br>
        <p>Marca: Bissell</p><br>
        <p>Características especiales: Portátil, Limpieza impecable, Compacto</p><br>
        <p>Factor de forma: Bote</p><br>
        <p>Color: Grapevine Purple Black</p><br>
        <p>Tipo de filtro: Cartucho</p><br>';
        $producto->precio = '3000';
        $producto->existentes = '32';
        $producto->imagen = 'https://http2.mlstatic.com/D_NQ_NP_2X_712157-MLM51812135262_102022-F.webp';
        $producto->estado_producto = 'Descuento';
        $producto->id_marca= 1;
        $producto->save();

        //producto 8
        $producto = new producto();
        $producto->nombre_producto = 'Lenovo - 2022 - IdeaPad 3';
        $producto->identificador = 'IdeaPad-laptop';
        $producto->descripcion_producto = '<h1>Lenovo - 2022 - IdeaPad 3</h1>
        <br>
        <p>Descripción del producto</p><br>
        <p>Computadora portátil de viaje - AMD Ryzen 5 - Pantalla FHD de 17.3 pulgadas - Memoria de 8 GB - Almacenamiento de 512 GB - Windows 11 Home</p><br>';
        $producto->precio = '19899';
        $producto->existentes = '17';
        $producto->imagen = 'https://m.media-amazon.com/images/I/714zwulp9QL._AC_SX679_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 9
        $producto = new producto();
        $producto->nombre_producto = 'LEGO Friends Friendship Tree';
        $producto->identificador = 'lego-LEGO-Lego-juguetes';
        $producto->descripcion_producto = '<h1>LEGO Friends Friendship Tree</h1>
        <br>
        <p>Descripción del producto</p><br>
        <p>Juego de juguetes de construcción para niños, niñas y niños a partir de 8 años (1114 piezas)</p><br>';
        $producto->precio = '749';
        $producto->existentes = '618';
        $producto->imagen = 'https://m.media-amazon.com/images/I/81jaWJol2qL._AC_SX569_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 10
        $producto = new producto();
        $producto->nombre_producto = 'Revontulij Billeteras delgadas';
        $producto->identificador = 'billetera-cartera';
        $producto->descripcion_producto = '<h1>Revontulij Billeteras delgadas</h1>
        <br>
        <p>Descripción del producto</p><br>
        <p>Marca: Revontulij</p><br>
        <p>Color: Negro</p><br>
        <p>Material: Cuero sintético</p><br>
        <p>Material: Cuero sintético</p><br>
        <p>Características especiales: minimalistas con bloqueo RFID para hombres y mujeres, bloqueo con soporte para AirTag, Negro -, Minimalista</p><br>';
        $producto->precio = '360';
        $producto->existentes = '64';
        $producto->imagen = 'https://m.media-amazon.com/images/I/718crFaSpUL._AC_SL1500_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 11
        $producto = new producto();
        $producto->nombre_producto = 'Collares con iniciales';
        $producto->identificador = 'collar con iniciales';
        $producto->descripcion_producto = '<h1>Collares con iniciales</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>collar de cadena con clip chapado en oro de 14 quilates, collar de gargantilla con inicial, collar de oro en capas para mujer</p><br>
    ';
        $producto->precio = '429';
        $producto->existentes = '14';
        $producto->imagen = 'https://m.media-amazon.com/images/I/61P6vI1TmbL._SY500_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 12
        $producto = new producto();
        $producto->nombre_producto = 'Chaquetas Trucker de sherpa';
        $producto->identificador = 'chamarras-chaqueta';
        $producto->descripcion_producto = '<h1>Levi s - Chaquetas Trucker de sherpa originales para mujer (estándar y plus)s</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>51% algodón, 47% poliéster, 2% licra</p><br>
    <p>Imported</p><br>
    <p>Cierre de Broche de presión</p><br>
    <p>Lavado a máquina</p><br>
    <p>Mezclilla no elástica con silueta recta</p><br>
    <p>Las características de la chaqueta de mezclilla para mujer incluyen bolsillos ribeteados en los laterales; bolsillos en el pecho con solapas de botón y pestaña Signature Levi s</p><br>
    <p>Esta chaqueta Sherpa para mujer tiene un cuello forrado y solapa frontal a presión</p><br>
    ';
        $producto->precio = '1501';
        $producto->existentes = '31';
        $producto->imagen = 'https://i.etsystatic.com/11332042/r/il/65261e/3307178544/il_570xN.3307178544_a2av.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 13
        $producto = new producto();
        $producto->nombre_producto = 'Teva Ember Commute Impermeable';
        $producto->identificador = 'calzado-tenis-zapatos-zapatillas';
        $producto->descripcion_producto = '<h1>Teva Ember Commute Impermeable</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>Hecho en EE. UU. o importado</p><br>
    <p>Suela de Etilvinilacetato</p><br>
    <p>El eje mide aproximadamente Knöchel desde el arco</p><br>
    ';
        $producto->precio = '1667';
        $producto->existentes = '16';
        $producto->imagen = 'https://m.media-amazon.com/images/I/716SPIyvZpL._AC_SL1500_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 14
        $producto = new producto();
        $producto->nombre_producto = 'Juego de baberos de rizo para bebés';
        $producto->identificador = 'baberos';
        $producto->descripcion_producto = '<h1>The Peanutshell Juego de baberos de rizo para bebés niños o niñas</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>paquete de 8 unisex para alimentar, dentición y babear</p><br>
    <p>Color: Varios colores</p><br>
    <p>Material: Mezcla de algodón, algodón</p><br>
    <p>Marca: The Peanutshell</p><br>
    <p>Tipo de cierre: Botón</p><br>
    <p>Patrón: Dibujos animados</p><br>';
        $producto->precio = '499';
        $producto->existentes = '180';
        $producto->imagen = 'https://m.media-amazon.com/images/I/81XTawy0BQL._AC_UX522_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 15
        $producto = new producto();
        $producto->nombre_producto = 'vanva [Protección de grado militar]';
        $producto->identificador = 'soporte';
        $producto->descripcion_producto = '<h1>vanva [Protección de grado militar] Soporte universal de ventilación de automóvil</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>Soporte universal de ventilación de automóvil, [Teléfonos grandes y fundas gruesas] Soporte para teléfono celular para automóvil, abrazadera manos libres, vehículo compatible con todos los iPhone de Apple</p><br>
    ';
        $producto->precio = '300';
        $producto->existentes = '18';
        $producto->imagen = 'https://m.media-amazon.com/images/I/71EA+MiatFL._AC_SS450_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 16
        $producto = new producto();
        $producto->nombre_producto = 'DR. BRACE';
        $producto->identificador = 'Dr. Brace-Rodillera';
        $producto->descripcion_producto = '<h1>Dr. Brace (Orion, pequeño)</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>Rodillera profesional para el dolor de rodilla, con estabilizadores laterales y almohadillas de gel de rótula para un máximo apoyo y recuperación rápida, para hombres y mujeres (consulta el video de la guía de tallas)</p><br>
    ';
        $producto->precio = '1405';
        $producto->existentes = '30';
        $producto->imagen = 'https://m.media-amazon.com/images/I/71RUyDtreVL._SX425_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 17
        $producto = new producto();
        $producto->nombre_producto = 'SHEJISI';
        $producto->identificador = 'espejos-SHEJISI-shejisi';
        $producto->descripcion_producto = '<h1>SHEJISI El espejo retrovisor universal para motocicleta ATV</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>El espejo retrovisor universal para motocicleta ATV es adecuado para manubrios de 7/8 pulgadas, compatible con Polaris Sportsman Scrambler, Can-Am Outlander, Honda Grom TRX, Kawasaki Ninja, KYMCO, Yamaha, Suzuki</p><br>
    ';
        $producto->precio = '1850';
        $producto->existentes = '56';
        $producto->imagen = 'https://m.media-amazon.com/images/I/71va9uY2cgL._AC_SX425_PIbundle-2,TopRight,0,0_SH20_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 18
        $producto = new producto();
        $producto->nombre_producto = 'Mochila para portátil';
        $producto->identificador = 'mochila-Mochila';
        $producto->descripcion_producto = '<h1>Mochila para portátil</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>Mochila para portátil de viaje, para negocios, antirrobo, delgada, duradera, con puerto de carga USB, resistente al agua, para colegio, para mujeres y hombres, se adapta a portátiles de 15.6 pulgadas 15.6 pulgadas</p><br>
    ';

        $producto->precio = '700';
        $producto->existentes = '80';
        $producto->imagen = 'https://m.media-amazon.com/images/I/816fvtVOGpL._AC_SL1500_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 19
        $producto = new producto();
        $producto->nombre_producto = 'Meta Quest 2';
        $producto->identificador = 'meta-lentes-de-realidad-virtual';
        $producto->descripcion_producto = '<h1>Meta Quest 2</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>Advanced All-In-One Virtual Reality Headset — 128 GB Get Meta Quest 2 with GOLF+ and Space Pirate Trainer DX included</p><br>
    ';
        $producto->precio = '33985';
        $producto->existentes = '2';
        $producto->imagen = 'https://m.media-amazon.com/images/I/710yeNqefxL._SX425_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();

        //producto 20
        $producto = new producto();
        $producto->nombre_producto = 'Traje de recuperación profesional';
        $producto->identificador = 'traje-trajes-traje-de-recuperacion-profesional';
        $producto->descripcion_producto = '<h1>Traje de recuperación profesional</h1>
    <br>
    <p>Descripción del producto</p><br>
    <p>para gatos para heridas abdominales y enfermedades de la piel, alternativa de collar electrónico para gatos y perros, uso después de una cirugía, antilamer, recomendado por veterinarios (rosa, M)</p><br>
    ';
        $producto->precio = '2765';
        $producto->existentes = '30';
        $producto->imagen = 'https://m.media-amazon.com/images/I/61M5UfPsXyL._AC_SX569_.jpg';
        $producto->estado_producto = 'Ninguno';
        $producto->id_marca= 1;
        $producto->save();
    }
}

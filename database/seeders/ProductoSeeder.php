<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'nombreproducto' => 'Jersey de punto',
            'precio' => 59.99,
            'descripcion' => 'Jersey de punto suave y cálido en color beige.',
            'categoria' => 'TrenSuperior',
            'imagen' => 'https://anaconde.es/wp-content/uploads/2023/05/JerseyCableCotton04-400x400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Shorts deportivos',
            'precio' => 19.99,
            'descripcion' => 'Shorts deportivos de secado rápido en color negro.',
            'categoria' => 'TrenInferior',
            'imagen' => 'https://m.media-amazon.com/images/I/41yLaVcQukL._SS400_.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Vestido de noche',
            'precio' => 79.99,
            'descripcion' => 'Vestido elegante de noche con detalles de encaje.',
            'categoria' => 'CuerpoCompleto',
            'imagen' => 'https://i.ebayimg.com/images/g/29kAAOSwIOtg18i9/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Sombrero de paja',
            'precio' => 14.99,
            'descripcion' => 'Sombrero de paja trenzada con ala ancha.',
            'categoria' => 'Cabeza',
            'imagen' => 'https://www.promoregals.com/2938-large_default/sombrero-de-paja-promocional-bull.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Cinturón de cuero',
            'precio' => 24.99,
            'descripcion' => 'Cinturón de cuero genuino en color marrón.',
            'categoria' => 'Accesorios',
            'imagen' => 'https://www.fantinipelletteria.es/wp-content/uploads/2020/12/cinturon-cuero-hombre-amarillo-400x400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Blusa estampada',
            'precio' => 34.99,
            'descripcion' => 'Blusa ligera con estampado floral y mangas acampanadas.',
            'categoria' => 'TrenSuperior',
            'imagen' => 'https://maraorio.com/5394-home_default/blusa-estampada-fpflow-fransa-plus-size-20611101.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Pantalones cortos de mezclilla',
            'precio' => 29.99,
            'descripcion' => 'Pantalones cortos de mezclilla desgastada con efecto vintage.',
            'categoria' => 'TrenInferior',
            'imagen' => 'https://i.ebayimg.com/images/g/MBQAAOSwvbthiVLU/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Vestido de cóctel',
            'precio' => 89.99,
            'descripcion' => 'Vestido elegante de cóctel con escote en V y falda plisada.',
            'categoria' => 'CuerpoCompleto',
            'imagen' => 'https://bestforless.es/127888-home_default/vestido-blanco882.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Gorro de lana reversible',
            'precio' => 12.99,
            'descripcion' => 'Gorro de lana reversible con diseño de rayas.',
            'categoria' => 'Cabeza',
            'imagen' => 'https://i.ebayimg.com/images/g/tuYAAOSwF~Vhzft0/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Blusa de encaje',
            'precio' => 27.99,
            'descripcion' => 'Blusa de encaje con detalles de volantes en las mangas.',
            'categoria' => 'TrenSuperior',
            'imagen' => 'https://i.ebayimg.com/images/g/zx8AAOSw5MReEGYK/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Pantalones de yoga',
            'precio' => 29.99,
            'descripcion' => 'Pantalones de yoga de alta calidad con cintura elástica.',
            'categoria' => 'TrenInferior',
            'imagen' => 'https://image.made-in-china.com/155f0j00DkhizHvgbmro/Women-Yoga-Pants-High-Quality-OEM-Fitness-Sports-Training-Wear-Slim-Hip-Fit-Track-Sport-Women-Yoga-Pants.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Mono elegante',
            'precio' => 69.99,
            'descripcion' => 'Mono elegante de una pieza con cinturón ajustable.',
            'categoria' => 'CuerpoCompleto',
            'imagen' => 'https://m.media-amazon.com/images/I/31ixvMIcYiS._SS400_.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Gorro de invierno con pompón',
            'precio' => 14.99,
            'descripcion' => 'Gorro de invierno con pompón de pelo sintético.',
            'categoria' => 'Cabeza',
            'imagen' => 'https://i.ebayimg.com/images/g/YwwAAOSwHBZhecct/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Collar statement',
            'precio' => 39.99,
            'descripcion' => 'Collar llamativo con múltiples capas y piedras decorativas.',
            'categoria' => 'Accesorios',
            'imagen' => 'https://i.ebayimg.com/images/g/GLsAAOSw7ehXR-2G/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Chaleco de punto',
            'precio' => 45.99,
            'descripcion' => 'Chaleco de punto suelto en color gris oscuro.',
            'categoria' => 'TrenSuperior',
            'imagen' => 'https://crisanlaboral.es/wp-content/uploads/2018/09/chaleco-hombre-punto-escote-pico-ropa-laboral-261x0_6d.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Shorts de playa',
            'precio' => 19.99,
            'descripcion' => 'Shorts de playa de secado rápido con estampado tropical.',
            'categoria' => 'TrenInferior',
            'imagen' => 'https://i.ebayimg.com/images/g/MXEAAOSwthtfw-cP/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Vestido largo',
            'precio' => 79.99,
            'descripcion' => 'Vestido largo de gasa con estampado de flores y aberturas laterales.',
            'categoria' => 'CuerpoCompleto',
            'imagen' => 'https://i.ebayimg.com/images/g/DtkAAOSwAm1hmxtN/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Sombrero fedora',
            'precio' => 24.99,
            'descripcion' => 'Sombrero fedora de fieltro en color negro con cinta decorativa.',
            'categoria' => 'Cabeza',
            'imagen' => 'https://m.media-amazon.com/images/I/31W6JSoSowL._SS400_.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Blazer de mujer',
            'precio' => 89.99,
            'descripcion' => 'Blazer elegante de mujer con corte entallado y solapa.',
            'categoria' => 'TrenSuperior',
            'imagen' => 'https://i.ebayimg.com/images/g/ZmwAAOSwuN1f~ABH/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Jeans ajustados',
            'precio' => 59.99,
            'descripcion' => 'Jeans ajustados de talle alto en color azul oscuro.',
            'categoria' => 'TrenInferior',
            'imagen' => 'https://m.media-amazon.com/images/I/51vHFgOjzUL._AC_SY400_.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Vestido de fiesta',
            'precio' => 129.99,
            'descripcion' => 'Vestido de fiesta con detalles de encaje y falda plisada.',
            'categoria' => 'CuerpoCompleto',
            'imagen' => 'https://i.ebayimg.com/images/g/M8sAAOSwBIBj4J27/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Sombrero de ala ancha',
            'precio' => 19.99,
            'descripcion' => 'Sombrero de ala ancha con banda decorativa.',
            'categoria' => 'Cabeza',
            'imagen' => 'https://images.timberland.com/is/image/TimberlandEU/A2PBT918-hero',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Jersey de cuello alto',
            'precio' => 39.99,
            'descripcion' => 'Jersey de punto de cuello alto en color gris.',
            'categoria' => 'TrenSuperior',
            'imagen' => 'https://i.ebayimg.com/images/g/uCMAAOSw5PFj-lpM/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Falda plisada',
            'precio' => 34.99,
            'descripcion' => 'Falda plisada de longitud midi en color negro.',
            'categoria' => 'TrenInferior',
            'imagen' => 'https://i.ebayimg.com/images/g/-bgAAOSwI4pf~-LA/s-l400.jpg',
            'created_at' => now()

        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Vestido de novia',
            'precio' => 999.99,
            'descripcion' => 'Vestido de novia con encaje, escote en V y cola larga.',
            'categoria' => 'CuerpoCompleto',
            'imagen' => 'https://modenanovias.com/wp-content/uploads/2016/10/lara-delantero-amanecer-400x400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Gorra de béisbol',
            'precio' => 14.99,
            'descripcion' => 'Gorra de béisbol con logo bordado en la parte frontal.',
            'categoria' => 'Cabeza',
            'imagen' => 'https://i.ebayimg.com/images/g/w9QAAOSwT5tg1Xse/s-l400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Sudadera con capucha',
            'precio' => 49.99,
            'descripcion' => 'Sudadera con capucha y bolsillo canguro en color gris.',
            'categoria' => 'TrenSuperior',
            'imagen' => 'https://www.disasterskateshop.com/44254-home_default/sudadera-con-capucha-premium-obey-obey-eyes-icon-hood-digital-violet.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Pantalones de cuero',
            'precio' => 79.99,
            'descripcion' => 'Pantalones de cuero sintético ajustados en color negro.',
            'categoria' => 'TrenInferior',
            'imagen' => 'https://ae01.alicdn.com/kf/H07154670bbeb423584706170313208e8o/Pantalones-de-piel-de-oveja-para-mujer-pantal-n-de-cuero-negro-pantalones-de-pies-delgados.jpg_640x640.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Vestido de verano',
            'precio' => 59.99,
            'descripcion' => 'Vestido ligero de verano con estampado floral y tirantes cruzados.',
            'categoria' => 'CuerpoCompleto',
            'imagen' => 'https://xacotex.b-cdn.net/wp-content/uploads/2023/03/86000-3-400x400.jpg',
            'created_at' => now()
        ]);
        DB::table('productos')->insert([
            'nombreproducto' => 'Gorra de visera plana',
            'precio' => 24.99,
            'descripcion' => 'Gorra de visera plana con estampado urbano.',
            'categoria' => 'Cabeza',
            'imagen' => 'https://www.promoregals.com/2892-large_default/gorras-redecilla-personalizadas-yobs.jpg',
            'created_at' => now()
        ]);
        
    }
}

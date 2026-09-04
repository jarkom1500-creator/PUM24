<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | PRODUCT 1 - SALUT
        |--------------------------------------------------------------------------
        */

        $saLut = Product::create([
            'name' => 'SaLut (Sambal Belut)',

            'description' => 'Sambal Belut merupakan produk inovasi yang menggunakan belut sebagai bahan utama sambal. Rasa pedas dan gurih menjadi kombinasi sempurna untuk dijadikan sebagai teman makan nasi.',

            'seller_name' => 'Kelompok 2A',

            'whatsapp' => '6283160872824',
        ]);

        $saLut->images()->createMany([
            [
                'image' => 'products/salut.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/salut-2.jpg',
                'sort_order' => 2,
            ],
            [
                'image' => 'products/salut-3.png',
                'sort_order' => 3,
            ],
                        [
                'image' => 'products/salut-4.png',
                'sort_order' => 4,
            ],
        ]);

        $saLut->variants()->createMany([
            [
                'variant_name' => 'Kemasan Botol',
                'net_weight' => '100 gram',
                'price' => 22000,
            ],
            [
                'variant_name' => 'Kemasan Sachet',
                'net_weight' => '25 gram',
                'price' => 6000,
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | PRODUCT 2 - SAMOCASS
        |--------------------------------------------------------------------------
        */

        $samocass = Product::create([
            'name' => 'Samocass',

            'description' => 'Samocass merupakan samosa singkong dengan kulit yang renyah dan isian gurih yang siap menemani setiap momen ngemil kamu.',

            'seller_name' => 'Kelompok 5B',

            'whatsapp' => '6289530166832',
        ]);

        $samocass->images()->createMany([
            [
                'image' => 'products/samocass.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/samocass-2.png',
                'sort_order' => 2,
            ],
            [
                'image' => 'products/samocass-3.png',
                'sort_order' => 3,
            ],
            [
                'image' => 'products/samocass-4.png',
                'sort_order' => 4,
            ],
            [
                'image' => 'products/samocass-5.png',
                'sort_order' => 5,
            ],
            
        ]);

        $samocass->variants()->createMany([
            [
                'variant_name' => 'Kari Rempah',
                'net_weight' => '18 gram/pcs',
                'price' => 3500,
            ],
            [
                'variant_name' => 'Balado Pedas',
                'net_weight' => '18 gram/pcs',
                'price' => 3500,
            ],
            [
                'variant_name' => 'Saus Bolognese',
                'net_weight' => '18 gram/pcs',
                'price' => 3500,
            ],
            [
                'variant_name' => 'Porsi',
                'net_weight' => '4pcs/porsi',
                'price' => 13000,
            ]
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 3 - PIYU
        |--------------------------------------------------------------------------
        */

        $piyu = Product::create([
            'name' => 'PIYU',

            'description' => 'Piyuu merupakan inovasi camilan manis berupa Pie Brownies Ubi Ungu yang mengangkat potensi pangan lokal menjadi produk yang modern, praktis, dan memiliki cita rasa khas.
Piyuu memadukan tekstur pie yang renyah dengan brownies ubi ungu yang lembut, menciptakan perpaduan rasa dan tekstur yang unik dalam setiap gigitan.',

            'seller_name' => 'Kelompok 1A',

            'whatsapp' => ' 6285720619635',
        ]);

        $piyu->images()->createMany([
            [
                'image' => 'products/piyu.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/piyu-2.png',
                'sort_order' => 2,
            ],
        ]);

        $piyu->variants()->createMany([
            [
                'variant_name' => 'Ubi Ungu',
                'net_weight' => '20 gram/pcs',
                'price' => 5000,
            ],
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 4 - Chicken Jerky
        |--------------------------------------------------------------------------
        */

        $chicken_jerky = Product::create([
            'name' => 'Chicken Jerky',

            'description' => 'Dendeng ayam dengan rempah-rempah khas Nusantara, dipadukan dengan madu dan rumput laut, menghasilkan rasa gurih, manis, dan kaya rempah. Cocok sebagai camilan maupun lauk pendamping nasi.',

            'seller_name' => 'Kelompok 1B',

            'whatsapp' => '62895417341177',
        ]);

        $chicken_jerky->images()->createMany([
            [
                'image' => 'products/chicken.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/chicken-2.png',
                'sort_order' => 2,
            ],
        ]);

        $chicken_jerky->variants()->createMany([
            [
                'variant_name' => 'Original',
                'net_weight' => '70 gram/pcs',
                'price' => 15000,
            ],
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 5 - Nakoju
        |--------------------------------------------------------------------------
        */

        $Nakoju = Product::create([
            'name' => 'Nugget Singkong Keju ',

            'description' => 'NAKOJU adalah camilan inovatif berbahan singkong pilihan yang dipadukan dengan keju, bertekstur renyah di luar dan lembut di dalam. Keunikannya dilengkapi dengan cocolan cokelat yang menghadirkan perpaduan rasa gurih, manis, dan lezat, cocok dinikmati oleh semua kalangan. Ready to eat',

            'seller_name' => 'Kelompok 2B',

            'whatsapp' => '6285183411936',
        ]);

        $Nakoju ->images()->createMany([
            [
                'image' => 'products/nakoju.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/nakoju-2.jpg',
                'sort_order' => 2,
            ],
            [
                'image' => 'products/nakoju-3.jpg',
                'sort_order' => 3,
            ],
            [
                'image' => 'products/nakoju-4.png',
                'sort_order' => 4,
            ],
        ]);

        $Nakoju ->variants()->createMany([
            [
                'variant_name' => 'Cocolan Coklat',
                'net_weight' => '138 gram/ 6 pcs',
                'price' => 10000,
            ],
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 6 - Sampolin
        |--------------------------------------------------------------------------
        */

        $Sampolin = Product::create([
            'name' => 'Sempolin',

            'description' => 'Sempol Ikan Tongkol merupakan inovasi sempol berbahan dasar
ikan tongkol dengan tambahan bayam dan wortel pada adonan, sehingga lebih kaya
variasi bahan dan warna. Di bagian dalamnya terdapat isian pindang tongkol suwir
dengan dua pilihan rasa, yaitu pedas dan original sehingga dapat disesuaikan dengan',

            'seller_name' => 'kelompok 3A',

            'whatsapp' => '6283169249640',
        ]);

        $Sampolin ->images()->createMany([
            [
                'image' => 'products/sempolin.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/sempolin-2.jpg',
                'sort_order' => 2,
            ],
        ]);

        $Sampolin ->variants()->createMany([
            [
                'variant_name' => 'original',
                'net_weight' => '20 gram/pcs',
                'price' => 12000,
            ],
            [
                'variant_name' => 'Pedas',
                'net_weight' => '20 gram/pcs',
                'price' => 13000,
            ],
            [
                'variant_name' => 'Mix Rasa',
                'net_weight' => '20 gram/pcs',
                'price' => 12500,
            ],
            
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 7 - Ganas
        |--------------------------------------------------------------------------
        */

        $ganas = Product::create([
            'name' => 'GANAS (Gabin Es Krim Nanas',

            'description' => 'Es Krim Gabin Nanas merupakan produk camilan inovatif yang memadukan renyahnya biskuit gabin dengan lembutnya es krim dan cita rasa khas nanas. Kombinasi tersebut menghasilkan produk yang unik, menyegarkan, dan memiliki daya tarik sebagai camilan kekinian.
3 Harga satuan',

            'seller_name' => 'Kelompok 4A',

            'whatsapp' => '628818204834',
        ]);

        $ganas->images()->createMany([
            [
                'image' => 'products/ganas.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/ganas-2.jpg',
                'sort_order' => 2,
            ],
            [
                'image' => 'products/ganas-3.jpg',
                'sort_order' => 3,
            ],
            [
                'image' => 'products/ganas-4.jpg',
                'sort_order' => 4,
            ],
        ]);

        $ganas->variants()->createMany([
            [
                'variant_name' => 'ready to eat',
                'net_weight' => '140 gram/pcs',
                'price' => 10000,
            ],
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 8 - gyoza
        |--------------------------------------------------------------------------
        */

        $gyoza = Product::create([
            'name' => 'Gyoza Ikan Nila',

            'description' => 'Gyoza berisi daging ikan nila dan kol dengan cita rasa gurih, dipadukan sambal ijo yang pedas dan segar. Cocok untuk camilan atau teman makan kapan saja.',

            'seller_name' => 'Kelompok 5A',

            'whatsapp' => '6289674021562',
        ]);

        $gyoza->images()->createMany([
            [
                'image' => 'products/gyoza_nila.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/gyoza-2.jpg',
                'sort_order' => 2,
            ],
            [
                'image' => 'products/gyoza-3.jpg',
                'sort_order' => 3,
            ],
        ]);

        $gyoza->variants()->createMany([
            [
                'variant_name' => 'Ready to Eat, Sambal Ijo',
                'net_weight' => '45 gram/ 5 pcs',
                'price' => 10000,
            ],
            [
                'variant_name' => 'Frozen, Sambal Ijo',
                'net_weight' => '58 gram/ 6 pcs',
                'price' => 10000,
            ],
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 9 - chwey pine
        |--------------------------------------------------------------------------
        */

        $chewy = Product::create([
            'name' => 'Chewy Pine',

            'description' => 'Mochi dengan tekstur lembut dan kenyal, dipadukan dengan nanas asli khas Subang yang menghadirkan cita rasa manis, asam, dan segar. Cocok untuk camilan atau teman makan kapan saja.',

            'seller_name' => 'Kelompok 3B',

            'whatsapp' => '6285225145039',
        ]);

        $chewy->images()->createMany([
            [
                'image' => 'products/chewy_pine.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/chewy-2.jpg',
                'sort_order' => 2,
            ],
            [
                'image' => 'products/chewy-3.jpg',
                'sort_order' => 3,
            ],
        ]);

        $chewy->variants()->createMany([
            [
                'variant_name' => 'Original Selai Nanas',
                'net_weight' => '54 gram/ 3 pcs',
                'price' => 6000,
            ],
            [
                'variant_name' => 'Coklat',
                'net_weight' => '54 gram/ 3 pcs',
                'price' => 6000,
            ],
        ]);
               /*
        |--------------------------------------------------------------------------
        | PRODUCT 10 - Pineva Craft 
        |--------------------------------------------------------------------------
        */

        $pineva = Product::create([
            'name' => 'Pineva Craft',

            'description' => 'Gantungan kunci unik dan simpel yang dibuat dengan memanfaatkan limbah daun nanas, bunga layu dan bubuk kayu menjadi produk yang bernilai dan praktis digunakan.',

            'seller_name' => 'Kelompok 4B',

            'whatsapp' => '6282130916370',

            'category' => 'kerajinan',

            'category_icon' => 'Palette',
        ]);

        $pineva->images()->createMany([
            [
                'image' => 'products/pineva.png',
                'sort_order' => 1,
            ],
            [
                'image' => 'products/pineva-2.jpg',
                'sort_order' => 2,
            ],
        ]);

        $pineva->variants()->createMany([
            [
                'variant_name' => 'Ganci',
                'net_weight' => null ,
                'price' => 8000,
            ],
        ]);
    }
}
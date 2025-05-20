<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('products')->truncate();

        $products = [
            [
                'name' => 'iPhone 15 Pro',
                'price' => 1299.00,
                'description' => 'The latest iPhone with A17 Pro chip, titanium design, and advanced camera system.',
                'tags' => 'smartphone, apple, iphone',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MacBook Air M3',
                'price' => 1499.00,
                'description' => 'Ultra-thin and lightweight laptop powered by the M3 chip for unparalleled performance.',
                'tags' => 'laptop, apple, macbook',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apple Watch Ultra 2',
                'price' => 899.00,
                'description' => 'Rugged smartwatch designed for extreme conditions with advanced health monitoring.',
                'tags' => 'smartwatch, apple, fitness',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPad Pro 12.9 (2023)',
                'price' => 1099.00,
                'description' => 'Powerful tablet with M2 chip, Liquid Retina XDR display, and support for Apple Pencil.',
                'tags' => 'tablet, apple, ipad',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AirPods Max',
                'price' => 549.00,
                'description' => 'Premium over-ear headphones with active noise cancellation and spatial audio.',
                'tags' => 'headphones, apple, airpods',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mac Studio',
                'price' => 1999.00,
                'description' => 'Compact desktop powerhouse with M2 Ultra chip for creative professionals.',
                'tags' => 'desktop, apple, mac',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apple TV 4K',
                'price' => 179.00,
                'description' => 'Stream your favorite shows and movies in stunning 4K resolution.',
                'tags' => 'streaming, apple, tv',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HomePod Mini',
                'price' => 99.00,
                'description' => 'Compact smart speaker with Siri integration and immersive sound.',
                'tags' => 'speaker, apple, homepod',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vision Pro',
                'price' => 3499.00,
                'description' => 'Revolutionary mixed-reality headset for immersive experiences.',
                'tags' => 'headset, apple, vision',
                'category_id' => 1, // Kategori Apple
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Produk Samsung
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'price' => 1199.00,
                'description' => 'Flagship smartphone with a powerful Snapdragon 8 Gen 2 processor and 200MP camera.',
                'tags' => 'smartphone, samsung, galaxy',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy Z Fold 5',
                'price' => 1799.00,
                'description' => 'Foldable smartphone with a large display and multitasking capabilities.',
                'tags' => 'smartphone, samsung, foldable',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy Tab S9 Ultra',
                'price' => 1099.00,
                'description' => 'Premium tablet with a stunning AMOLED display and powerful performance.',
                'tags' => 'tablet, samsung, galaxy',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy Watch 6 Classic',
                'price' => 499.00,
                'description' => 'Smartwatch with rotating bezel and advanced health tracking features.',
                'tags' => 'smartwatch, samsung, watch',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Neo QLED 8K',
                'price' => 2999.00,
                'description' => '8K smart TV with Quantum Matrix technology and AI upscaling.',
                'tags' => 'tv, samsung, qled',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Bespoke Jet Vacuum',
                'price' => 699.00,
                'description' => 'Powerful cordless vacuum cleaner with smart sensors and customizable design.',
                'tags' => 'vacuum, samsung, bespoke',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy Buds 3 Pro',
                'price' => 249.00,
                'description' => 'Wireless earbuds with active noise cancellation and Hi-Fi audio quality.',
                'tags' => 'earbuds, samsung, buds',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Odyssey Ark Gaming Monitor',
                'price' => 2499.00,
                'description' => 'Gaming monitor with 55-inch curved screen and 165Hz refresh rate.',
                'tags' => 'monitor, samsung, gaming',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung SmartThings Hub',
                'price' => 99.00,
                'description' => 'Central hub to connect and control all your smart home devices.',
                'tags' => 'smart home, samsung, smartthings',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Frame TV 2023',
                'price' => 1499.00,
                'description' => 'Artistic TV that doubles as a digital art frame when not in use.',
                'tags' => 'tv, samsung, frame',
                'category_id' => 2, // Kategori Samsung
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('products')->insert($products);
    }
}

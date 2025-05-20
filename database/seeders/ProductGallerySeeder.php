<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Hapus semua data galeri sebelum menambahkan yang baru
        DB::table('product_galleries')->truncate();

        // Data galeri produk
        $galleries = [
            // Apple Products
            ['product_id' => 1, 'url' => 'https://unboxing.id/wp-content/uploads/2024/01/apple-iphone-15-pro-1.jpg '],
            ['product_id' => 2, 'url' => 'https://cdnpro.eraspace.com/media/catalog/product/a/p/apple_macbook_air_13_inci_m3_2024_midnight_1_2_1.jpg '],
        //     ['product_id' => 3, 'url' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MQF83_VW_34FR+watch-49-titanium-ultra_VW_34FR_WF_CO_GEO_ID?wid=1400&hei=1400&trim=1 ,0&fmt=p-jpg'],
        //     ['product_id' => 4, 'url' => 'https://www.apple.com/v/ipad-pro-12-9/a/images/overview/design/design_intro__d4q4xj0z2yaa_large.jpg '],
        //     ['product_id' => 5, 'url' => 'https://www.apple.com/v/airpods-max/a/images/overview/design/design_intro__d4q4xj0z2yaa_large.jpg '],
        //     ['product_id' => 6, 'url' => 'https://www.apple.com/v/mac-studio/a/images/overview/design/design_intro__d4q4xj0z2yaa_large.jpg '],
        //     ['product_id' => 7, 'url' => 'https://www.apple.com/v/apple-tv-4k/a/images/overview/design/design_intro__d4q4xj0z2yaa_large.jpg '],
        //     ['product_id' => 8, 'url' => 'https://www.apple.com/v/homepod-mini/a/images/overview/design/design_intro__d4q4xj0z2yaa_large.jpg '],
        //     ['product_id' => 9, 'url' => 'https://www.apple.com/v/vision-pro/a/images/overview/design/design_intro__d4q4xj0z2yaa_large.jpg '],

        //     // Samsung Products
        //     ['product_id' => 10, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-s918-sm-s918blgdid/gallery/id-galaxy-s23-ultra-sm-s918-sm-s918blgdid-thumb-532824371 '],
        //     ['product_id' => 11, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-f946-sm-f946bzgdid/gallery/id-galaxy-z-fold5-sm-f946-sm-f946bzgdid-thumb-532824371 '],
        //     ['product_id' => 12, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-x910-sm-x910nzdidxid/gallery/id-galaxy-tab-s9-ultra-sm-x910-sm-x910nzdidxid-thumb-532824371 '],
        //     ['product_id' => 13, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-r930-sm-r930nzklidx/gallery/id-galaxy-watch6-classic-sm-r930-sm-r930nzklidx-thumb-532824371 '],
        //     ['product_id' => 14, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/qn85b-qa85qn85bauxxd/gallery/id-neo-qled-qn85b-qa85qn85bauxxd-thumb-532824371 '],
        //     ['product_id' => 15, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/vs20t9279s2-vs20t9279s2/in/gallery/id-bespoke-jet-vacuum-vs20t9279s2-vs20t9279s2-thumb-532824371 '],
        //     ['product_id' => 16, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-r930-sm-r930nzklidx/gallery/id-galaxy-buds3-pro-sm-r930-sm-r930nzklidx-thumb-532824371 '],
        //     ['product_id' => 17, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/g95na-lc49g95natxxxd/gallery/id-odyssey-ark-gaming-monitor-g95na-lc49g95natxxxd-thumb-532824371 '],
        //     ['product_id' => 18, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-n910-sm-n910fdwaidx/gallery/id-smartthings-hub-sm-n910-sm-n910fdwaidx-thumb-532824371 '],
        //     ['product_id' => 19, 'url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/ls03b-qa55ls03bbuxxd/gallery/id-frame-tv-2023-ls03b-qa55ls03bbuxxd-thumb-532824371 '],
        ];

        // Masukkan data ke tabel product_galleries
        foreach ($galleries as $gallery) {
            DB::table('product_galleries')->insert([
                'product_id' => $gallery['product_id'],
                'url' => $gallery['url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

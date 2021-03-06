<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Product::create([
            'id' => '123456',
            'title' => 'Rolex Watch',
            'slug' => 'rolex-watch',
            'content' => 'Buy this awesome watch.',
            'brand' => 'Rolex',
            'image' => 'watch.webp',
            'old_price' => 50,
            'price' => 20,
            'qnty' => 10,
            'published' => 1,
            'category_id' => '1',
        ]);

        \App\Models\Product::create([
            'id' => '1234567',
            'title' => 'Rado Watch',
            'slug' => 'rado-watch',
            'content' => 'Buy this awesome watch.',
            'brand' => 'Rado',
            'image' => 'watch.webp',
            'old_price' => 50,
            'price' => 20,
            'qnty' => 10,
            'published' => 1,
            'category_id' => '1',
        ]);
        \App\Models\Product::create([
            'id' => '1234568',
            'title' => 'Rado Watch',
            'slug' => 'rado-watch',
            'content' => 'Buy this awesome watch.',
            'brand' => 'Rado',
            'image' => 'watch.webp',
            'old_price' => 50,
            'price' => 20,
            'qnty' => 10,
            'published' => 1,
            'category_id' => '1',
        ]);
        \App\Models\Product::create([
            'id' => '1234569',
            'title' => 'Rado Watch',
            'slug' => 'rado-watch',
            'content' => 'Buy this awesome watch.',
            'brand' => 'Rado',
            'image' => 'watch.webp',
            'old_price' => 50,
            'price' => 20,
            'qnty' => 10,
            'published' => 1,
            'category_id' => '1',
        ]);
        \App\Models\Product::create([
            'id' => '123456910',
            'title' => 'Rado Watch',
            'slug' => 'rado-watch',
            'content' => 'Buy this awesome watch.',
            'brand' => 'Rado',
            'image' => 'watch.webp',
            'old_price' => 50,
            'price' => 20,
            'qnty' => 10,
            'published' => 1,
            'category_id' => '1',
        ]);
        \App\Models\Product::create([
            'id' => '123456911',
            'title' => 'Rado Watch',
            'slug' => 'rado-watch',
            'content' => 'Buy this awesome watch.',
            'brand' => 'Rado',
            'image' => 'watch.webp',
            'old_price' => 50,
            'price' => 20,
            'qnty' => 10,
            'published' => 1,
            'category_id' => '1',
        ]);
    }
}

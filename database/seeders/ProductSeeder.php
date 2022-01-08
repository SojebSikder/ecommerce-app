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
    }
}

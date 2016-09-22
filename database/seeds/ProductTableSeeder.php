<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://vanisbakery.com/wp-content/uploads/2016/09/sun37.jpg',
            'title' => 'Zelda',
            'description' => 'Breath of the wild',
            'price' => 20
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://vanisbakery.com/wp-content/uploads/2016/09/professional-video-camera-300x290.jpg',
            'title' => 'Sonny Professional Video Camera',
            'description' => 'Professional Camera with high resolutions!',
            'price' => 1200
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://vanisbakery.com/wp-content/uploads/2016/09/6-300x270.jpg',
            'title' => 'Dell Laptop',
            'description' => 'Purple and great for high school and college students',
            'price' => 79
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://vanisbakery.com/wp-content/uploads/2016/09/sun1-300x300.jpg',
            'title' => 'Maid wedding dress',
            'description' => 'Great for wedding occassions and that special day!',
            'price' => 89
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://vanisbakery.com/wp-content/uploads/2016/09/sun58.jpg',
            'title' => 'HERO4 ',
            'description' => 'With high resolutions and motion detectors',
            'price' => 500
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://vanisbakery.com/wp-content/uploads/2016/09/Canon-EOS-Rebel-T3i.jpg',
            'title' => 'Canon-Eos-Rebel-T3i',
            'description' => 'Perfect for safari travellers and site seeing vacations!',
            'price' => 750
        ]);
        $product->save();
    }
}


<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = [
            'name'=>'Laravel by example',
            'image'=>'uploads/products/book1.png',
            'price'=> 50,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac ex fringilla sapien convallis varius sed id nisl. Integer consequat ante pulvinar purus egestas aliquet'
        ];

        $p2 = [
            'name'=> 'Marketing strategy',
            'image'=>'uploads/products/book2.png',
            'price'=>100,
            'description'=>'sit amet pharetra neque erat eu nibh. Donec blandit id dolor quis mattis. Phasellus fringilla varius odio. Praesent maximus ipsum nec ipsum consectetur porttitor. Morbi in risus ac turpis tempus fermentum. Suspendisse potenti. Aenean porttitor non nulla nec maximus'
        ];

        App\Product::create($p1);
        App\Product::create($p2);

    }
}

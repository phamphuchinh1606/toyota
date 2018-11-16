<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TableNameDB;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Slider Banner
        $productTypes = [
            [
                'product_type_name' => 'Yaris',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764639_sidebarleft_icon1.png'
            ],
            [
                'product_type_name' => 'Wigo',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764886_sidebarleft_icon2.png'
            ],
            [
                'product_type_name' => 'Vios',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764886_sidebarleft_icon2.png'
            ],
            [
                'product_type_name' => 'Corolla Altis',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764895_sidebarleft_icon3.png'
            ],
            [
                'product_type_name' => 'Camry',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764902_sidebarleft_icon4.png'
            ],
            [
                'product_type_name' => 'Fortuner',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764915_sidebarleft_icon5.png'
            ],
            [
                'product_type_name' => 'Land Cruiser Prado',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764928_sidebarleft_icon6.png'
            ],
            [
                'product_type_name' => 'Land Cruiser',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764936_sidebarleft_icon7.png'
            ],
            [
                'product_type_name' => 'Alphard luxury',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764947_sidebarleft_icon9.png'
            ],
            [
                'product_type_name' => 'Rush',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764955_sidebarleft_icon8.png'
            ],
            [
                'product_type_name' => 'Innova',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764962_sidebarleft_icon10.png'
            ],
            [
                'product_type_name' => 'Avanza',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764962_sidebarleft_icon10.png'
            ],
            [
                'product_type_name' => 'Hiace',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764962_sidebarleft_icon10.png'
            ],
            [
                'product_type_name' => 'Hilux',
                'parrent_id' => '',
                'image_icon' => 'product_types/1537764962_sidebarleft_icon10.png'
            ]
        ];
        foreach ($productTypes as $productType){
            $productTypeDb = new ProductType();
            $productTypeDb->product_type_name = $productType['product_type_name'];
            if($productType['parrent_id'] != ''){
                $productTypeDb->parent_id = $productType['parrent_id'];
            }
            if($productType['image_icon'] != ''){
                $productTypeDb->image_icon = $productType['image_icon'];
            }
            $productTypeDb->is_public = 1;
            $productTypeDb->is_delete = 0;
            $productTypeDb->save();
        }
    }
}

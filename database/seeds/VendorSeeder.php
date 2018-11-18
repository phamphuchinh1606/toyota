<?php

use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendors = [
            [
                'vendorName' => 'Hatchback',
                'vendorId' => 1
            ],
            [
                'vendorName' => 'Sedan',
                'vendorId' => 2
            ],
            [
                'vendorName' => 'SUV',
                'vendorId' => 3
            ],
            [
                'vendorName' => 'Đa dụng',
                'vendorId' => 4
            ],
            [
                'vendorName' => 'Thương mại',
                'vendorId' => 5
            ],
            [
                'vendorName' => 'Bán tải',
                'vendorId' => 6
            ]
        ];
        foreach ($vendors as $vendor){
            $vendorDb = new Vendor();
            $vendorDb->vendor_name = $vendor['vendorName'];
            $vendorDb->id = $vendor['vendorId'];
            $vendorDb->save();
        }
    }
}

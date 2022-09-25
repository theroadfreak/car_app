<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        collect([
            ['brand_name' => 'Mercedes'],
            ['brand_name' => 'Audi'],
            ['brand_name' => 'VW'],
            ['brand_name' => 'BMW'],
        ])->each(function ($brand) {
            return Brand::query()->create($brand);
        });
    }
}

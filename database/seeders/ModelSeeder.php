<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        for ($x = 1; $x <= 4; $x++) {
            $brand = Brand::query()->find($x);

            for ($y = 0; $y < 2; $y++) {
                $brand->models()->create([
                    'model_name' => Str::random(3),
                ]);
            }
        }
    }
}

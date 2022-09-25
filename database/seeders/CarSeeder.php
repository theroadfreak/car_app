<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for ($x = 1; $x <= 8; $x++) {
            $model = Model::query()->find($x);

            for ($y = 0; $y < 2; $y++) {
                $model->cars()->create([
                    'title' => Str::random(5),
                    'VIN_number' => Str::random(10),
                    'description' => Str::random(20),
                    'picture_path' => '../storage/images/car.jpg',
                ]);
            }
        }
    }
}

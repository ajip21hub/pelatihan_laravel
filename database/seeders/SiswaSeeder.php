<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            Siswa::create([
                'nama' => $faker->name,
                'usia' => $faker->numberBetween(7, 18),
                'alamat' => $faker->address,
                'wali' => $faker->name,
            ]);
        }
    }
}
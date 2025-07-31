<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Illuminate\Database\Seeder;

class TamuSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // This seeder is currently empty. You can add logic to seed the 'tamu' table if needed.
        // For example, you might want to create some sample data for the 'tamu' table.

        $data = [
            [
                'nama' => 'Budi Santoso',
                'email' => 'budi.santoso@gmail.com',
                'telepon' => '081234567890',
                'pesan' => 'Terima kasih atas pelayanannya.',
            ],
            [
                'nama' => 'Siti Aminah',
                'email' => 'siti.aminah@yahoo.com',
                'telepon' => '082112223333',
                'pesan' => 'Acara sangat bermanfaat!',
            ],
            [
                'nama' => 'Agus Prasetyo',
                'email' => 'agus.prasetyo@outlook.com',
                'telepon' => '085677889900',
                'pesan' => 'Semoga sukses selalu.',
            ],
            [
                'nama' => 'Dewi Lestari',
                'email' => 'dewi.lestari@gmail.com',
                'telepon' => '081355557777',
                'pesan' => 'Saya ingin tahu lebih lanjut.',
            ],
            [
                'nama' => 'Rizky Hidayat',
                'email' => 'rizky.hidayat@mail.com',
                'telepon' => '087812341234',
                'pesan' => 'Sangat membantu, terima kasih!',
            ],
        ];
        // Example:
        $faker = \Faker\Factory::create('id_ID');
        // foreach (range(1, 100) as $index) {
        //     Tamu::create([
        //         'nama' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'pesan' => $faker->realText(50),
        //         'telepon' => $faker->phoneNumber,
        //     ]);
        // }

        foreach ($data as $item) {
            Tamu::create($item);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $totalData = 50;

        for ($i = 1; $i <= $totalData; $i++) {

            Client::create([
                'nik' => $faker->unique()->numerify('################'),
                'nama' => $faker->name(),
                'no_hp' => $faker->numerify('08##########'),
                'email' => $faker->unique()->safeEmail(),
                'va' => $faker->numerify('############'),
                'nama_ibu_kandung' => $faker->name('female'),
                'alamat' => $faker->address(),
                'faskes_pertama' => $faker->randomElement([
                    'Puskesmas Simpang Tiga',
                    'Puskesmas Harapan Raya',
                    'Klinik Pratama Sejahtera',
                    'RSUD Arifin Achmad',
                    'Klinik Medika Utama'
                ]),
                'kelas' => $faker->randomElement([1, 2, 3]),
            ]);
        }
    }
}

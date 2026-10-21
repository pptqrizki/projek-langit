<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $gender = fake()->randomElement(['Laki-laki', 'Perempuan']);

            DB::table('students')->insert([
                'name' =>$gender === 'Laki-laki' ? fake('zh_CN')->name('male'): fake('zh_CN')->name('female'),

                'email' => fake()->unique()->safeEmail(),

                'kelas' => fake()->randomElement(['X', 'XI', 'XII']),

                'jurusan' => fake()->randomElement(['RPL', 'TKJ', 'TKR','TB', 'AKL']),

                'alamat' => fake()->unique()->address(),

                'jenis_kelamin' => $gender,

                'created_at' => now(),
            
            ]);
        }
    }
}

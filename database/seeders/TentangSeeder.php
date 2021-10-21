<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tentang;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::create([
            'nama'      => 'M. Andika Riski',
            'lokasi'    => 'Tanah Miring, Merauke, Papua, Id',
            'email'     => 'dhikarisky.official@gmail.com',
            'telephone' => '+62 8239 9770 016',
            'ttl'       => 'Merauke 31 July 1999',
            'website'   => 'andikariski.com',
            'deskripsi' => 'loremipsum nih coba aja',
        ]);
    }
}

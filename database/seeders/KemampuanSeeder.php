<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kemampuan;

class KemampuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'bahasa_pemrograman' => 'PHP',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa php',
            ],
            [
                'bahasa_pemrograman' => 'HTML',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa html',
            ],
            [
                'bahasa_pemrograman' => 'CSS',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa CSS',
            ],
            [
                'bahasa_pemrograman' => 'Javascript',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa Javascript',
            ],
            [
                'bahasa_pemrograman' => 'Python',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa python',
            ],
            [
                'bahasa_pemrograman' => 'Laravel',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa laravel',
            ],
            [
                'bahasa_pemrograman' => 'Codeigniter',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa codeigniter',
            ],
            [
                'bahasa_pemrograman' => 'Wordpres',
                'icon'               => 'test',
                'deskripsi'          => 'bahasa Wordpres',
            ],

        ];
        foreach ($data as $insertData) {
            // Kemampuan::create($insertData);
            Kemampuan::create($insertData);
        }
    }
}

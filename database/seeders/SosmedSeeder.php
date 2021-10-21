<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SosialMedia;

class SosmedSeeder extends Seeder
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
                'sosial_media'   => 'Instagram',
                'username'       => 'dhikarisky_',
                'link'           => 'dhika.com',

            ],
            [
                'sosial_media'   => 'facebook',
                'username'       => 'Andika Riski',
                'link'           => 'dhika.com',

            ],
            [
                'sosial_media'   => 'twitter',
                'username'       => 'dhikarisky_',
                'link'           => 'dhika.com',

            ],
            [
                'sosial_media'   => 'linkedin',
                'username'       => 'dhikarisky_',
                'link'           => 'dhika.com',

            ],
        ];
        foreach ($data as $insertData) {
            SosialMedia::create($insertData);
        }
    }
}

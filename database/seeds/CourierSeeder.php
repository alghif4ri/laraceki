<?php

use App\Courier;
use Illuminate\Database\Seeder;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courier::insert([
            [
                'code' => 'jne',
                'title' => 'Jalur Nugraha Ekakurir JNE'
            ],
            [
                'code' => 'tiki',
                'title' => 'Citra Van Titipan Kilat'
            ],
            [
                'code' => 'pos',
                'title' => 'Pos Indonesia'
            ],
        ]);
    }
}

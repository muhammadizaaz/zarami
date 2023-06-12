<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert($data =
        [
            'id'=> '1',
            'title'=> 'Web Developing Research at Tokopedia',
            'description'=> 'Perusahaan akan menerima mahasiswa/i dari latar belakang jurusan teknik
            untuk menjalani kegiatan pengabdian masyarakat dalam beberapa kelompok yang masing-masing
            akan mengerjakan proyek penelitian terspesialisasi di dalam PT. Freeport Indonesia.',
            'veneu'=> 'Kota Jakarta Selatan',
            'company'=> 'Tokopedia',
            'photo'=> 'tokped-img.png',
            'category_id'=> '2',
            'date_start'=> '2021-03-01',
            'date_end'=> '2021-03-01',
            'created_at'=> '2021-02-16 18:14:45',
            'updated_at'=> '2021-02-16 18:14:45',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Peserta =[
            [
                'nama' => 'rillo',
                'jenis kelas' => 'Regular',
                'tanggal masuk' => 2002,
            ],
            [
                'nama' => 'rillo',
                'jenis kelas' => 'Regular',
                'tanggal masuk' => 2003,
            ],
        ];
        foreach ($Peserta as $pst ) {
            Peserta::firstOrCreate($pst);
        }
        
    }
}

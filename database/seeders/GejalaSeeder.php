<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $gejala = [
            ['kode_gejala' => 'G001', 'nama_gejala' => 'Gugi berlubang'],
            ['kode_gejala' => 'G002', 'nama_gejala' => 'Gigi berwarna hitam/kuning/kecoklatan'],
            ['kode_gejala' => 'G003', 'nama_gejala' => 'Gigi sensitive'],
            ['kode_gejala' => 'G004', 'nama_gejala' => 'Gigi kerasa ngilu'],
            ['kode_gejala' => 'G005', 'nama_gejala' => 'Leher gigi berlubang'],
            ['kode_gejala' => 'G006', 'nama_gejala' => 'Gusi berwarna kemerahan'],
            ['kode_gejala' => 'G007', 'nama_gejala' => 'Sakit tajam'],
            ['kode_gejala' => 'G008', 'nama_gejala' => 'Sakit saat mengunyah'],
            ['kode_gejala' => 'G009', 'nama_gejala' => 'Insomnia'],
            ['kode_gejala' => 'G010', 'nama_gejala' => 'Sakit menjalar kekepala'],
            ['kode_gejala' => 'G011', 'nama_gejala' => 'Rasa sakit spontan dan tajam'],
            ['kode_gejala' => 'G012', 'nama_gejala' => 'Gusi membengkak'],
            ['kode_gejala' => 'G013', 'nama_gejala' => 'Pembengkakan intraoral dan ekstraoral'],
            ['kode_gejala' => 'G014', 'nama_gejala' => 'Gusi bernanah'],
            ['kode_gejala' => 'G015', 'nama_gejala' => 'Tidak bisa terlalu membuka mulut'],
            ['kode_gejala' => 'G016', 'nama_gejala' => 'Gigi goyang'],
            ['kode_gejala' => 'G017', 'nama_gejala' => 'Gigi tampak panjang'],
            ['kode_gejala' => 'G018', 'nama_gejala' => 'Sakit gigi pada bagian belakang mulut'],
            ['kode_gejala' => 'G019', 'nama_gejala' => 'Sakit berdenyutan parah'],
            ['kode_gejala' => 'G020', 'nama_gejala' => 'Cengungan V pada gigi'],
            ['kode_gejala' => 'G021', 'nama_gejala' => 'Gigi berlubang besar'],
            ['kode_gejala' => 'G022', 'nama_gejala' => 'Ruang pulpa gigi terekspos'],
            ['kode_gejala' => 'G023', 'nama_gejala' => 'Gigi tampak berwarna hitam keseluruhan'],
            ['kode_gejala' => 'G024', 'nama_gejala' => 'Pembengkakan pada graham gigi bungsu'],
            ['kode_gejala' => 'G025', 'nama_gejala' => 'Peradangan pada gigi bungsu'],
            ['kode_gejala' => 'G026', 'nama_gejala' => 'Gigi tampak kuning diselimuti karang gigi'],
            ['kode_gejala' => 'G027', 'nama_gejala' => 'Gusi turun'],
        ];

        foreach ($gejala as $g) {
            DB::table('gejala')->insert([
                'kode_gejala' => $g['kode_gejala'],
                'nama_gejala' => $g['nama_gejala'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}

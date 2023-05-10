<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Ruangan;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruangan::insert([
            ['nama_ruangan' => 'Sistem Informasi', 'gedung' => 'd4', 'lantai' => '1', 'kepala_lab' => 'Umi Saadah, S.Kom., M.Kom.', 'fasilitas' => '30 PC Built-up, 1 PC Dosen Built-Up, LCD Proyektor', 'denah' => 'img-denah/c8FHwpJSUKVjGDLqGvWsSBvTmGH0wRfg2fJdDXQC.png'],
            ['nama_ruangan' => 'Database', 'gedung' => 'd4', 'lantai' => '1', 'kepala_lab' => 'Tessy Badriyah, S.Kom., M.T., Ph.D.', 'fasilitas' => '30 PC Mahasiswa,1 PC Dosen,OS Windows 10,Software RDBMS (Microsoft Access & Oracle Server),Tools Pengembangan  (Microsoft.NET; Macromedia Dreamweaver; dsb.)', 'denah' => 'img-denah/dRDWUCQkjWfXkjE72io6lnMMhF37SlSqWEGyXCz9.png'],
            ['nama_ruangan' => 'Soft Computing', 'gedung' => 'd4', 'lantai' => '2', 'kepala_lab' => 'Entin Martiana Kusumaningtyas, S.Kom., M.Kom.', 'fasilitas' => 'Komputer Mac,iPad,Samsung Galaxy Tab,Iris Camera','denah' => 'img-denah/NEPmqRBObkT4vrCTY8NFUO0wVDFqAiPnM9h5gxCX.png'],
            ['nama_ruangan' => 'Sistem informasi Geografis', 'gedung' => 'd4', 'lantai' => '2', 'kepala_lab' => 'Yuliana Setiowati', 'fasilitas' => 'PC,Handhelp GPS,GPS Tracker,Digitizer', 'denah' => 'img-denah/ySL3Ik1VozvPhwFZ6UMjVDzfm8DEb8cc71qfpQ0E.png'],
            ['nama_ruangan' => 'Computer Vision', 'gedung' => 'd4', 'lantai' => '3', 'kepala_lab' => 'Dr. Arna Fariza, S.Kom., M.Kom.', 'fasilitas' => '30 Komputer Macintosh,1 Komputer Dosen Macintosh,1 Peralatan Audio,1 LCD Proyektor', 'denah' => 'img-denah/mj2m9XlvoiNll69uIfCELKGmtvZuHaGy4icYuszx.png'],
            ['nama_ruangan' => 'Lab Jaringan Komputer', 'gedung' => 'd4', 'lantai' => '3', 'kepala_lab' => 'Fitri Setyorini, S.T., M.Sc.', 'fasilitas' => 'PC,ROuter,Switch,hub', 'denah' => 'img-denah/rLj9bxJbNUEnEu9nWCq2fPTcbpkj1oRXEQObitd9.png']
        ]);     
    }
}

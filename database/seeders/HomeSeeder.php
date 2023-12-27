<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'logo' => 'logo-web.png',
            'primary_color' => '#1d284b',
            'image_slides' => '"[
                "1.jpg",
                "2.jpg",
                "3.jpg",
                "4.jpg",
                "5.jpg",
                "6.jpg",
                "7.jpg",
                "8.jpg",
                "9.jpg"
            ]"',
            'slogan' => '"[
                {
                    "icon": "bi bi-truck",
                    "judul": "Bantuan Kemanusiaan",
                    "text": "Tanggap Darurat - Rehabilitasi Rekonstruksi dalam sistem One Muhammadiyah One Response sesuai prinsip - prinsip kemanusiaan"
                },
                {
                    "icon": "bi bi-person-hearts",
                    "judul": "Mitigasi Bencana",
                    "text": "Bekerja bersama sekolah, rumah sakit, pelajar, pemuda, perempuan, komunitas, media dan pemerintah menciptakan masyarakat tangguh."
                },
                {
                    "icon": "bi bi-bookmark-heart",
                    "judul": "Penguatan Sistem",
                    "text": "Manajemen kerelawanan, penguatan organisasi, pengembangan kerjasama & jaringan memperkuat sistem PB di Indonesia"
                }
            ]
            "',
            'image_documentation' => '"[1,2,3,4,5]"',
            'footer' => '"<div class="fs-1 fw-bold mb-3">"Together for Humanity"</div>
            <p> Muhammadiyah Disaster Management Center (MDMC) adalah sebutan dalam bahasa inggris dari Lembaga Penanggulangan Bencana Muhammadiyah yang merupakan salah satu unsur pembantu pimpinan Persyarikatan Muhammadiyah pada tingkat Pusat (Nasional), Wilayah (Provinsi) dan Daerah (Kabupaten) se Indonesia </p>"'
        ]);
    }
}

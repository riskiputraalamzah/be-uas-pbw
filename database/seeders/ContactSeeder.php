<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Sidoarjo',
                'slug' => 'sidoarjo',
                'type' => 'pusat',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15823.051077486976!2d112.69268565541992!3d-7.491424799999983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e0ca77a561e3%3A0x293c2a0584a74cd3!2sMasjid%20Baiturrahim%20Umsida%20Kampus%202!5e0!3m2!1sen!2sus!4v1699799078144!5m2!1sen!2sus',
                'lokasi' => ' Jl. Raya Gelam No.250, Pagerwaja, Gelam, Kec. Candi, Kabupaten Sidoarjo, Jawa
                Timur 61271, Indonesia',
                'email' => 'riskialamzah1@gmail.com',
                'telp' => '82233361877'
            ],
            [
                'name' => 'Lumajang',
                'slug' => 'lumajang',
                'type' => 'cabang',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15823.051077486976!2d112.69268565541992!3d-7.491424799999983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e0ca77a561e3%3A0x293c2a0584a74cd3!2sMasjid%20Baiturrahim%20Umsida%20Kampus%202!5e0!3m2!1sen!2sus!4v1699799078144!5m2!1sen!2sus',
                'lokasi' => ' Jl. Raya Gelam No.250, Pagerwaja, Gelam, Kec. Candi, Kabupaten Sidoarjo, Jawa
                Timur 61271, Indonesia',
                'email' => 'riskialamzah1@gmail.com',
                'telp' => '8223336877'
            ],
            [
                'name' => 'Surabaya',
                'slug' => 'surabya',
                'type' => 'cabang',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15823.051077486976!2d112.69268565541992!3d-7.491424799999983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e0ca77a561e3%3A0x293c2a0584a74cd3!2sMasjid%20Baiturrahim%20Umsida%20Kampus%202!5e0!3m2!1sen!2sus!4v1699799078144!5m2!1sen!2sus',
                'lokasi' => ' Jl. Raya Gelam No.250, Pagerwaja, Gelam, Kec. Candi, Kabupaten Sidoarjo, Jawa
                Timur 61271, Indonesia',
                'email' => 'riskialamzah1@gmail.com',
                'telp' => '82233361877'
            ]
        ];

        for ($i = 0; $i < count($data); $i++) {
            Contact::create([
                'name' => $data[$i]['name'],
                'slug' => $data[$i]['slug'],
                'type' => $data[$i]['type'],
                'map' => $data[$i]['map'],
                'lokasi' => $data[$i]['lokasi'],
                'email' => $data[$i]['email'],
                'telp' => $data[$i]['telp'],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Sambutan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sambutan::create([
            'judul_sambutan' => ' Budi Setiawan, Ketua Lembaga Resiliensi Bencana (MDMC) Pimpinan Pusat Muhammadiyah
            2022 – 2027',
            'foto_sambutan' => '1.jpg',
            'isi_sambutan' => '            <p>
            Lembaga Penanggulangan Bencana Pimpinan Pusat Muhammadiyah mengalami perubahan nama
            dengan tanpa mengurangi makna, visi dan misi lembaga yakni menjadi Lembaga Resiliensi
            Bencana Pimpinan Pusat Muhammadiyah mulai dari tahun 2022 serta memiliki sebutan dalam
            bahasa inggris “Muhammadiyah Disaster Management Center” atau disingkat MDMC. Lembaga
            ini dirintis tahun 2007 dengan nama “Pusat Penanggulangan Bencana” yang kemudian
            dikukuhkan menjadi lembaga yang bertugas mengkoordinasikan sumberdaya Muhammadiyah
            dalam kegiatan penanggulangan bencana oleh Pimpinan Pusat Muhammadiyah pasca Muktamar
            tahun 2010.
          </p>

          <p>
            MDMC bergerak dalam kegiatan penanggulangan bencana sesuai dengan definisi kegiatan
            penanggulangan bencana baik pada kegiatan Mitigasi dan Kesiapsiagaan, Tanggap Darurat
            dan juga Rehabilitasi. MDMC mengadopsi kode etik kerelawanan kemanusiaan dan piagam
            kemanusiaan yang berlaku secara internasional, mengembangkan misi pengurangan risiko
            bencana selaras dengan Hygo Framework for Action dan mengembangkan basis kesiapsiagaan
            di tingkat komunitas, sekolah dan rumah sakit sebagai basis gerakan Muhammadiyah sejak
            100 tahun yang lalu.
          </p>

          <p>
            MDMC bergerak dalam kegiatan kebencanaan di seluruh wilayah Negara Republik Indonesia,
            sesuai wilayah badan hukum Persyarikatan Muhammadiyah yang dalam operasionalnya
            mengembangkan MDMC di tingkat Pimpinan Wilayah Muhammadiyah (Propinsi) dan MDMC di
            tingkat Pimpinan Daerah Muhammadiyah (Kabupaten).
          </p>',
            'foto_sejarah' => "2.jpg",
            'isi_sejarah' => '  <p>
          <span class="fs-3 fw-bold"> Muhammadiyah Disaster Management Center (MDMC)</span>
          adalah sebutan dalam bahasa inggris dari Lembaga Penanggulangan Bencana Muhammadiyah
          yang merupakan salah satu unsur pembantu pimpinan Persyarikatan Muhammadiyah pada
          tingkat Pusat (Nasional), Wilayah (Provinsi) dan Daerah (Kabupaten) se Indonesia. Saat
          ini Lembaga Penanggulangan Bencana beralih nama dengan tanpa merubah visi dan misinya
          menjadi Lembaga Resilliensi Bencana sebagaiman Surat Keputusan Pimpinan Pusat
          Muhammadiyah nomor 153/KEP/I.0/D/2023 tentang Pengangkatan Pimpinan dan Anggota
          Lembaga Resiliensi Bencana Pimpinan Pusat Muhammadiyah Periode 2022-2027.
        </p>

        <p>
          LRB bertugas mengkoordinasikan sumberdaya Muhammadiyah dalam upaya tanggap darurat –
          pemulihan, mitigasi-kesiapsiagaan, dan penguatan sistem jaringan, organisasi dan
          pengelolaan sumberdaya penanggulangan bencana.
        </p>
        <p>
          Bekerja pada misi internasional dalam bendera Muhammadiyah Aid, menjadi bagian dari
          Muhammadiyah Covid-19 Command Center, anggota Humanitarian Forum Indonesia (HFI),
          anggota Platform Nasional PRB, dan anggota Konsorsium Pendidikan Bencana (KPB)
        </p>',
            'visi' => ' Berkembangnya fungsi dan sistem penanggulangan bencana yang unggul dan berbasis
        Penolong Kesengsaraan Oemoem (PKO) sehingga mampu meningkatkan kualitas dan kemajuan
        hidup masyarakat yang sadar dan tangguh terhadap bencana serta mampu memulihkan korban
        bencana secara cepat dan bermartabat',
            'misi' => ' <li>Meningkatkan dan Mengoptimalkan Sistem Penanggulangan Bencana di Muhammadiyah</li>
        <li>Mengembangkan Kesadaran Bencana di Lingkungan Muhammadiyah</li>
        <li>Memperkuat Jaringan dan Partisipasi Masyarakat dalam Penanggulangan Bencana.</li>',
            'program_kerja' => '    <p>
        Penanggulangan bencana adalah bagian dari nafas pergerakan Muhammadiyah sejak
        pendiriannya di tahun 1912 yang lalu. Komitmen ini telah diwujudkan baik dalam norma
        organisasi maupun dalam wujud nyata gerakan dengan berbagai karya inovatifnya sebagai
        pengusung gerakan Islam Berkemajuan. Berdirinya Majelis Penolong Kesengsaraan Oemoem
        (PKO) sebagai perangkat pelaksana misi persyarikatan di periode awal berdirinya
        organisasi, kemudian melahirkan berbagai varian aktualisasi ajaran Islam yang terus
        mengusahakan amalan terbaiknya dalam pemecahkan masalah kemanusiaan. Salah satu
        variannya berupa amal nyata dalam bidang penanggulangan bencana yang mewujud dalam
        bentuk Lembaga Penanggulangan Bencana Muhammadiyah atau disebut juga Muhammadiyah
        Disaster Management Center dengan singkatan MDMC.
      </p>

      <p>
        MDMC tidak saja mampu mengorganisir sumberdaya Muhammadiyah di tingkat lokal dan
        Nasional, namun juga telah berkiprah dalam misi kemanusiaan Internasional. Lembaga ini
        ikut menentukan arah dan kebijakan masalah kemanusiaan di berbagai forum
        Internasional, ikut menentukan arah dan kebijakan pengurangan risiko bencana di
        tingkat regional dan Internasional, serta membangun hubungan baik dengan pemerintah
        negara lain, lembaga regional dan juga lembaga Internasional .
      </p>

      <p>
        Kerja besar jaringan Muhammadiyah yang tersebar di 34 Provinsi -di dukung perangkat
        pimpinan di 429 Kabupaten/Kota, dan disertai perangkat pimpinan di 3.366
        Kabupaten/Kota- pada periode 2015 – 2020 ini bertujuan pencapaian kondisi obyektif
        secara nasional, berupa :
      </p>

      <p>
        Terciptanya transformasi (perubahan cepat ke arah kemajuan) sistem organisasi dan
        jaringan yang maju, profesional, dan modern.
      </p>

      <p>
        Berkembangnya sistem gerakan dan amal usaha yang berkualitas utama dan mandiri bagi
        terciptanya kondisi dan faktor-faktor pendukung terwujudnya masyarakat Islam yang
        sebenar-benarnya.
      </p>

      <p>
        Berkembangnya peran strategis Muhammadiyah dalam kehidupan umat, bangsa, dan dinamika
        global.
      </p>
      <p>
        Program Muhammadiyah hasil Muktamar ke-47 merupakan program Nasional/Pusat
        (keseluruhan) yang menjadi acuan umum bagi perumusan dan pelaksanaan program di
        tingkat Wilayah, Daerah, Cabang, Ranting, Organisasi Otonom, dan Amal Usaha
        Persyarikatan sesuai dengan kewenangan, kepentingan, dan kondisi masing-masing.
      </p>'
        ]);
    }
}

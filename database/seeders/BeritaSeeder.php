<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $berita = ['satu', 'dua', 'tiga'];
        $desc = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel totam dolorum, nisi laudantium praesentium accusantium, ipsa itaque corporis incidunt suscipit dignissimos excepturi est. Hic explicabo necessitatibus totam nulla assumenda! Optio.
        Officia fuga architecto ullam debitis rerum velit esse dignissimos suscipit? Accusantium facilis officiis nam, vitae ullam optio quo, illo corporis quae asperiores harum, iure blanditiis fugiat quos nobis fuga culpa?
        Ipsum a voluptatem, quis molestiae itaque fugiat fuga deleniti blanditiis illum error minima sapiente possimus, maiores earum repellat iste nam esse labore tenetur nesciunt vel cumque? Dolorum a corrupti ducimus?
        Sapiente alias dolores quas reprehenderit quaerat assumenda repudiandae esse magni quae, obcaecati dignissimos ad recusandae aliquam, voluptate quia cupiditate voluptatibus commodi quibusdam sunt. Dolorem eligendi quod voluptatibus, illum cumque quas.
        Id dolores asperiores magni facilis exercitationem non autem, provident laudantium deleniti voluptates ab aspernatur enim molestiae incidunt eaque doloribus dolorem suscipit! Est quisquam consectetur voluptas officiis cupiditate minus? Unde, minus?";

        for ($i = 0; $i < 3; $i++) {
            Berita::create([
                'foto' => '1.jpg',
                'name' => 'Berita ' . Str::ucfirst($berita[$i]),
                'slug' => 'berita-' . $berita[$i],
                'description' => $desc
            ]);
        }
    }
}

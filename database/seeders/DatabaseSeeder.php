<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Isimateris;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Yudha Triya',
            'nickname' => 'Yudha',
            'email' => 'yudhatriya07@gmail.com',
            'role' => '2',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Ary Boby Siregar',
            'nickname' => 'Boby',
            'email' => 'arybobyku@gmail.com',
            'role' => '1',
            'password' => bcrypt('12345678'),
        ]);
        Materi::create([
            'name' => 'Bedsite Teaching',
            'desc' => 'Yuk pahami lebih lanjut apa itu bedsite teaching',
        ]);

        Materi::create([
            'name' => 'Discharge Planning',
            'desc' => 'Pahami lebih lanjut apa itu discharge planning',
        ]);

        Materi::create([
            'name' => 'BOR',
            'desc' => 'Belajar bagaimana cara menghitung BOR',
        ]);

        Isimateris::create([
            'id_materi' => '1',
            'youtube' => '3OWzGuUhVY',
            'sub_bab' => 'Pengertian Bedsite Teaching',
            'isi' => 'Bedside teaching menurut dewi dkk (2019) merupakan metode pengajaran berbasis pasien dimana mahasiswa keperawatan yang menerima pelatihan bedside teaching mempraktekan kemampuan klinis dengan melihat dan mempelajari suatu kasus secara langsung, bedside teaching merupakan salah satu metode pembelajaran yang telah lama diterapkan pada pendidikan kesehatan di samping metode-metode pembelajaran klinik lainnya.<br>
            Sedangkan menurut Dorvil  (2016) Bedside teaching merupakan proses  pertukaran informasi penting pasien, tanggung jawab, dan akuntabilitas antara perawat yang pergi dan yang akan datang dalam upaya untuk memastikan kesinambungan perawatan yang aman dan pengiriman klinis terbaik. Dari  pengertian tersebut dapat disimpulkan bahwa bedside teaching merupakan metode pembelajaran yang dilakukan disamping tempat tidur yang melibatkan pasien secara aktif.',
        ]);
            Isimateris::create([
            'id_materi' => '1',
            'sub_bab' => 'Manfaat Bedsite Teaching',
            'isi' => 'Metode bedside teaching bermanfaat memberikan kesempatan pada mahasiswa untuk mempelajari pasien kelolaannya sehingga dapat memberikan  asuhan keperawatan dengan baik. Pada pelaksanaanya metode ini dilakukan kepada pasien hanya beberapa menit saja kemudian mahasiswa lebih banyak diskusi di ruang rapat (Yulistika, 2022).
            Selain itu metode bedside teaching juga bermanfaat membantu mahasiswa untuk mencapai kompetensi klinis dan mengembangkan keterampilan komunikasi, karena ada kesempatan bagi mahasiswa untuk berkomunikasi langsung dengan pasien (Manginte et al., 2019).
            ',
        ]);
            Isimateris::create([
            'id_materi' => '2',
            'sub_bab' => 'Defenisi Discharge Planing',
            'youtube' => '3OWzGuUhVY',
            'isi' => 'Discharge planning adalah pengembangan perencanaan yang dilakukan dan diberikan kepada pasien juga keluarga yang didalamnya terdapat penilaian pasien, pengembangan rencana yang disesuaikan dengan kebutuhan pasien, penyediaan layanan, termasuk pendidikan keluarga dan layanan rujukan serta tindak lanjut berupa evaluasi (Rezkiki & Fardilah, 2019).
            Mustikaningsih et al., (2020) juga berpendapat bawah discharge planning memiliki pengaruh yang besar dan penting dalam pelaksanaan pelayana kesehatan yaitu dapat mengurangi rawat inap pasien, memberikan intervensi yang tepat  untuk perawatan berkelanjutan dan kebutuhan pasien, sehingga terdapat kesinambungan perawatan antara pengaturan perawatan kesehatan dan masyarakat berdasarkan kebutuhan individu.
            ',
        ]);
            Isimateris::create([
            'id_materi' => '2',
            'sub_bab' => 'Tujuan Discharge Planning',
            'isi' => 'Menurut Lin et al., (2012) bahwa tujuan dari discharge planning ialah: <br>
            1.	Meningkatkan pemahaman pasien dan keluarga mengenai masalah kesehatan dan kemungkinan terjadinya kompliasi dari penyakit yang di derita dan hal-hal yang perlu pembatasan yang akan diberlakukan pada pasien di rumah. <br>
            2.	Mengembangkan kemampuan pasien dan keluarga untuk merawat dan memenuhi kebutuhan pasien dan memberikan lingkungan yang aman dan nyaman untuk pasien di rumah. <br>
            3.	Memastikan bahwa rujukan yang diperlukan untuk perawatan selanjutnya pada pasien adalah benar.

            ',
        ]);
    }
}

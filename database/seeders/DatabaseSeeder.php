<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kuis;
use App\Models\News;
use App\Models\User;
use App\Models\Materi;
use App\Models\Welcome;
use App\Models\Isimateris;
use App\Models\LandingImage;
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
            'id_materi' => 1,
            'youtube' => 'L2-Jm58DPKQ',
            'sub_bab' => 'Pengertian Bedsite Teaching',
            'isi' => 'Bedside teaching menurut dewi dkk (2019) merupakan metode pengajaran berbasis pasien dimana mahasiswa keperawatan yang menerima pelatihan bedside teaching mempraktekan kemampuan klinis dengan melihat dan mempelajari suatu kasus secara langsung, bedside teaching merupakan salah satu metode pembelajaran yang telah lama diterapkan pada pendidikan kesehatan di samping metode-metode pembelajaran klinik lainnya.<br>
            Sedangkan menurut Dorvil  (2016) Bedside teaching merupakan proses  pertukaran informasi penting pasien, tanggung jawab, dan akuntabilitas antara perawat yang pergi dan yang akan datang dalam upaya untuk memastikan kesinambungan perawatan yang aman dan pengiriman klinis terbaik. Dari  pengertian tersebut dapat disimpulkan bahwa bedside teaching merupakan metode pembelajaran yang dilakukan disamping tempat tidur yang melibatkan pasien secara aktif.',
        ]);

        Isimateris::create([
            'id_materi' => 1,
            'sub_bab' => 'Manfaat Bedsite Teaching',
            'isi' => 'Metode bedside teaching bermanfaat memberikan kesempatan pada mahasiswa untuk mempelajari pasien kelolaannya sehingga dapat memberikan  asuhan keperawatan dengan baik. Pada pelaksanaanya metode ini dilakukan kepada pasien hanya beberapa menit saja kemudian mahasiswa lebih banyak diskusi di ruang rapat (Yulistika, 2022).
            Selain itu metode bedside teaching juga bermanfaat membantu mahasiswa untuk mencapai kompetensi klinis dan mengembangkan keterampilan komunikasi, karena ada kesempatan bagi mahasiswa untuk berkomunikasi langsung dengan pasien (Manginte et al., 2019).
            ',
        ]);
        Isimateris::create([
            'id_materi' => 1,
            'sub_bab' => 'Cara Melakukan Bedsite Teaching',
            'isi' => 'Adapun Cara Melakukan Metode bedside teaching yaitu tidur serta bermanfaat memberikan kesempatan pada mahasiswa untuk mempelajari pasien kelolaannya sehingga dapat memberikan  asuhan keperawatan dengan baik. Pada pelaksanaanya metode ini dilakukan kepada pasien hanya beberapa menit saja kemudian mahasiswa lebih banyak diskusi di ruang rapat (Yulistika, 2022).
            Selain itu metode bedside teaching juga bermanfaat membantu mahasiswa untuk mencapai kompetensi klinis dan mengembangkan keterampilan komunikasi, karena ada kesempatan bagi mahasiswa untuk berkomunikasi langsung dengan pasien (Manginte et al., 2019).
            ',
        ]);
        Isimateris::create([
            'id_materi' => 2,
            'sub_bab' => 'Defenisi Discharge Planing',
            'youtube' => 'L2-Jm58DPKQ',
            'isi' => 'Discharge planning adalah pengembangan perencanaan yang dilakukan dan diberikan kepada pasien juga keluarga yang didalamnya terdapat penilaian pasien, pengembangan rencana yang disesuaikan dengan kebutuhan pasien, penyediaan layanan, termasuk pendidikan keluarga dan layanan rujukan serta tindak lanjut berupa evaluasi (Rezkiki & Fardilah, 2019).
            Mustikaningsih et al., (2020) juga berpendapat bawah discharge planning memiliki pengaruh yang besar dan penting dalam pelaksanaan pelayana kesehatan yaitu dapat mengurangi rawat inap pasien, memberikan intervensi yang tepat  untuk perawatan berkelanjutan dan kebutuhan pasien, sehingga terdapat kesinambungan perawatan antara pengaturan perawatan kesehatan dan masyarakat berdasarkan kebutuhan individu.
            ',
        ]);
        Isimateris::create([
            'id_materi' => 2,
            'sub_bab' => 'Manfaat Discharge Planing',
            'isi' => 'Adapun Manfaat Discharge planning adalah pengembangan perencanaan yang dilakukan dan diberikan kepada pasien juga keluarga yang didalamnya terdapat penilaian pasien, pengembangan rencana yang disesuaikan dengan kebutuhan pasien, penyediaan layanan, termasuk pendidikan keluarga dan layanan rujukan serta tindak lanjut berupa evaluasi (Rezkiki & Fardilah, 2019).
            Mustikaningsih juga berpendapat bawah discharge planning memiliki pengaruh yang besar dan penting dalam pelaksanaan pelayana kesehatan yaitu dapat mengurangi rawat inap pasien, memberikan intervensi yang tepat  untuk perawatan berkelanjutan dan kebutuhan pasien, sehingga terdapat kesinambungan perawatan antara pengaturan perawatan kesehatan dan masyarakat berdasarkan kebutuhan individu.
            ',
        ]);
        Isimateris::create([
            'id_materi' => 2,
            'sub_bab' => 'Tujuan Discharge Planning',
            'isi' => 'Menurut Lin et al., (2012) bahwa tujuan dari discharge planning ialah: <br>
            1.	Meningkatkan pemahaman pasien dan keluarga mengenai masalah kesehatan dan kemungkinan terjadinya kompliasi dari penyakit yang di derita dan hal-hal yang perlu pembatasan yang akan diberlakukan pada pasien di rumah. <br>
            2.	Mengembangkan kemampuan pasien dan keluarga untuk merawat dan memenuhi kebutuhan pasien dan memberikan lingkungan yang aman dan nyaman untuk pasien di rumah. <br>
            3.	Memastikan bahwa rujukan yang diperlukan untuk perawatan selanjutnya pada pasien adalah benar.
            ',
        ]);
        Isimateris::create([
            'id_materi' => 3,
            'sub_bab' => 'Pengertian BOR',
            'isi' => 'Menurut Lin et al., (2012) bahwa tujuan dari discharge planning ialah: <br>
            1.	Meningkatkan pemahaman pasien dan keluarga mengenai masalah kesehatan dan kemungkinan terjadinya kompliasi dari penyakit yang di derita dan hal-hal yang perlu pembatasan yang akan diberlakukan pada pasien di rumah. <br>
            2.	Mengembangkan kemampuan pasien dan keluarga untuk merawat dan memenuhi kebutuhan pasien dan memberikan lingkungan yang aman dan nyaman untuk pasien di rumah. <br>
            3.	Memastikan bahwa rujukan yang diperlukan untuk perawatan selanjutnya pada pasien adalah benar.
            ',
        ]);
        Kuis::create([
            'soal' => 'Tujuan dari pemberian senam nifas yaitu?',
            'jawaban' => '1',
            'opsi1' => 'Mempercepat proses pemulihan keadaan ibu',
            'opsi2' => 'Memperlambat proses pemulihan',
            'opsi3' => 'Memudahkan melakukan aktivitas',
            'opsi4' => 'Menambah nafsu makan',
        ]);
        Kuis::create([
            'soal' => 'Apa yang dimaksud dengan senam nifas?',
            'jawaban' => '1',
            'opsi1' => 'Gerakan-gerakan yang dilakukan ibu setelah melahirkan ',
            'opsi2' => 'Gerakan-gerakan yang dilakukan ibu sebelum melahirkan',
            'opsi3' => 'Gerakan-gerakan waktu ibu melahirkan',
            'opsi4' => 'Senam nifas dilakukan pada bulan ke 20 saja',
        ]);
        Kuis::create([
            'soal' => 'Kapan ibu mulai menyusi?',
            'jawaban' => '2',
            'opsi1' => 'Seminggu setelah melahirkan',
            'opsi2' => 'Segara setelah melahirkan',
            'opsi3' => '1 hari setelah melahirkan',
            'opsi4' => '1 hari sebelum melahirkan',
        ]);
        Welcome::create([
            'name' => 'TIS',
            'image' => 'isimateri-images/KhcGVWs3vJyMhLXMN6gN570NnNZvlvOwveS09LFR.png',
        ]);
        Welcome::create([
            'name' => 'BOR',
            'image' => 'isimateri-images/hSdgDtv9U86NscL6P30rDNcrb4MnvRetEdeOOOxv.png',
        ]);
        Welcome::create([
            'name' => 'Bedsite',
            'image' => 'isimateri-images/fdRgXWW6L9vB6UF75sjX7RK9ZKah8zkrCzNcQOMa.png',
        ]);
        Welcome::create([
            'name' => 'Discharge',
            'image' => 'isimateri-images/A5JTB7nyv2FHcomWrZi4CRppAH4wD2l9dgpnBrn4.png',
        ]);
        Welcome::create([
            'name' => 'Evaluasi Kerja',
            'image' => 'isimateri-images/jAclDZ972g4RFhL8crvoUPTan0AmwVSZDhrTQrsj.png',
        ]);
        News::create([
            'title' => 'Sebanyak 37.871 Peserta Ikuti UTBK-SBMPTN USU',
            'slug' => 'acara-puncak-dies-natalis-ke-23-fakultas-keperawatan-usu',
            'excerpt' => 'Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Nata...',
            'isi' =>
                '<div> Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU yang merupakan acara puncak dari beberapa rangkaian kegiatan yang telah diadakan sebelumnya yaitu berupa Funwalk, Pemeriksaan Kesehatan gratis, aneka lomba dan bazaar.&nbsp;</div><div>Dies Natalis ke-23 Fakultas Keperawatan USU dihadiri oleh para undangan seperti Rektor USU, para Wakil Rektor USU, Direktur Utama RSP USU, Direktur Direktorat di lingkungan USU, Kepala Badan di lingkungan USU, para Dekan di lingkungan USU, Dinas Kesehatan Kota Medan, Dinas Kesehatan Provinsi Sumatera Utara, Institusi Pendidikan Kesehatan di kota Medan, dan undangan lainnya.&nbsp;<br>Diawali dengan Sambutan oleh Ketua Panitia Dies Natalis ke-23 Fakultas Keperawatan USU, Ikhsanuddin A. Harahap, S.Kp., MNS menyampaikan terima kasih kepada para tamu undangan yang telah hadir dalam acara puncak Dies Natalis ke-23 Fakultas Keperawatan USU dan juga kepada seluruh panitia yang terlibat pada acara ini.&nbsp;<br>&nbsp;Dilanjutkan dengan Pidato Dekan Fakultas Keperawatan USU, Dr. Dudut Tanjung, S.Kp., M.Kep., Sp.KMB menyampaikan bahwa Fakultas Keperawatan di usianya yang ke-23 mengalami perkembangan yang cukup pesat, baik dari aspek sarana, prasarana, kualitas tenaga dosen, tenaga kependidikan, serta kerjasama yang dibina baik dalam maupun luar negeri. Fakultas Keperawatan telah mendapatkan apresiasi besar oleh Rektor USU mewakili universitas bersama dengan 12 PTN se-Indonesia diajukan ke Kemendikbud Ristek RI dalam upaya Pembangunan Zona Integritas menuju Wilayah Bebas Korupsi (ZI-WBK).Rektor USU, Dr. Muryanto Amin, S.Sos., M.Si dalam sambutannya menyampaikan Selamat Ulang Tahun kepada Fakultas Keperawatan USU yang ke-23. Diibaratkan manusia, usia 23 merupakan periode awal masa dewasa seorang manusia, usia enerjik untuk melakukan hal-hal besar. Muryanto Amin juga mengingatkan bahwa dalam mengelola fakultas tidak bisa dilakukan tanpa rencana yang baik. Kegiatan apapun yang akan dilakukan tahun depan, wajib direncanakan secara matang di tahun ini agar dapat terealisasi dengan baik.Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU ditutup dengan Orasi Ilmiah oleh Ketua Umum DPP PPNI, Dr. Harif Fadhillah, S.Kp., SH., M.Kep., MH. dengan judul “Penguatan Kompetensi Perawat melalui Pendidikan Keperawatan Berorientasi Global”. Institusi pendidikan keperawatan sebagai institusi yang mempersiapkan SDM Perawat yang berkualitas secara formal tidaklah mudah dan penuh tantangan dalam penyelenggaraan pendidikan keperawatan apalagi untuk menjawab tantangan global, karenanya selain mengacu pada standar kompetensi dan kecenderungan keperawatan dunia. Pendidikan keperawatan di Indonesia juga tak lepas dari isu tantangan global yaitu Disrupsi. Disrupsi merupakan penetrasi dari Revolusi Industri 4.0 (RI 4.0) dan bahkan ada beberapa negara mengembangkan diskusinya pada RI 5.0.&nbsp;</div>',
        ]);
        News::create([
            'title' => 'Dies Natalis FKEP USU',
            'slug' => 'dies-natalis-fkep-usu',
            'excerpt' => 'Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Nata...',
            'isi' =>
                '<div> Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU yang merupakan acara puncak dari beberapa rangkaian kegiatan yang telah diadakan sebelumnya yaitu berupa Funwalk, Pemeriksaan Kesehatan gratis, aneka lomba dan bazaar.&nbsp;</div><div>Dies Natalis ke-23 Fakultas Keperawatan USU dihadiri oleh para undangan seperti Rektor USU, para Wakil Rektor USU, Direktur Utama RSP USU, Direktur Direktorat di lingkungan USU, Kepala Badan di lingkungan USU, para Dekan di lingkungan USU, Dinas Kesehatan Kota Medan, Dinas Kesehatan Provinsi Sumatera Utara, Institusi Pendidikan Kesehatan di kota Medan, dan undangan lainnya.&nbsp;<br>Diawali dengan Sambutan oleh Ketua Panitia Dies Natalis ke-23 Fakultas Keperawatan USU, Ikhsanuddin A. Harahap, S.Kp., MNS menyampaikan terima kasih kepada para tamu undangan yang telah hadir dalam acara puncak Dies Natalis ke-23 Fakultas Keperawatan USU dan juga kepada seluruh panitia yang terlibat pada acara ini.&nbsp;<br>&nbsp;Dilanjutkan dengan Pidato Dekan Fakultas Keperawatan USU, Dr. Dudut Tanjung, S.Kp., M.Kep., Sp.KMB menyampaikan bahwa Fakultas Keperawatan di usianya yang ke-23 mengalami perkembangan yang cukup pesat, baik dari aspek sarana, prasarana, kualitas tenaga dosen, tenaga kependidikan, serta kerjasama yang dibina baik dalam maupun luar negeri. Fakultas Keperawatan telah mendapatkan apresiasi besar oleh Rektor USU mewakili universitas bersama dengan 12 PTN se-Indonesia diajukan ke Kemendikbud Ristek RI dalam upaya Pembangunan Zona Integritas menuju Wilayah Bebas Korupsi (ZI-WBK).Rektor USU, Dr. Muryanto Amin, S.Sos., M.Si dalam sambutannya menyampaikan Selamat Ulang Tahun kepada Fakultas Keperawatan USU yang ke-23. Diibaratkan manusia, usia 23 merupakan periode awal masa dewasa seorang manusia, usia enerjik untuk melakukan hal-hal besar. Muryanto Amin juga mengingatkan bahwa dalam mengelola fakultas tidak bisa dilakukan tanpa rencana yang baik. Kegiatan apapun yang akan dilakukan tahun depan, wajib direncanakan secara matang di tahun ini agar dapat terealisasi dengan baik.Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU ditutup dengan Orasi Ilmiah oleh Ketua Umum DPP PPNI, Dr. Harif Fadhillah, S.Kp., SH., M.Kep., MH. dengan judul “Penguatan Kompetensi Perawat melalui Pendidikan Keperawatan Berorientasi Global”. Institusi pendidikan keperawatan sebagai institusi yang mempersiapkan SDM Perawat yang berkualitas secara formal tidaklah mudah dan penuh tantangan dalam penyelenggaraan pendidikan keperawatan apalagi untuk menjawab tantangan global, karenanya selain mengacu pada standar kompetensi dan kecenderungan keperawatan dunia. Pendidikan keperawatan di Indonesia juga tak lepas dari isu tantangan global yaitu Disrupsi. Disrupsi merupakan penetrasi dari Revolusi Industri 4.0 (RI 4.0) dan bahkan ada beberapa negara mengembangkan diskusinya pada RI 5.0.&nbsp;</div>',
        ]);

        LandingImage::create([
            'image' => 'isimateri-images/X1ebIYrdvoERI8cVHY06YOB9fmnsStsaoMPVvEKO.png'
        ]);
        
    }
}

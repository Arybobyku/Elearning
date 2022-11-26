<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if ($message == 'Hi') {
                $this->askName($botman);
            } else if ($message == 'Apa itu beside teaching?') {
                $botman->reply("Bedside teaching menurut dewi dkk (2019) merupakan metode pengajaran berbasis pasien dimana mahasiswa keperawatan yang menerima pelatihan bedside teaching mempraktekan kemampuan klinis dengan melihat dan mempelajari suatu kasus secara langsung, bedside teaching merupakan salah satu metode pembelajaran yang telah lama diterapkan pada pendidikan kesehatan di samping metode-metode pembelajaran klinik lainnya.");
            } else if ($message == 'Apa itu discharge planning?') {
                $botman->reply("Discharge planning adalah pengembangan perencanaan yang dilakukan dan diberikan kepada pasien juga keluarga yang didalamnya terdapat penilaian pasien, pengembangan rencana yang disesuaikan dengan kebutuhan pasien, penyediaan layanan, termasuk pendidikan keluarga dan layanan rujukan serta tindak lanjut berupa evaluasi (Rezkiki & Fardilah, 2019).");
            } else if ($message == 'Apa itu handover?') {
                $botman->reply("Handover merupakan suatu bagian dari proses pemberian asuhan keperawatan yang dilakukan menggunakan komunikasi antar perawat saat melakukan pergantian shift untuk memberikan informasi (laporan) terkait kondisi pasien, tujuan, rencana asuhan keperawatan, pengobatan serta menentukan prioritas pelayanan yang diberikan kepada pasien (Wigiarti dkk 2020).");
            } else if ($message == 'Apa itu supervisi manajemen?') {
                $botman->reply("Supervisi berasal dari kata super (Latin: di atas) dan videre (Latin: melihat) yang berarti “melihat dari atas”. Secara umum supervisi adalah melakukan pengamatan secara langsung dan berkala oleh “atasan” terhadap pekerjaan yang dilakukan oleh “bawahan”. Atasan dapat memberikan petunjuk atau bantuan yang bersifat langsung kepada “bawahan” apabila terjadi suatu kesalahan sehingga masalah dapat teratasi.");
            } else if ($message == 'Apa itu dokumentasi keperawatan?') {
                $botman->reply("Dokumentasi keperawatan merupakan bukti pencatatan dan pelaporan yang dimiliki perawat dalam melakukan catatan perawatan yang berguna otentik atau semua warkat asli yang dapat dibuktikan atau dijadikan bukti dalam untuk kepentingan klien, perawat, dan tim kesehatan dalam memberikan pelayanan kesehatan dengan dasar komunikasi yang akurat dan lengkap secara tertulis dengan tanggung jawab perawat (Hidayat, 2002).");
            } else if ($message == 'Apa itu evaluasi kinerja tim?') {
                $botman->reply("Evaluasi adalah sebuah proses menilai, membandingkan dan mengukur hasil yang dicapai dengan hasil yang ditetapkan
                (Fauzi & Nugroho, 2020). Sedangkan kinerja perawat didefinisikan sebagai kegiatan yang diberikan perawat kepada klien
                berupa asuhan keperawatan untuk meningkatkan respon adaptasi (Manalu dkk., 2021).");
            } else if ($message == 'Apa itu meeting morning?') {
                $botman->reply("Meeting morning menurut Dewi dkk (2019) dalah komunikasi antara ketua tim dengan perawat pelaksanan yang dipimpin oleh ketua tim atau penanggung jawab tim untuk membahas permasalahan yang bersifat manajerial, staf, seperti sarana prasarana dan lainnya");
            } else if ($message == 'Apa itu preconference?') {
                $botman->reply("Pre conference merupakan konferensi yang dilakukan pada awal pelaksaan asuhan keperawatan setelah pasien pertama masuk dan dilakukan identifikasi atau pengkajian masalah beserta tindakan penyelesaian selanjutnya (Kamalia, 2020)");
            } else if ($message == 'Apa itu post conference?') {
                $botman->reply("Menurut Modul MPKP (2006) dalam Endra, dkk (2016) post conference merupakan komunikasi ketua tim dan perawat perawat pelaksana tentang hasil kegiatan sepenjang shift dan sebelum operan kepada shift berikut. Isi post conference adalah hasil asuhan keperawatan tiap klien dan hal yang paling penting untuk operan (tindak lanjut).");
            } else if ($message == 'Apa itu ronde keperawatan?') {
                $botman->reply("Menurut Clement (2011) dalam  ronde keperawatan merupakan proses interaksi anatar pengajar dan perawat atau mahasiswa dimana terjadi proses pembelajaran. Ronde keperawatan dilakukan oleh teacher nurse dengan anggota stafnya atau siswa untuk pemahaman yang jelas terkait penyakit dan efek perawatan untuk setiap pasien (Kamalia, Said, & Risky, 2020).");
            } else if ($message == 'Apa itu pendelegasian?') {
                $botman->reply("Pendelegasian adalah pelimpahan wewenang dan tanggung jawab formal kepada orang lain. Pendelegasian tugas adalah pelimpahan wewenang dan tanggung jawab kepada staf guna melakukan tindakan dengan batas kewenangan tertentu (Mobalen, 2022)");
            } else {
                $botman->reply("Write 'Hi' for testing...");
            }
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }

    public function ariga($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }
}

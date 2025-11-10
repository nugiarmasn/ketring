<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat admin user
        $admin = User::create([
            'name' => 'Admin RM Bu Astuti',
            'email' => 'admin@katering.com',
            'password' => Hash::make('password'),
        ]);

        // Data blog posts dengan konten menarik
        $posts = [
            [
                'title' => 'Tips Memilih Menu Katering untuk Acara Pernikahan',
                'content' => "Pernikahan adalah momen spesial yang harus sempurna, termasuk dalam pemilihan menu katering. Berikut beberapa tips yang bisa membantu Anda:\n\n1. Kenali Selera Tamu Undangan\nPertimbangkan demografi tamu, apakah lebih banyak anak muda atau orang tua. Sesuaikan menu dengan selera mayoritas.\n\n2. Pilih Menu Variatif\nSediakan minimal 3-4 pilihan menu utama, termasuk opsi vegetarian untuk tamu yang memiliki pantangan makanan tertentu.\n\n3. Pertimbangkan Musim dan Cuaca\nUntuk acara outdoor di siang hari, pilih menu yang segar dan tidak terlalu berat. Untuk malam hari, menu hangat lebih cocok.\n\n4. Test Tasting Sebelum Acara\nJangan ragu untuk meminta sesi tasting. Ini penting untuk memastikan rasa dan kualitas makanan sesuai ekspektasi.\n\n5. Budget yang Realistis\nTentukan budget per porsi yang sesuai dengan kualitas yang diinginkan. Jangan hanya fokus pada harga termurah.\n\nRM Bu Astuti siap membantu mewujudkan pernikahan impian Anda dengan menu berkualitas dan pelayanan terbaik!",
                'image' => 'https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=800'
            ],
            [
                'title' => '5 Menu Nasi Box Favorit untuk Acara Kantor',
                'content' => "Nasi box adalah solusi praktis untuk acara kantor. Berikut 5 menu favorit yang selalu jadi pilihan:\n\n1. Nasi Box Ayam Goreng Kremes\nMenu klasik yang tidak pernah mengecewakan. Ayam goreng renyah dengan kremesan gurih, dilengkapi sambal dan lalapan segar.\n\n2. Nasi Box Rendang Sapi\nMenu premium dengan cita rasa khas Padang. Rendang empuk dengan bumbu meresap sempurna.\n\n3. Nasi Box Ikan Bakar\nPilihan sehat dengan protein tinggi. Ikan segar dibakar dengan bumbu rempah pilihan.\n\n4. Nasi Box Ayam Geprek\nFavorit anak muda! Ayam crispy dengan sambal geprek level sesuai permintaan.\n\n5. Nasi Box Sayur Asem + Tahu Tempe\nOpsi vegetarian yang tetap lezat dan mengenyangkan. Cocok untuk yang ingin menu lebih ringan.\n\nSetiap nasi box dilengkapi dengan nasi putih pulen, lauk pauk, sayur, dan buah sebagai pencuci mulut. Hubungi kami untuk pemesanan!",
                'image' => 'https://images.unsplash.com/photo-1585032226651-759b368d7246?w=800'
            ],
            [
                'title' => 'Cara Menghitung Porsi Katering yang Tepat',
                'content' => "Menghitung porsi katering yang tepat sangat penting agar tidak kekurangan atau kelebihan. Berikut panduannya:\n\n1. Hitung Jumlah Tamu dengan Akurat\nTambahkan buffer 5-10% dari jumlah undangan untuk mengantisipasi tamu tambahan.\n\n2. Pertimbangkan Jenis Acara\n- Acara formal (pernikahan, gathering): 1 porsi per orang\n- Acara santai (ulang tahun, arisan): tambah 20% untuk porsi berbagi\n- Meeting/seminar: 1 porsi cukup\n\n3. Waktu Acara\nAcara makan siang biasanya membutuhkan porsi lebih banyak dibanding makan malam.\n\n4. Menu Pendamping\nJika ada snack atau appetizer, porsi utama bisa dikurangi 10-15%.\n\n5. Karakteristik Tamu\n- Acara keluarga: porsi standar cukup\n- Acara anak muda/pria: tambah 15-20%\n- Acara formal: porsi standar\n\nTips: Lebih baik sedikit berlebih daripada kekurangan. Sisa makanan bisa dibagikan ke tamu sebagai bingkisan.\n\nKonsultasikan kebutuhan Anda dengan tim RM Bu Astuti untuk perhitungan yang lebih akurat!",
                'image' => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=800'
            ],
            [
                'title' => 'Menu Tradisional vs Modern: Mana yang Cocok?',
                'content' => "Bingung memilih antara menu tradisional atau modern untuk acara Anda? Berikut perbandingannya:\n\nMenu Tradisional:\n+ Familiar untuk semua kalangan\n+ Cita rasa autentik dan khas daerah\n+ Cocok untuk acara formal dan keluarga\n+ Budget lebih terjangkau\n- Kurang variasi untuk generasi muda\n\nContoh: Nasi liwet, gudeg, soto, rawon, rendang\n\nMenu Modern/Fusion:\n+ Tampilan lebih Instagram-able\n+ Menarik untuk generasi milenial\n+ Variasi rasa lebih beragam\n+ Cocok untuk acara semi-formal\n- Harga cenderung lebih tinggi\n- Tidak semua orang familiar dengan rasanya\n\nContoh: Nasi kotak Japanese style, pasta box, salad bowl, fusion rice\n\nRekomendasi Kami:\nKombinasikan keduanya! Sediakan 70% menu tradisional dan 30% menu modern. Atau pisahkan berdasarkan waktu:\n- Makan siang: Menu tradisional\n- Snack/dessert: Menu modern\n\nRM Bu Astuti menyediakan kedua pilihan dengan kualitas terjamin. Konsultasikan menu impian Anda dengan kami!",
                'image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800'
            ],
            [
                'title' => 'Tips Hemat Budget Katering Tanpa Mengurangi Kualitas',
                'content' => "Ingin acara berkesan tapi budget terbatas? Ikuti tips ini:\n\n1. Pesan Jauh-jauh Hari\nPemesanan minimal 2 minggu sebelumnya biasanya mendapat harga lebih baik dan bisa nego.\n\n2. Pilih Menu Seasonal\nBahan makanan musiman lebih murah dan segar. Tanyakan menu rekomendasi sesuai musim.\n\n3. Kurangi Variasi, Tingkatkan Kualitas\nDaripada 10 menu biasa, lebih baik 5 menu berkualitas tinggi.\n\n4. Manfaatkan Paket Promo\nBanyak katering menawarkan paket bundling yang lebih ekonomis.\n\n5. Sesuaikan Porsi\nUntuk acara dengan banyak snack, porsi utama bisa dikurangi sedikit.\n\n6. Pilih Hari Weekday\nAcara di hari kerja biasanya lebih murah dibanding weekend.\n\n7. Sewa Peralatan Sendiri\nJika memungkinkan, sewa peralatan makan sendiri untuk menghemat biaya sewa dari katering.\n\n8. Negosiasi Paket\nJangan ragu untuk nego, terutama untuk pesanan dalam jumlah besar.\n\nIngat: Hemat bukan berarti murahan. Fokus pada nilai (value) yang didapat, bukan hanya harga murah.\n\nRM Bu Astuti memberikan harga terbaik dengan kualitas terjaga. Hubungi kami untuk penawaran spesial!",
                'image' => 'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=800'
            ],
            [
                'title' => 'Tren Menu Katering 2024',
                'content' => "Industri katering terus berkembang. Berikut tren menu yang populer di tahun 2024:\n\n1. Healthy Bowl Options\nMenu sehat dalam bowl seperti poke bowl, buddha bowl, dan salad bowl semakin diminati.\n\n2. Plant-Based Menu\nMenu vegetarian dan vegan tidak lagi dianggap 'hambar'. Sekarang banyak pilihan lezat berbahan nabati.\n\n3. Comfort Food dengan Sentuhan Modern\nMakanan tradisional dikemas dengan presentasi modern dan instagramable.\n\n4. Sustainable Catering\nKesadaran lingkungan meningkat. Kemasan ramah lingkungan jadi nilai plus.\n\n5. Interactive Food Station\nTamu bisa customize menu mereka sendiri, seperti DIY taco bar atau noodle station.\n\n6. Mini Portions / Grazing Table\nBanyak variasi dalam porsi kecil, memungkinkan tamu mencoba berbagai menu.\n\n7. Local Ingredients\nMenu dengan bahan lokal semakin dihargai karena mendukung petani lokal dan lebih segar.\n\n8. Dessert Bar\nMeja dessert dengan berbagai pilihan manis jadi highlight acara.\n\nRM Bu Astuti selalu update dengan tren terkini sambil tetap menjaga cita rasa tradisional. Mari ciptakan pengalaman kuliner yang berkesan untuk acara Anda!",
                'image' => 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=800'
            ],
            [
                'title' => 'Panduan Lengkap Memesan Katering untuk Acara Besar',
                'content' => "Merencanakan acara besar dengan ratusan tamu? Ikuti panduan ini:\n\n1. Mulai 2-3 Bulan Sebelumnya\nUntuk acara besar (200+ orang), mulai riset dan booking katering minimal 2 bulan sebelumnya.\n\n2. Tentukan Budget\nAlokasikan 30-40% budget acara untuk makanan dan minuman.\n\n3. Buat Checklist Kebutuhan\n- Jumlah tamu pasti\n- Jenis acara (formal/informal)\n- Waktu acara\n- Lokasi dan fasilitas\n- Tema acara\n\n4. Riset dan Bandingkan\nHubungi minimal 3 penyedia katering, bandingkan menu, harga, dan review.\n\n5. Jadwalkan Tasting Session\nWajib mencoba menu sebelum final order. Bawa 2-3 orang untuk pendapat objektif.\n\n6. Diskusi Detail\n- Menu utama dan alternatif\n- Dessert dan minuman\n- Peralatan yang disediakan\n- Petugas servis\n- Waktu setup dan cleanup\n\n7. Buat Kontrak Tertulis\nPastikan semua kesepakatan tertulis jelas, termasuk kebijakan pembatalan.\n\n8. Konfirmasi H-7\nRecheck jumlah porsi, waktu, dan detail lainnya seminggu sebelum acara.\n\n9. Siapkan Contact Person\nTunjuk 1 orang sebagai koordinator dengan pihak katering di hari H.\n\nRM Bu Astuti berpengalaman menangani acara besar dengan profesional. Percayakan acara penting Anda pada kami!",
                'image' => 'https://images.unsplash.com/photo-1555244162-803834f70033?w=800'
            ],
            [
                'title' => 'Menu Andalan RM Bu Astuti yang Wajib Dicoba',
                'content' => "RM Bu Astuti memiliki signature menu yang jadi favorit pelanggan setia:\n\n1. Ayam Goreng Bu Astuti\nResep turun temurun dengan bumbu rempah 17 jenis. Ayam kampung pilihan dimarinasi 24 jam untuk rasa yang meresap sempurna. Tekstur luar renyah, dalam juicy!\n\n2. Rendang Sapi Premium\nDimasak selama 8 jam dengan santan kental dan bumbu tradisional. Daging empuk, bumbu meresap hingga ke dalam. Harga sedikit lebih mahal tapi worth it!\n\n3. Soto Ayam Kampung\nKuah bening dengan rempah segar, ayam kampung yang empuk, dan pelengkap lengkap. Cocok untuk segala suasana.\n\n4. Nasi Liwet Komplit\nNasi pulen dimasak dengan santan, disajikan dengan ayam suwir, teri kacang, tempe orek, dan sambal terasi. Comfort food terbaik!\n\n5. Gurame Goreng/Bakar\nIkan gurame segar langsung dari kolam, bisa pilih digoreng kering atau dibakar dengan bumbu kecap.\n\n6. Paket Prasmanan Lengkap\nNasi putih, 3 pilihan lauk, 2 sayur, sambal, kerupuk, dan buah. Porsi pas, harga bersahabat.\n\nSemua menu menggunakan bahan segar pilihan dan dimasak dengan standar kebersihan tinggi. Sudah tersertifikasi halal dan higienis.\n\nYuk pesan sekarang! Hubungi kami di WhatsApp atau kunjungi langsung resto kami.",
                'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=800'
            ],
        ];

        // Insert posts
        foreach ($posts as $postData) {
            Post::create([
                'title' => $postData['title'],
                'content' => $postData['content'],
                'user_id' => $admin->id,
            ]);
        }
    }
}
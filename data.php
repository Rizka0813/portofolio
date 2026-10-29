<?php
// data.php - Semua data konten website

$profile = [
    'name'    => 'Rizka Yuniarti',
    'role'    => 'Visual Designer',
    'email'   => 'rizkayuniartiii@gmail.com',
    'phone'   => '+62 813-1761-3731',
    'about'   => 'Hallo, Saya Rizka Yuniarti<br> Lulusan S1 Teknik Informatika yang memiliki ketertarikan pada bidang teknologi informasi, pengembangan teknologi digital, serta penulisan. Selama masa perkuliahan, saya mempelajari berbagai bidang, mulai dari pemrograman, pengembangan aplikasi berbasis web, pengelolaan database, hingga analisis dan perancangan sistem. Selain itu, saya juga senang mengembangkan kemampuan komunikasi dan kreativitas melalui kegiatan menulis serta mempelajari hal-hal baru untuk memperluas wawasan dan meningkatkan potensi diri.',
    'about_long' => 'Saya percaya bahwa setiap individu memiliki kesempatan untuk berkembang melalui kemauan belajar, kerja keras, dan pengalaman. Dengan sikap disiplin, rasa tanggung jawab, serta kemampuan beradaptasi, saya yakin dapat memberikan kontribusi positif dan terus bertumbuh menjadi pribadi yang lebih baik secara profesional.'
];

$skills = [
    'Microsoft Office',
    'Visual Studio Code',
    'Xampp',
    'MySQL',
    'PHP & Laravel',
    'HTML & CSS',
    'Git & GitHUB',
    'Bootstrap'
    
];

// ✨ TAMBAHKAN INI UNTUK KATEGORI TOOLS ✨
$tools = [
    'Kemampuan berkomunikasi dengan baik.',
    'Mampu bekerja sama dalam tim',
    'Mampu mengatur waktu dan menyelesaikan tugas.',
    'Mampu menganalisis dan mencari solusi permasalahan.',
    'Mampu menyesuaikan diri dengan lingkungan baru.',
    'Teliti dalam mengerjakan tugas.',
    'Memiliki rasa tanggung jawab.',
    'Memiliki kemauan untuk terus belajar.'
];


$projects = [
    [
        'number' => '01',
        'title'  => 'Project 01 - Internship Project',
        'title2' => 'Website Company Profile – PT. RNT Utama Indonesia',
        'desc'   => 'Project ini merupakan pengembangan website profil perusahaan (Company Profile) untuk PT. RNT Utama Indonesia yang bergerak di bidang perekrutan dan penempatan tenaga kerja ke kapal perikanan internasional. Website ini dibuat menggunakan Laravel dengan tujuan memperkenalkan profil perusahaan, menampilkan informasi layanan, berita terbaru, serta menyediakan informasi kontak dan lokasi perusahaan. Website dirancang dengan tampilan responsif agar mudah diakses oleh pengunjung melalui berbagai perangkat.',
        'image'  => 'assets/rnt2.png'
    ],
    // ===== PROJECT 02 =====
    [
        'number' => '02',
        'title'  => 'Project 02 - Final Project (Undergraduate Thesis)',
        // 👇 PASTIKAN BARIS INI ADA DAN TIDAK ADA TYPO 👇
        'title2' => 'Aplikasi Pembelajaran SIBI Berbasis PWA', 
        'desc'   => 'Project ini merupakan pengembangan aplikasi pembelajaran Sistem Isyarat Bahasa Indonesia (SIBI) berbasis Progressive Web App (PWA) yang dirancang untuk membantu pengguna mempelajari bahasa isyarat secara interaktif. Aplikasi menyediakan materi alfabet, angka, dan kosakata sehari-hari dalam bentuk gambar serta video gerakan. Dilengkapi dengan fitur kuis, pemantauan progres belajar, dan Adaptive Learning Path menggunakan metode Finite State Machine (FSM) untuk mengatur tahapan pembelajaran berdasarkan hasil evaluasi pengguna.',
        'image'  => 'assets/sibi.png'
    ],
    
];



$education = [
    'Universitas Harkat Negeri<br> S1-Teknik Informatika<br> IPK 3.89/4.00',
];

$certificates = [
    [
        'year'  => '2023', 
        'title' => 'Dasar Pemrograman Bahasa C',      
        'desc'  => 'Menyelesaikan pelatihan dasar pemrograman menggunakan bahasa C untuk memahami konsep dan logika pemrograman.',
        'image' => 'assets/c.jpg' // Ganti dengan nama file gambarmu
    ],
    [
        'year'  => '2023', 
        'title' => 'Java Fundamentals',   
        'desc'  => 'Menyelesaikan kursus dasar Java yang mencakup konsep, sintaks, dan logika dasar pemrograman.',
        'image' => 'assets/java.jpg'
    ],
    [
        'year'  => '2023', 
        'title' => 'Database Foundations',       
        'desc'  => 'Menyelesaikan kursus dasar basis data yang membahas konsep dan pengelolaan data.',
        'image' => 'assets/database.jpg'
    ],
    [
        'year'  => '2025', 
        'title' => 'Sertifikat Penyelesaian Program Magang – PT. RNT Utama Indonesia',       
        'desc'  => 'Telah menyelesaikan program magang selama 3 bulan di PT. RNT Utama Indonesia dengan kegiatan perancangan dan pengembangan website profil perusahaan menggunakan Laravel.',
        'image' => 'assets/magang.jpg'
    ],
    [
        'year'  => '2026', 
        'title' => 'Lomba Menulis Pesan Singkat Tingkat Nasional',       
        'desc'  => 'Berpartisipasi dalam kompetisi menulis pesan singkat untuk mengembangkan kreativitas dan kemampuan menyampaikan gagasan.',
        'image' => 'assets/pesan.jpg'
    ],
    [
        'year'  => '2026', 
        'title' => 'Lomba Menulis Kisah Nyata Tingkat Nasional',       
        'desc'  => 'Berpartisipasi dalam kompetisi menulis kisah nyata sebagai bentuk pengembangan kreativitas dan kemampuan bercerita melalui tulisan.',
        'image' => 'assets/kisah.jpg'
    ]

];

?>
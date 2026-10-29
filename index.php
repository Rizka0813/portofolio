<?php require_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile['name'] ?> — <?= $profile['role'] ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<!-- ===== NAVIGATION ===== -->
<nav class="navbar">
    <div class="container nav-inner">
        <a href="#" class="logo"><?= $profile['name'] ?></a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact" class="btn-nav">Contact</a></li>
        </ul>
        <button class="nav-toggle" id="navToggle">☰</button>
    </div>
</nav>

<!-- ===== HERO / PAGE 1 (Masked Text Effect) ===== -->
<header class="hero" id="home">
    <div class="hero-stage">
        <!-- 1. Foto Orang (Berdiri di belakang teks, tapi badan menutupi teks) -->
        <div class="hero-person">
            <!-- ⚠️ PASTIKAN FOTO INI ADALAH PNG TRANSPARAN (Tanpa Background) -->
            <img src="assets/7.png" alt="<?= $profile['name'] ?>">
        </div>

        <!-- 2. Teks Raksasa (Menggunakan blend mode agar menembus baju) -->
        <h1 class="hero-title-masked">PORTOFOLIO</h1>

        <!-- 3. Teks Kiri Bawah -->
        <div class="hero-text-bottom">
            <h2>Rizka Yuniarti, S.Kom</h2>
        </div>
    </div>
</header>

<!-- ===== ABOUT / PAGE 2 ===== -->
<section id="about" class="section about">
    <div class="container about-grid">
        <div class="about-text">
            <h2 class="section-title">About me</h2>
            <p class="about-intro"><?= $profile['about'] ?></p>
            <p class="about-body"><?= $profile['about_long'] ?></p>
        </div>
        <div class="about-image">
            <div class="image-placeholder">
                <img src="assets/9.jpg" alt="Rizka Yuniarti">
            </div>
            <div class="dot-pattern"></div>
        </div>
    </div>
</section>

<!-- ===== EDUCATION 3 ===== -->
<section id="education" class="section education">
    <div class="container">
        <h2 class="section-title center">Education</h2>
        <div class="education-grid">
            <!-- Gambar Logo Kampus -->
                <div class="education-logo-wrap">
                    <img src="assets/harkat.png" alt="Logo Kampus" class="education-img">
                </div>
            <?php foreach ($education as $edu): ?> 
                <!-- Card Teks Pendidikan -->
                <div class="education-card">
                    <?= $edu ?>
                </div>
              
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ===== SKILLS / PAGE 4 ===== -->
<section id="skills" class="section skills">
    <div class="container">
        <h2 class="section-title center">Skills</h2>
        
        <!-- KATEGORI 1: TEKNOLOGI -->
        <p class="skill-title"><b>Software Skills</b></p>
        <div class="skills-grid">
            <?php foreach ($skills as $skill): ?>
                <div class="skill-card"><?= $skill ?></div>
            <?php endforeach; ?>
        </div>

        <!-- KATEGORI 2: TOOLS -->
        <p class="skill-title" style="margin-top: 40px;"><b>Personal Skills</b></p>
        <div class="skills-grid">
            <?php foreach ($tools as $tool): ?>
                <div class="skill-card"><?= $tool ?></div>
            <?php endforeach; ?>
        </div>
        
    </div>
</section>


<!-- ===== PROJECTS / PAGE 5-7 ===== -->
<section id="projects" class="section projects">
    <div class="container">
        <h2 class="section-title center">Projects</h2>
        <?php foreach ($projects as $i => $p): ?>
            <div class="project-row <?= $i % 2 === 1 ? 'reverse' : '' ?>">
                <div class="project-image">
                    <img src="<?= $p['image'] ?>" alt="<?= $p['title'] ?>">
                </div>
                <div class="project-content">
                    <span class="project-number"><?= $p['number'] ?></span>
                    <h3 class="project-title"><?= $p['title'] ?></h3>
                    <h4 class="project-title2">
                    <?= isset($p['title2']) ? $p['title2'] : 'Deskripsi Project Belum Diisi' ?>
                    </h4>
                    <p class="project-desc"><?= $p['desc'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ===== CERTIFICATES (Grid Gallery) ===== -->
<section id="certificates" class="section certificates">
    <div class="container">
        <h2 class="section-title center">Certificates & Events</h2>
        
        <div class="certificates-grid">
            <?php foreach ($certificates as $cert): ?>
                <div class="cert-card">
                    <div class="cert-image">
                        <img src="<?= $cert['image'] ?>" alt="<?= $cert['title'] ?>">
                    </div>
                    <div class="cert-info">
                        <span class="cert-year"><?= $cert['year'] ?></span>
                        <h4><?= $cert['title'] ?></h4>
                        <p><?= $cert['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
    </div>
</section>

<!-- ===== CTA / PAGE 9 ===== -->
<section id="contact" class="section cta">
    <div class="container cta-grid">
        <div class="cta-image">
            <img src="assets/10.jpg" alt="Let's work together">
        </div>
        <div class="cta-content">
            <h2>Let's work together</h2>
            <div class="cta-card">
                <p><strong>Email:</strong> <a href="mailto:<?= $profile['email'] ?>"><?= $profile['email'] ?></a></p>
                <p><strong>Social media:</strong> <a href="#">@rizkaaa0813</a></p>
                <p><strong>Phone:</strong> <a href="tel:<?= $profile['phone'] ?>"><?= $profile['phone'] ?></a></p>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOTER / PAGE 10 ===== -->
<footer class="footer">
    <div class="container">
        <h2>THANK YOU</h2>
        <p>© <?= date('Y') ?> <?= $profile['name'] ?>. All rights reserved.</p>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>
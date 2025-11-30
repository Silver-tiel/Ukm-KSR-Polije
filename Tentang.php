<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSR PMI Politeknik Negeri Jember</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Header Styles from ksr_pmi_form.php */
        .header-wrapper {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-logos {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-logos img {
            height: 50px;
        }

        .navbar {
            background-color: transparent;
            box-shadow: none;
            padding: 0;
        }

        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
            font-size: 0.95rem;
        }

        .navbar-nav .nav-link:hover {
            color: #6B1717;
        }

        .navbar-nav .nav-link.active {
            color: #6B1717;
            font-weight: 600;
        }

        .keanggotaan-image {
            position: relative;
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }

        .keanggotaan-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .keanggotaan-card:hover .keanggotaan-image img {
            transform: scale(1.05);
        }
        :root {
            --primary-maroon: #7a1f1f;
            --dark-maroon: #5a1414;
            --light-cream: #fafafa;
            --text-dark: #2c2c2c;
            --white: #ffffff;
            --border-red: #b30000;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            background: var(--light-cream);
            font-size: 1.15rem;
        }

        /* Header Contact */
        .header-contact {
            background: linear-gradient(90deg, #4dd0e1 0%, #26c6da 100%);
            border: 3px solid #00acc1;
            padding: 15px 0;
        }
        
        .contact-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .map-placeholder {
            width: 120px;
            height: 80px;
            background: #e0e0e0;
            border-radius: 8px;
        }
        
        .map-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .contact-text p {
            margin: 0;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-dark);
        }
        
        .contact-text .title {
            font-weight: bold;
            font-size: 15px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }
        
        .social-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Hero Title */
        .hero-header {
            padding: 40px 0;
            text-align: center;
        }

        .hero-header h1 {
            font-size: 5rem;
            font-weight: bold;
            color: var(--border-red);
        }

        /* Hero Image Section */
        .hero-image-section {
            position: relative;
            width: 100%;
            margin-bottom: 60px;
        }

        .hero-image-section img {
            width: 100%;
            height: auto;
        }

        /* Sejarah Card */
        .sejarah-card {
            border-right: 10px solid var(--primary-maroon);
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .sejarah-card h2 {
            color: var(--primary-maroon);
            font-size: 2rem;
            font-weight: bold;
        }

        .sejarah-card p {
            font-size: 1.5rem;
            text-align: justify;
            line-height: 1.8;
        }

        /* Logo, Visi, Misi Cards */
        .info-card {
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            background: var(--white);
            height: 100%;
        }

        .logo-card {
            border-left: 8px solid var(--border-red);
            background: var(--light-cream);
        }

        .logo-container {
            width: 180px;
            height: 180px;
            border-radius: 20px;
            overflow: hidden;
            margin: auto;
            border: 3px solid var(--border-red);
        }

        .logo-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .visi-card {
            border-top: 8px solid var(--border-red);
        }

        .misi-card {
            border-right: 8px solid var(--border-red);
            background: var(--light-cream);
        }

        .info-card h3 {
            color: var(--border-red);
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .info-card p, .info-card ul {
            font-size: 1.5rem;
            text-align: justify;
            line-height: 1.8;
        }

        /* Ketua & Wakil Cards */
        .leader-card {
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            background: var(--white);
            margin-bottom: 40px;
        }

        .ketua-card {
            border-left: 10px solid var(--border-red);
        }

        .wakil-card {
            border-right: 10px solid var(--primary-maroon);
        }

        .leader-photo {
            width: 280px;
            height: 80%; 
            min-height: 400px; 
            border-radius: 20px;
            overflow: hidden;
            border: 4px solid var(--border-red);
        }

        .leader-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .leader-card h2 {
            font-weight: bold;
            color: var(--border-red);
            font-size: 2rem;
        }

        .leader-card h4 {
            font-weight: bold;
            color: var(--border-red);
            margin-top: 20px;
        }

        .leader-card p, .leader-card ul {
            font-size: 1.5rem;
            text-align: justify;
            line-height: 1.8;
        }

        /* Stats/Badges Section */
        .stats-section {
            padding: 60px 0;
            background: var(--light-cream);
        }

        .stat-card {
            background: #f0f4ff;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .stat-icon {
            margin-bottom: 20px;
        }

        .stat-icon img {
            width: 80px;
            height: 80px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-maroon);
        }

        .stat-label {
            font-size: 1.2rem;
            color: var(--text-dark);
            font-weight: 500;
        }

  /* Keanggotaan Section - IMPROVED */
.keanggotaan-section {
    background: linear-gradient(135deg, var(--primary-maroon) 0%, var(--dark-maroon) 100%);
    padding: 80px 0;
    color: var(--white);
    position: relative;
    overflow: hidden;
}

.keanggotaan-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: moveBackground 20s linear infinite;
}

@keyframes moveBackground {
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
}

.keanggotaan-title {
    font-size: 3.5rem;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    text-align: center;
    letter-spacing: 4px;
    text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
    position: relative;
    z-index: 1;
}

.keanggotaan-subtitle {
    font-size: 2rem;
    font-weight: bold;
    color: var(--white);
    margin: 40px 0 25px 0;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding-left: 20px;
    border-left: 5px solid var(--white);
    position: relative;
    z-index: 1;
}

/* Scrollable Container */
.keanggotaan-scroll {
    max-height: 1000px;
    overflow-y: auto;
    padding-right: 15px;
    position: relative;
    z-index: 1;
}

/* Custom Scrollbar */
.keanggotaan-scroll::-webkit-scrollbar {
    width: 10px;
}

.keanggotaan-scroll::-webkit-scrollbar-track {
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
}

.keanggotaan-scroll::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.3);
    border-radius: 10px;
}

.keanggotaan-scroll::-webkit-scrollbar-thumb:hover {
    background: rgba(255,255,255,0.5);
}

/* Grid Layout - 4 Columns */
.keanggotaan-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 30px;
}

/* Member Card - PERBAIKAN UTAMA */
.keanggotaan-card {
    background: var(--white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
}

/* DIHAPUS: Pseudo-element yang menyebabkan perubahan warna maroon */
/* .keanggotaan-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(122,31,31,0.9) 0%, rgba(90,20,20,0.9) 100%);
    opacity: 0;
    transition: opacity 0.3s;
    z-index: 1;
}

.keanggotaan-card:hover::before {
    opacity: 1;
} */

.keanggotaan-card:hover {
    transform: translateY(-15px) scale(1.03);
    box-shadow: 0 15px 40px rgba(0,0,0,0.4);
}

/* Image Container */
.keanggotaan-image {
    position: relative;
    height: 220px;
    background: linear-gradient(135deg, #e0e0e0 0%, #f5f5f5 100%);
    overflow: hidden;
}

.keanggotaan-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s;
}

.keanggotaan-card:hover .keanggotaan-image img {
    transform: scale(1.1);
}

/* Ribbon Badge */
.keanggotaan-ribbon {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, var(--primary-maroon) 0%, var(--dark-maroon) 100%);
    color: var(--white);
    padding: 8px 20px;
    font-weight: bold;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    z-index: 2;
    transition: all 0.3s;
}

.keanggotaan-card:hover .keanggotaan-ribbon {
    background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
    color: var(--primary-maroon);
    transform: translateX(-50%) translateY(-5px);
}

/* Info Section */
.keanggotaan-info {
    padding: 20px;
    color: var(--text-dark);
    background: var(--white);
    position: relative;
    z-index: 2;
    transition: all 0.3s;
}

/* DIHAPUS: Perubahan warna teks dan background saat hover */
/* .keanggotaan-card:hover .keanggotaan-info {
    background: transparent;
    color: var(--white);
} */

.keanggotaan-info p {
    margin: 8px 0;
    font-size: 1rem;
    line-height: 1.6;
}

.keanggotaan-info strong {
    font-weight: 600;
    color: var(--primary-maroon);
    transition: color 0.3s;
}

/* DIHAPUS: Perubahan warna teks saat hover */
/* .keanggotaan-card:hover .keanggotaan-info strong {
    color: var(--white);
} */

/* Responsive Design */
@media (max-width: 1200px) {
    .keanggotaan-row {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 992px) {
    .keanggotaan-row {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hero-header h1 {
        font-size: 3rem;
    }

    .keanggotaan-title {
        font-size: 2.5rem;
    }

    .keanggotaan-subtitle {
        font-size: 1.5rem;
    }
}

@media (max-width: 768px) {
    .keanggotaan-row {
        grid-template-columns: 1fr;
    }

    .contact-info {
        flex-direction: column;
        text-align: center;
    }

    .hero-header h1 {
        font-size: 2rem;
    }

    .keanggotaan-title {
        font-size: 2rem;
    }
}

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Decorative Elements */
        .section-divider {
            height: 5px;
            background: linear-gradient(90deg, transparent 0%, var(--primary-maroon) 50%, transparent 100%);
            margin: 40px 0;
        }
       /* Wrapper Section */
.kepengurusan-section {
    padding: 60px 0;
    background: #fafafa;
}

/* Title */
.kepengurusan-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 40px;
}

/* Layout Wrapper */
.kepengurusan-container {
    max-width: 1100px;
    margin: auto;
}

/* Grid Untuk Semua Card */
.kepengurusan-grid {
    display: flex;
    flex-direction: column;
    gap: 35px;
}

/* Row bagian kiri & kanan untuk card kecil */
.kepengurusan-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

/* ----- CARD STYLE UMUM ----- */
.kepengurusan-card {
    background: white;
    padding: 25px;
    border-radius: 20px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.1);
    text-align: center;
    transition: 0.3s;
}

.kepengurusan-card:hover {
    transform: scale(1.03);
}

/* ----- FOTO STYLE UNTUK SEMUA JABATAN ----- */
.kepengurusan-card img {
    width: 100%;
    height: 330px;
    object-fit: cover;
    object-position: center;
    border-radius: 15px;
    margin-bottom: 15px;
}

/* ----- SPECIAL UNTUK PEMBINA ----- */
.pembina-card {
    width: 70%;
    margin: auto;
}

.pembina-card img {
    height: 1349px; /* lebih besar dari lainnya */
}

/* Label nama jabatan */
.kepengurusan-card h3 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #8b0000;
}

/* Info text */
.kepengurusan-card p {
    margin: 5px 0;
    font-size: 1rem;
}

/* Efek scroll default */
.scroll-effect {
    opacity: 0;
    transform: translateY(20px); /* lebih kecil supaya tidak hilang */
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

/* Saat muncul */
.scroll-visible {
    opacity: 1;
    transform: translateY(0);
}


/* ========== PERBESAR KEANGGOTAAN ========== */
.keanggotaan-row {
    display: flex;
    gap: 30px;
    padding: 20px;
    overflow-x: auto; /* supaya bisa scroll horizontal */
    scroll-snap-type: x mandatory;
}

.keanggotaan-card {
    min-width: 350px; /* DIBESARKAN BIAR 2 AJA YANG KELIHATAN */
    scroll-snap-align: start;
    background: white;
    border-radius: 20px;
    box-shadow: 0 7px 25px rgba(0,0,0,0.12);
    transition: 0.3s;
}

.keanggotaan-card img {
    height: 360px;
    object-fit: cover;
    border-radius: 15px;
}

    </style>
</head>
<body>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".scroll-effect");

    function showOnScroll() {
        const triggerBottom = window.innerHeight - 100;

        elements.forEach(el => {
            const rect = el.getBoundingClientRect().top;

            if (rect < triggerBottom) {
                el.classList.add("scroll-visible");
            }
        });
    }

    window.addEventListener("scroll", showOnScroll);
    showOnScroll(); // jalankan sekali saat load
});
</script>

    <!-- Header with Navigation and Logos -->
    <div class="header-wrapper">
        <div class="container">
            <div class="header-content">
                <div class="header-logos">
                    <img src="LogoKSR.jpg" alt="PMI Logo">
                    <img src="LogoPolije.jpg" alt="POLIJE Logo">
                </div>
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#tentang">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="timeline.html">Jadwal</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pendaftaran">Pendaftaran</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Hero Image -->
    <div class="hero-image-section">
        <img src="Gambar/Sejarah..png" alt="Sejarah KSR PMI" class="img-fluid">
    </div>

    <!-- Sejarah Card -->
    <div class="container-fluid px-0 py-5">
        <div class="container">
            <div class="card sejarah-card border-0 p-4 fade-in">
                <div class="row g-0">
                    <div class="col-md-12">
                        <h2 class="mb-4">UKM KSR PMI Politeknik Negeri Jember</h2>
                        <p>
                            UKM KSR PMI Politeknik Negeri Jember didirikan pada 4 April 2009 sebagai salah satu Unit Kegiatan Mahasiswa yang berfokus pada kegiatan kemanusiaan dan kepalangmerahan. Berlandaskan Pancasila, Tri Dharma Perguruan Tinggi, serta Prinsip Dasar Gerakan Internasional Palang Merah dan Bulan Sabit Merah, organisasi ini menjadi wadah pengembangan kapasitas anggota dalam kompetensi kepalangmerahan serta pengabdian kepada masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-divider"></div>

    <!-- Logo, Visi, Misi -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Logo Card -->
            <div class="col-lg-6 fade-in">
                <div class="info-card logo-card">
                    <div class="logo-container mb-3">
                        <img src="Gambar/logo KSR.png" alt="Logo KSR">
                    </div>
                    <h3>Sejarah Logo</h3>
                    <p>
                        Lambang UKM KSR PMI Politeknik Negeri Jember berbentuk perisai dengan delapan sudut lancip yang melambangkan prinsip dasar pertama kali yang dicetuskan di Indonesia, termasuk nilai Ketuhanan. Warna putih melambangkan kenetralan, tulisan "KSR PMI" sebagai identitas relawan, dan lambang serta tulisan POLIJE sebagai identitas lembaga yang menaungi.
                    </p>
                </div>
            </div>

            <!-- Visi & Misi -->
            <div class="col-lg-6 d-flex flex-column gap-4">
                <div class="info-card visi-card fade-in">
                    <h3>VISI</h3>
                    <p>
                        Terwujudnya UKM KSR PMI Politeknik Negeri Jember sebagai organisasi kemanusiaan yang beranggota dengan akhlak, profesional, dan solidaritas.
                    </p>
                </div>

                <div class="info-card misi-card fade-in">
                    <h3>MISI</h3>
                    <ul>
                        <li>Mengutamakan adab daripada ilmu.</li>
                        <li>Mengembangkan ilmu kepalangmerahan anggota.</li>
                        <li>Meningkatkan kerjasama dan kedisiplinan anggota.</li>
                        <li>Menjunjung tinggi loyalitas dalam berorganisasi.</li>
                        <li>Menumbuhkan kepekaan terhadap sesama.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section-divider"></div>

    <!-- Ketua & Wakil -->
    <div class="container py-5">
        <!-- Ketua Umum -->
        <div class="card leader-card ketua-card p-4 fade-in">
            <div class="row g-0">
                <div class="col-md-4 d-flex justify-content-center align-items-start">
                    <div class="leader-photo">
                        <img src="FOTOKSR/ketua.heic" alt="Ketua Umum">
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>Ketua Umum</h2>
                    <h4>Visi</h4>
                    <p>
                        Terwujudnya KSR PMI Politeknik Negeri Jember sebagai organisasi kemanusiaan dan keorganisasian yang profesional, tanggap, serta bermasyarakat.
                    </p>
                    <h4>Misi</h4>
                    <ul>
                        <li>Meningkatkan kualitas dan kapasitas anggota di bidang keorganisasian dan kepalangmerahan.</li>
                        <li>Menguatkan antusias anggota untuk turut berperan aktif dalam berbagai kegiatan internal maupun eksternal.</li>
                        <li>Membangun semangat kebersamaan dan solidaritas antar anggota KSR dalam kontribusi nyata bagi kemanusiaan.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Wakil Ketua -->
        <div class="card leader-card wakil-card p-4 fade-in">
            <div class="row g-0">
                <div class="col-md-4 d-flex justify-content-center align-items-start">
                    <div class="leader-photo">
                        <img src="FOTOKSR/wakil.heic" alt="Wakil Ketua">
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>Wakil Ketua</h2>
                    <h4>Tugas Pokok & Fungsi</h4>
                    <ul>
                        <li>Membantu ketua dalam menjalankan fungsi manajemen organisasi KSR PMI Polije.</li>
                        <li>Membantu ketua dalam pengambilan keputusan.</li>
                        <li>Melaksanakan tugas ketua apabila berhalangan hadir, termasuk saat PKL maupun urusan akademik lainnya.</li>
                        <li>Bertanggung jawab langsung kepada ketua.</li>
                        <li>Membuat laporan pertanggungjawaban.</li>
                        <li>Monitoring, evaluasi, dan memberikan solusi kepada setiap divisi dan sub-divisi.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<section class="kepengurusan-section">
    <div class="container">
        <h2 class="kepengurusan-title">KEPENGURUSAN</h2>
<script>
const scrollElements = document.querySelectorAll('.scroll-effect');

function scrollAnimation() {
    scrollElements.forEach(el => {
        const position = el.getBoundingClientRect().top;
        const screenHeight = window.innerHeight;

        if (position < screenHeight - 100) {
            el.classList.add('scroll-visible');
        }
    });
}

window.addEventListener('scroll', scrollAnimation);
window.addEventListener('load', scrollAnimation);
</script>

        <div class="kepengurusan-container">
            <div class="kepengurusan-grid">

                <!-- PEMBINA (Card Besar Tengah) -->
                <div class="kepengurusan-card pembina-card scroll-effect">
                    <img src="FOTOKSR/pembina.heic" alt="Pembina">
                    <h3>PEMBINA</h3>
                    <p><strong>Nama:</strong> Nama Pembina</p>
                </div>

                <!-- KETUA & WAKIL -->
                <div class="kepengurusan-row scroll-effect">

                    <div class="kepengurusan-card">
                        <img src="FOTOKSR/ketua.heic" alt="Ketua">
                        <h3>KETUA</h3>
                        <p><strong>Nama:</strong> Nama Ketua</p>
                    </div>

                    <div class="kepengurusan-card">
                        <img src="FOTOKSR/wakil.heic" alt="Wakil">
                        <h3>WAKIL KETUA</h3>
                        <p><strong>Nama:</strong> Nama Wakil</p>
                    </div>
                </div>

                <!-- SEKRETARIS 1 & 2 -->
                <div class="kepengurusan-row scroll-effect">
                    <div class="kepengurusan-card">
                        <img src="FOTOKSR/sekre1.heic" alt="Sekretaris 1">
                        <h3>SEKRETARIS 1</h3>
                        <p><strong>Nama:</strong> Nama Sekretaris 1</p>
                    </div>

                    <div class="kepengurusan-card">
                        <img src="FOTOKSR/sekre2.heic" alt="Sekretaris 2">
                        <h3>SEKRETARIS 2</h3>
                        <p><strong>Nama:</strong> Nama Sekretaris 2</p>
                    </div>
                </div>

                <!-- BENDAHARA 1 & 2 -->
                <div class="kepengurusan-row scroll-effect">
                    <div class="kepengurusan-card">
                        <img src="FOTOKSR/bendahara1.heic" alt="Bendahara 1">
                        <h3>BENDAHARA 1</h3>
                        <p><strong>Nama:</strong> Nama Bendahara 1</p>
                    </div>

                    <div class="kepengurusan-card">
                        <img src="Gambar/bendahara2.heic" alt="Bendahara 2">
                        <h3>BENDAHARA 2</h3>
                        <p><strong>Nama:</strong> Nama Bendahara 2</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


    <div class="section-divider"></div>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 fade-in">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <img src="Gambar/anggota.heic" alt="Anggota">
                        </div>
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Anggota Aktif</div>
                    </div>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <img src="Gambar/5bagian.heic" alt="5 Bagian">
                        </div>
                        <div class="stat-number">5</div>
                        <div class="stat-label">Divisi</div>
                    </div>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <img src="Gambar/bersertifikat.heic" alt="Bersertifikat">
                        </div>
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Bersertifikat Nasional</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keanggotaan Section - IMPROVED -->
    <section class="keanggotaan-section">
        <div class="container">
            <h2 class="keanggotaan-title fade-in">KEANGGOTAAN</h2>
            
            <div class="keanggotaan-scroll">
                
                <!-- DANUS -->
                <h3 class="keanggotaan-subtitle fade-in">DANUS</h3>
                <div class="keanggotaan-row">
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Danus 1">
                            <div class="keanggotaan-ribbon">KETUA DANUS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong> Ahmad Mubarok</p>
                            <p><strong>Prodi:</strong> Teknik Informatika</p>
                            <p><strong>Jurusan:</strong> TI</p>
                        </div>
                    </div>

                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Danus 2">
                            <div class="keanggotaan-ribbon">ANGGOTA DANUS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>

                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Danus 3">
                            <div class="keanggotaan-ribbon">ANGGOTA DANUS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>

                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Danus 4">
                            <div class="keanggotaan-ribbon">ANGGOTA DANUS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                </div>

                <!-- PKBM -->
                <h3 class="keanggotaan-subtitle fade-in">PKBM</h3>
                <div class="keanggotaan-row">
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="PKBM 1">
                            <div class="keanggotaan-ribbon">KOORDINATOR PKBM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="PKBM 2">
                            <div class="keanggotaan-ribbon">ANGGOTA PKBM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="PKBM 3">
                            <div class="keanggotaan-ribbon">ANGGOTA PKBM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="PKBM 4">
                            <div class="keanggotaan-ribbon">ANGGOTA PKBM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                </div>

                <!-- LOGISTIK -->
                <h3 class="keanggotaan-subtitle fade-in">LOGISTIK</h3>
                <div class="keanggotaan-row">
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Logistik 1">
                            <div class="keanggotaan-ribbon">KOORDINATOR LOGISTIK</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Logistik 2">
                            <div class="keanggotaan-ribbon">ANGGOTA LOGISTIK</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Logistik 3">
                            <div class="keanggotaan-ribbon">ANGGOTA LOGISTIK</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Logistik 4">
                            <div class="keanggotaan-ribbon">ANGGOTA LOGISTIK</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                </div>

                <!-- HUMAS -->
                <h3 class="keanggotaan-subtitle fade-in">HUMAS</h3>
                <div class="keanggotaan-row">
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Humas 1">
                            <div class="keanggotaan-ribbon">KOORDINATOR HUMAS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Humas 2">
                            <div class="keanggotaan-ribbon">ANGGOTA HUMAS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Humas 3">
                            <div class="keanggotaan-ribbon">ANGGOTA HUMAS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="Humas 4">
                            <div class="keanggotaan-ribbon">ANGGOTA HUMAS</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                </div>

                <!-- SDM -->
                <h3 class="keanggotaan-subtitle fade-in">SDM</h3>
                <div class="keanggotaan-row">
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="SDM 1">
                            <div class="keanggotaan-ribbon">KOORDINATOR SDM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="SDM 2">
                            <div class="keanggotaan-ribbon">ANGGOTA SDM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="SDM 3">
                            <div class="keanggotaan-ribbon">ANGGOTA SDM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                    <div class="keanggotaan-card fade-in">
                        <div class="keanggotaan-image">
                            <img src="" alt="SDM 4">
                            <div class="keanggotaan-ribbon">ANGGOTA SDM</div>
                        </div>
                        <div class="keanggotaan-info">
                            <p><strong>Nama:</strong></p>
                            <p><strong>Prodi:</strong></p>
                            <p><strong>Jurusan:</strong></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: var(--dark-maroon); color: var(--white); padding: 60px 0 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 style="font-size: 2rem; font-weight: bold; margin-bottom: 20px;">KSR PMI POLIJE</h3>
                    <p style="line-height: 1.8; margin-bottom: 20px;">
                        Unit Kegiatan Mahasiswa yang berfokus pada kegiatan kemanusiaan dan kepalangmerahan di Politeknik Negeri Jember.
                    </p>
                    <div class="social-links">
                        <a href="" class="social-icon" style="background: rgba(255,255,255,0.1); transition: all 0.3s;">
                            <i class="bi bi-instagram" style="font-size: 24px; color: white;"></i>
                        </a>
                        <a href="" class="social-icon" style="background: rgba(255,255,255,0.1); transition: all 0.3s;">
                            <i class="bi bi-facebook" style="font-size: 24px; color: white;"></i>
                        </a>
                        <a href="" class="social-icon" style="background: rgba(255,255,255,0.1); transition: all 0.3s;">
                            <i class="bi bi-youtube" style="font-size: 24px; color: white;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <h4 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 20px;">Kontak</h4>
                    <p><i class="bi bi-geo-alt-fill me-2"></i> Pollie Mastrip Jalan Aselole</p>
                    <p><i class="bi bi-telephone-fill me-2"></i> 083123456789</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> HASVDGDV@GMAIL.COM</p>
                </div>

                <div class="col-lg-4 mb-4">
                    <h4 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 20px;">Link Cepat</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;"><a href="" style="color: white; text-decoration: none; transition: color 0.3s;">Tentang Kami</a></li>
                        <li style="margin-bottom: 10px;"><a href="" style="color: white; text-decoration: none; transition: color 0.3s;">Program Kerja</a></li>
                        <li style="margin-bottom: 10px;"><a href="" style="color: white; text-decoration: none; transition: color 0.3s;">Kegiatan</a></li>
                        <li style="margin-bottom: 10px;"><a href="" style="color: white; text-decoration: none; transition: color 0.3s;">Galeri</a></li>
                    </ul>
                </div>
            </div>

            <div style="text-align: center; padding-top: 30px; margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.2);">
                <p style="margin: 0;">© 2024 KSR PMI Politeknik Negeri Jember. All Rights Reserved.</p>
                <p style="margin: 5px 0 0 0;">Designed with ❤️ for Humanity</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Fade-in Animation on Scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Parallax Effect for Keanggotaan Section
        window.addEventListener('scroll', function() {
            const keanggotaanSection = document.querySelector('.keanggotaan-section');
            if (keanggotaanSection) {
                const scrolled = window.pageYOffset;
                const sectionTop = keanggotaanSection.offsetTop;
                const rate = (scrolled - sectionTop) * 0.5;
                
                if (scrolled > sectionTop - window.innerHeight) {
                    keanggotaanSection.style.backgroundPosition = `center ${rate}px`;
                }
            }
        });

        // Card Hover Effect Enhancement
        document.querySelectorAll('.keanggotaan-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Social Icon Hover Effect
        document.querySelectorAll('footer .social-icon').forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(255,255,255,0.3)';
                this.style.transform = 'scale(1.2) rotate(5deg)';
            });
            
            icon.addEventListener('mouseleave', function() {
                this.style.background = 'rgba(255,255,255,0.1)';
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });

        // Footer Link Hover Effect
        document.querySelectorAll('footer a').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.color = '#ff6b6b';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.color = 'white';
            });
        });
    </script>

</body>
</html>
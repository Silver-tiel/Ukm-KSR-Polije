<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota Baru - KSR PMI POLIJE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-maroon: #6B1717;
            --secondary-maroon: #8B2323;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }

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
            color: var(--primary-maroon);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-maroon) 0%, var(--secondary-maroon) 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-container {
            background: white;
            width: 180px;
            height: 180px;
            margin: 0 auto 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .logo-container img {
            max-width: 90%;
            max-height: 90%;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hero-section p {
            font-size: 1.1rem;
            opacity: 0.95;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 60px;
        }

        .form-label {
            color: var(--primary-maroon);
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-label .required {
            color: #dc3545;
        }

        .form-control, .form-select {
            border: 2px solid #ddd;
            padding: 12px;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-maroon);
            box-shadow: 0 0 0 0.2rem rgba(107, 23, 23, 0.15);
        }

        textarea.form-control {
            min-height: 120px;
        }

        .btn-submit {
            background-color: white;
            color: var(--primary-maroon);
            border: 2px solid var(--primary-maroon);
            padding: 12px 60px;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.3s;
            display: block;
            margin: 30px auto 0;
        }

        .btn-submit:hover {
            background-color: var(--primary-maroon);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(107, 23, 23, 0.3);
        }

        .footer {
            background-color: white;
            padding: 30px 0;
            margin-top: 60px;
            border-top: 3px solid var(--primary-maroon);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .footer-info img {
            height: 60px;
        }

        .footer-text p {
            margin: 0;
            line-height: 1.5;
            color: #333;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .social-icons a:hover {
            transform: scale(1.1);
        }

        .social-icons .instagram {
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
        }

        .social-icons .facebook {
            background: #1877f2;
        }

        .social-icons .youtube {
            background: #ff0000;
        }

        .social-icons i {
            color: white;
            font-size: 22px;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 25px;
                margin: 20px;
            }

            .hero-section h1 {
                font-size: 1.8rem;
            }

            .footer-content {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .footer-info {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
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
                            <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="timeline.html">Jadwal</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#pendaftaran">Pendaftaran</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="logo-container">
                <img src="LogoKSR.jpg" alt="KSR PMI POLIJE Logo">
            </div>
            <h1>Pendaftaran Anggota Baru</h1>
            <p>Unit Kegiatan Mahasiswa Korps Sukarela</p>
        </div>
    </div>

    <!-- Form Section -->
    <div class="container">
        <div class="form-container">
            <form id="registrationForm" method="POST" action="process_registration.php">
                
                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label for="namaLengkap" class="form-label">Nama Lengkap <span class="required">*</span></label>
                    <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap..." required>
                </div>

                <!-- Nomor Induk Mahasiswa -->
                <div class="mb-4">
                    <label for="nim" class="form-label">Nomor Induk Mahasiswa <span class="required">*</span></label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa..." required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ex. email@gmail.com / email@student.polije.ac.id" required>
                </div>

                <!-- Nomor Telepon -->
                <div class="mb-4">
                    <label for="telepon" class="form-label">Nomor Telepon <span class="required">*</span></label>
                    <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="+628123456789" required>
                </div>

                <!-- Jurusan -->
                <div class="mb-4">
                    <label for="jurusan" class="form-label">Jurusan <span class="required">*</span></label>
                    <select class="form-select" id="jurusan" name="jurusan" required>
                        <option value="" selected disabled>Pilih Jurusan</option>
                        <option value="Teknik">Teknik</option>
                        <option value="Teknologi Pertanian">Teknologi Pertanian</option>
                        <option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                        <option value="Peternakan">Peternakan</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Bahasa, Komunikasi, dan Pariwisata">Bahasa, Komunikasi, dan Pariwisata</option>
                        <option value="Kesehatan">Kesehatan</option>
                    </select>
                </div>

                <!-- Prodi -->
                <div class="mb-4">
                    <label for="prodi" class="form-label">Prodi <span class="required">*</span></label>
                    <select class="form-select" id="prodi" name="prodi" required>
                        <option value="" selected disabled>Pilih Prodi</option>
                    </select>
                </div>

                <!-- Alasan Bergabung -->
                <div class="mb-4">
                    <label for="alasan" class="form-label">Alasan bergabung UKM KSR <span class="required">*</span></label>
                    <textarea class="form-control" id="alasan" name="alasan" placeholder="Berikan alasan anda mengapa ingin bergabung ke UKM KSR" required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-submit">SUBMIT</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                        <a href="https://maps.app.goo.gl/P4hNtsRYgfHK9x3U6" target="_blank">
                        <img src="MapsPolije.jpg" alt="POLIJE">
                        </a>                    
                        <div class="footer-text">
                        <p><strong>Jl. Mastrip, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121</strong></p>
                        <p>(0331) 333532</p>
                        <p>humas@polije.ac.id</p>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="https://www.instagram.com/ksrpmipolije/" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@ksrpmipolije" class="youtube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Data prodi berdasarkan jurusan
        const prodiData = {
            "Teknik": ["Teknik Mesin", "Teknik Sipil", "Teknik Elektro"],
            "Teknologi Pertanian": ["Teknologi Industri Pertanian", "Teknik Energi Terbarukan", "Produksi Tanaman Hortikultura"],
            "Ekonomi dan Bisnis": ["Akuntansi", "Manajemen Agribisnis", "Keuangan dan Perbankan"],
            "Peternakan": ["Teknologi Produksi Ternak", "Manajemen Agribisnis Peternakan"],
            "Teknologi Informasi": ["Teknik Informatika", "Sistem Informasi", "Teknologi Informasi"],
            "Bahasa, Komunikasi, dan Pariwisata": ["Bahasa Inggris", "Administrasi Bisnis", "Usaha Perjalanan Wisata"],
            "Kesehatan": ["Teknologi Laboratorium Medik", "Promosi Kesehatan"]
        };

        // Update prodi ketika jurusan dipilih
        document.getElementById('jurusan').addEventListener('change', function() {
            const jurusan = this.value;
            const prodiSelect = document.getElementById('prodi');
            
            // Clear existing options
            prodiSelect.innerHTML = '<option value="" selected disabled>Pilih Prodi</option>';
            
            // Add new options
            if (prodiData[jurusan]) {
                prodiData[jurusan].forEach(prodi => {
                    const option = document.createElement('option');
                    option.value = prodi;
                    option.textContent = prodi;
                    prodiSelect.appendChild(option);
                });
            }
        });

        // Form validation
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const nim = document.getElementById('nim').value;
            const telepon = document.getElementById('telepon').value;
            
            if (nim.length < 8) {
                alert('NIM harus minimal 8 karakter');
                return;
            }
            
            if (!telepon.startsWith('+62') && !telepon.startsWith('08')) {
                alert('Format nomor telepon tidak valid');
                return;
            }
            
            // If validation passes, submit the form
            alert('Pendaftaran berhasil! Data Anda akan segera diproses.');
            this.submit();
        });
    </script>
</body>
</html>

<?php
// process_registration.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
    $nim = htmlspecialchars($_POST['nim']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telepon = htmlspecialchars($_POST['telepon']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $alasan = htmlspecialchars($_POST['alasan']);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Email tidak valid');
    }
    
    // Database connection (example - adjust with your credentials)
    /*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ksr_pmi";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO pendaftaran (nama_lengkap, nim, email, telepon, jurusan, prodi, alasan, tanggal_daftar) 
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nama_lengkap, $nim, $email, $telepon, $jurusan, $prodi, $alasan);
    
    if ($stmt->execute()) {
        echo "Pendaftaran berhasil!";
        // Redirect or show success message
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
    */
    
    // For now, just display the data
    echo "<h2>Data Pendaftaran Diterima:</h2>";
    echo "<p>Nama: $nama_lengkap</p>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telepon: $telepon</p>";
    echo "<p>Jurusan: $jurusan</p>";
    echo "<p>Prodi: $prodi</p>";
    echo "<p>Alasan: $alasan</p>";
}
?>

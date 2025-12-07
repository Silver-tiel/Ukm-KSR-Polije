# 📘 GUIDE BOOK - KSR PMI POLIJE WEBSITE

**Dibuat:** 6 Desember 2025  
**Status:** Complete & Production Ready  
**Developer:** Kelompok 3D Nakama

---

## 📋 DAFTAR ISI

1. [Ringkasan Proyek](#ringkasan-proyek)
2. [Arsitektur Teknis](#arsitektur-teknis)
3. [Struktur File](#struktur-file)
4. [Daftar Halaman](#daftar-halaman)
5. [Fitur Utama](#fitur-utama)
6. [Panduan Menggunakan Setiap Halaman](#panduan-menggunakan-setiap-halaman)
7. [CSS & Design System](#css--design-system)
8. [JavaScript & Interaktivitas](#javascript--interaktivitas)
9. [Responsive Design](#responsive-design)
10. [Panduan Maintenance](#panduan-maintenance)
11. [Troubleshooting](#troubleshooting)

---

## 🎯 RINGKASAN PROYEK

### Nama Proyek
**KSR PMI POLIJE - Website Official**

### Deskripsi
Website resmi Unit Kegiatan Mahasiswa KSR PMI (Korps Sukarela Palang Merah Indonesia) di Politeknik Negeri Jember. Website ini menampilkan informasi organisasi, layanan, berita/blog, galeri, dan formulir pendaftaran.

### Tujuan
- Memberikan informasi lengkap tentang KSR PMI POLIJE
- Menampilkan kegiatan dan program organisasi
- Memfasilitasi pendaftaran anggota baru
- Meningkatkan visibilitas dan engagement dengan masyarakat
- Memberikan platform berita dan dokumentasi kegiatan

### Target Audience
- Calon anggota/pendaftar baru
- Masyarakat umum yang ingin tahu tentang KSR PMI
- Mahasiswa Politeknik Negeri Jember
- Media dan partner organisasi

### Tech Stack
```
Frontend:
  - HTML5
  - CSS3 (Custom + Bootstrap 5.3.0)
  - JavaScript Vanilla
  - Bootstrap Icons 1.11.1
  - FontAwesome 6.4.0

Backend:
  - PHP (untuk form pendaftaran)
  - JSON (untuk penyimpanan data pendaftaran)

Hosting:
  - Laragon (Local Development)
  - Path: e:\laragon\www\Pendaftaran
```

---

## 🏗️ ARSITEKTUR TEKNIS

### Sistem Warna (CSS Variables)
```css
:root {
  --dark-maroon: #5a1414;      /* Warna utama gelap */
  --primary-maroon: #6B1717;   /* Warna utama */
  --white: #ffffff;             /* Putih */
  --light-bg: #f5f5f5;          /* Background terang */
}
```

### Struktur Responsif
```
Desktop (> 1200px)  → Full layout
Tablet (768-1200px) → Adjusted spacing
Mobile (< 768px)    → Stacked layout
Very Small (< 480px) → Optimized typography
```

### Breakpoints Media Query
- `@media (max-width: 992px)` - Tablet landscape
- `@media (max-width: 768px)` - Tablet portrait
- `@media (max-width: 480px)` - Mobile

### Framework & Dependencies
- **Bootstrap 5.3.0**: Grid system, components, utilities
- **Bootstrap Icons**: Icon library
- **FontAwesome 6.4.0**: Social media & additional icons
- **Face Detection API**: Automatic face centering di foto Pembina

---

## 📁 STRUKTUR FILE

```
Pendaftaran/
├── index.html                    # Halaman utama (Home)
├── blog.html                     # Halaman blog dengan expand feature
├── Tentang-Ksr.html              # Halaman tentang organisasi
├── Layanan.html                  # Halaman layanan
├── Tim Kesehatan2.html           # Halaman tim kesehatan
├── timeline.html                 # Halaman jadwal kegiatan
├── pendaftaran.html              # Form pendaftaran
├── Fasilitator.html              # Halaman fasilitator
├── Tentang-Ksr-rapi.html         # Backup halaman tentang
├── ksr_pmi_form.php              # Backend form handler
├── data_pendaftaran.json         # Data penyimpanan pendaftar
├── update_files.py               # Utility script
├── GUIDE_BOOK.md                 # File ini
│
├── FotoBeranda/                  # Folder foto carousel & layanan
│   ├── crousel1.JPG
│   ├── crousel2.JPG
│   ├── crousel3.jpg
│   └── ...
│
├── FOTOKSR/                      # Folder foto KSR
├── Gambar/                       # Folder gambar umum
├── x/                            # Folder foto galeri
├── o/                            # Folder foto berita
│
├── Bismillah bisa blognya/       # Folder blog archive
│   ├── artikel/
│   ├── berita/
│   └── kegiatan/
│
└── [Logo Files]
    ├── LogoKSR.jpg
    ├── LogoPolije.jpg
    └── logoPMI.png
```

---

## 📄 DAFTAR HALAMAN

### 1. **index.html** - Halaman Utama (Home)
**Tujuan:** Halaman penyambutan dengan overview organisasi

**Sections:**
- Header dengan Navigation
- Carousel (3 slide)
- Layanan Section (2 layanan card)
- Berita Terbaru Grid (6 berita)
- Galeri (Foto & Video dengan filter)
- Footer

**Key Features:**
- Sticky header dengan logo dan navbar
- Responsive carousel dengan caption overlay
- Service cards dengan hover effect
- News grid dengan lazy loading effect
- Gallery filter (Semua/Foto/Video)
- YouTube video modal popup
- Social media links
- Google Maps embed

---

### 2. **blog.html** - Blog dengan Expand Feature
**Tujuan:** Menampilkan artikel blog lengkap dengan expand functionality

**Sections:**
- Header (sama seperti index.html)
- Blog Title
- Blog Grid (3 blog cards)
- Footer

**Key Features:**
- ✨ **Expand/Collapse Blog Cards**: Klik "Baca Selengkapnya" untuk membaca full content
- Multi-paragraph support dengan class `.full-content`
- Image float left di desktop, stacked di mobile
- Responsive typography untuk berbagai ukuran layar
- Card animation dan smooth scroll
- Close expanded card dengan klik di luar

**Blog Cards Current:**
1. Kegiatan Rutin KSR
2. Program Edukasi Kesehatan
3. Kunjungan Membawa Berkah

---

### 3. **Tentang-Ksr.html** - Tentang KSR PMI
**Tujuan:** Memberikan informasi lengkap tentang organisasi

**Sections:**
- Header
- Hero Section (Title + Image)
- Sejarah KSR
- Visi & Misi
- Leadership (Ketua & Wakil)
- Statistik Organisasi
- Kepengurusan (Team members)
- Keanggotaan
- Footer

**Key Features:**
- Sticky header dengan scroll animation
- Hero section 65vh height
- Section dividers dengan gradient
- Leader cards dengan image showcase
- Pembina card dengan automatic face detection centering
- Stats counter animation
- Intersection Observer untuk scroll effects
- Clean CSS-first structure dengan organized comments

---

### 4. **Layanan.html** - Halaman Layanan
**Tujuan:** Menjelaskan layanan yang ditawarkan organisasi

**Sections:**
- Header
- Hero Section
- Layanan Cards
- Footer

**Key Features:**
- Service cards dengan image overlay
- Hover effects dan animations
- "Learn More" buttons
- Responsive grid layout

---

### 5. **Tim Kesehatan2.html** - Tim Kesehatan
**Tujuan:** Menampilkan informasi tim kesehatan

**Key Features:**
- Standardized header matching other pages
- Bootstrap navbar dengan mobile responsiveness
- Color variables matching theme
- Consistent styling dengan halaman lain

---

### 6. **timeline.html** - Jadwal Kegiatan
**Tujuan:** Menampilkan timeline dan jadwal kegiatan

**Key Features:**
- Timeline visual
- Schedule information
- Event calendar

---

### 7. **pendaftaran.html** - Form Pendaftaran
**Tujuan:** Memfasilitasi pendaftaran anggota baru

**Key Features:**
- Form validation
- Data storage ke JSON
- Success message
- Responsive form layout

---

### 8. **Fasilitator.html** - Halaman Fasilitator
**Tujuan:** Informasi tentang program fasilitator

**Key Features:**
- Program details
- Benefits explanation
- Call-to-action buttons

---

## ⚡ FITUR UTAMA

### 1. Blog Expand/Collapse
**File:** `blog.html`

**Cara Kerja:**
```javascript
// Klik "Baca Selengkapnya" atau kartu
toggleExpand(cardElement)

// CSS untuk styling
.blog-card.expanded {
  grid-column: 1 / -1;           // Full width
  display: flex;                 // Image float
  flex-direction: row/column;    // Responsive
}

.blog-card.expanded .blog-card-content p.full-content {
  display: block !important;     // Show hidden content
}
```

**Responsive Behavior:**
- Desktop: Image 35% width, content 65% width
- Tablet: Image 100% width, stacked layout
- Mobile: All stacked, optimized font sizes

---

### 2. Gallery Filter
**File:** `index.html`

**Fungsi:**
```javascript
filterGaleri(category) {
  // Menampilkan/menyembunyikan galeri berdasarkan kategori
  // Categories: 'semua', 'foto', 'video'
}
```

**Filter Tabs:**
- SEMUA (menampilkan semua item)
- FOTO (hanya foto)
- VIDEO (hanya video)

---

### 3. YouTube Modal Popup
**File:** `index.html`

**Fungsi:**
```javascript
openVideoModal(videoId)   // Buka video popup
closeVideoModal()         // Tutup video popup

// Trigger: Klik video thumbnail
// Close: Tombol X, klik di luar, atau tekan Escape
```

**Features:**
- Auto-play saat dibuka
- Responsive 16:9 aspect ratio
- Multiple close methods
- Prevents body scroll saat modal terbuka

---

### 4. Automatic Face Detection & Centering
**File:** `Tentang-Ksr.html`, `index.html`

**Fungsi:**
```javascript
centerFace(img) {
  // Menggunakan Face Detection API untuk:
  // 1. Mendeteksi wajah di foto
  // 2. Menghitung posisi wajah
  // 3. Auto-center photo ke wajah
}
```

**Usage:** Otomatis berjalan untuk `.pembina-photo` images

**Fallback:** Jika Face Detection API tidak tersedia, gunakan default `object-position: 50% 40%`

---

### 5. Responsive Navigation
**File:** Semua halaman

**Features:**
- Sticky header dengan shadow
- Logo clickable ke home
- Navigation links
- Mobile hamburger menu
- Dropdown collapse pada mobile
- Active link highlighting

**Breakpoint Mobile:**
```css
@media (max-width: 992px) {
  .navbar-collapse {
    position: fixed;
    top: 75px;
    right: 20px;
    width: auto;
    min-width: 220px;
  }
}
```

---

### 6. Scroll Animation (Intersection Observer)
**File:** Semua halaman dengan konten

**Fungsi:**
```javascript
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

// Apply ke element dengan class:
// .scroll-effect
// .fade-in
```

---

## 📚 PANDUAN MENGGUNAKAN SETIAP HALAMAN

### INDEX.HTML - Halaman Utama

**Navigasi:**
```
Beranda (Active) → Tentang → Layanan → Blog → Jadwal → Pendaftaran
```

**Interaksi:**
1. **Carousel**: Auto-slide setiap 5 detik, manual dengan arrows
2. **Service Cards**: Hover untuk melihat overlay, klik "LEARN MORE"
3. **Berita Grid**: Klik untuk ke blog
4. **Galeri**: 
   - Klik foto untuk melihat detail
   - Klik tab untuk filter
   - Klik video untuk buka modal
5. **Footer**: Social links, contact info, lokasi

**Mobile Tips:**
- Hamburger menu untuk navigasi
- Carousel ukuran lebih kecil
- Single column layout
- Touch-friendly buttons

---

### BLOG.HTML - Blog dengan Expand

**Navigasi:**
```
Beranda → Tentang → Layanan → Blog (Active) → Jadwal → Pendaftaran
```

**Cara Menggunakan Blog Cards:**

**Step 1: Normal View**
- Lihat preview 2 paragraf pertama
- Lihat thumbnail image
- Meta info: tanggal publikasi

**Step 2: Klik "Baca Selengkapnya"**
- Card expand full width
- Image pindah ke kiri (desktop) atau atas (mobile)
- Semua paragraf terlihat
- Full content terakses

**Step 3: Tutup**
- Klik di luar card, atau
- Klik "Baca Selengkapnya" lagi, atau
- Buka card lain (otomatis tutup yang lama)

**Desktop Layout (Expanded):**
```
┌─────────────────────────────────────────────┐
│ IMAGE (35%)      │ CONTENT (65%)            │
│ 300px height     │ - Title                  │
│                  │ - Meta                   │
│ float left       │ - Para 1                 │
│                  │ - Para 2 (full)          │
│                  │ - Para 3 (full)          │
└─────────────────────────────────────────────┘
```

**Mobile Layout (Expanded):**
```
┌─────────────────────────────────────────────┐
│ IMAGE (100%)                                │
│ height: 200px                               │
├─────────────────────────────────────────────┤
│ CONTENT (100%)                              │
│ - Title                                     │
│ - Meta                                      │
│ - Para 1                                    │
│ - Para 2 (full)                             │
│ - Para 3 (full)                             │
└─────────────────────────────────────────────┘
```

---

### TENTANG-KSR.HTML - Tentang Organisasi

**Sections Detail:**

**Hero Section**
- Title besar
- Background image
- Sticky header

**Sejarah**
- Deskripsi singkat history
- Text-justified paragraph

**Visi & Misi**
- Organized list
- Clear formatting

**Leadership**
- Ketua card dengan foto
- Wakil ketua card dengan foto
- Auto face detection centering
- Title dan deskripsi

**Statistik**
- 4-5 stat counters
- Animation on scroll

**Kepengurusan**
- Tim members dalam grid
- Photo + name + position

**Keanggotaan**
- Member categories
- Benefits explanation

---

### TIMELINE.HTML - Jadwal Kegiatan

**Sections:**
- Timeline header
- Event list atau calendar
- Event details
- Registration buttons

---

### PENDAFTARAN.HTML - Form Pendaftaran

**Form Fields (Typical):**
- Nama lengkap
- Email
- Nomor telepon
- Asal universitas/institusi
- Program yang diinginkan
- Motivasi
- Checkbox persetujuan

**Proses:**
1. User isi form
2. Validasi browser
3. Submit ke `ksr_pmi_form.php`
4. Data tersimpan di `data_pendaftaran.json`
5. Success message ditampilkan

---

## 🎨 CSS & DESIGN SYSTEM

### Color Palette
```css
Primary Colors:
--dark-maroon: #5a1414      /* Warna utama gelap - Header/Footer */
--primary-maroon: #6B1717   /* Warna utama cerah - Accents */

Neutral Colors:
--white: #ffffff             /* Putih - Text di dark bg */
--light-bg: #f5f5f5          /* Light gray - Section bg */

Accent Colors:
#b30000                       /* Red untuk highlight */
rgba(0,0,0,0.1)             /* Shadow */
rgba(255,255,255,0.1)       /* Overlay */
```

### Typography Hierarchy
```css
H1: 2.5rem, font-weight: 900  /* Section titles */
H2: 2rem, font-weight: 900    /* Subsection titles */
H3: 1.3-1.8rem, font-weight: 700  /* Card titles */
H4: 1.5rem, font-weight: bold /* Subtitle */

Body: 0.95rem, color: #666    /* Paragraph text */
Meta: 0.85rem, color: #999    /* Date, tags, etc */
```

### Common Component Styles

**Cards:**
```css
.card {
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}
```

**Buttons:**
```css
.btn {
  padding: 10px 25px;
  border: 2px solid white;
  border-radius: 5px;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: all 0.3s;
}

.btn:hover {
  transform: scale(1.05);
  background-color: white;
  color: var(--dark-maroon);
}
```

**Overlays:**
```css
/* Gradient overlay */
background: linear-gradient(to top, rgba(90,20,20,0.95), transparent);

/* Dark overlay */
background: rgba(0,0,0,0.5);

/* Light overlay */
background: rgba(255,255,255,0.1);
```

### Responsive Spacing
```css
Desktop: padding: 60px 0;      /* Large spacing */
Tablet:  padding: 40px 0;      /* Medium spacing */
Mobile:  padding: 30px 0;      /* Small spacing */
```

---

## 🔧 JAVASCRIPT & INTERAKTIVITAS

### Core Functions

**1. Blog Toggle Expand**
```javascript
function toggleExpand(card) {
  // Hapus expanded dari semua card
  document.querySelectorAll('.blog-card').forEach(c => {
    if (c !== card) c.classList.remove('expanded');
  });
  
  // Toggle expanded pada card yang diklik
  card.classList.toggle('expanded');
  
  // Scroll ke card jika di-expand
  if (card.classList.contains('expanded')) {
    card.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

// Close saat klik di luar
document.addEventListener('click', function(event) {
  const expandedCard = document.querySelector('.blog-card.expanded');
  if (expandedCard && !expandedCard.contains(event.target)) {
    expandedCard.classList.remove('expanded');
  }
});
```

**2. Gallery Filter**
```javascript
function filterGaleri(category) {
  const tabs = document.querySelectorAll('.galeri-tab');
  const items = document.querySelectorAll('.galeri-item');
  
  // Update active tab
  tabs.forEach(tab => tab.classList.remove('active'));
  event.target.classList.add('active');
  
  // Filter items
  items.forEach(item => {
    if (category === 'semua' || item.classList.contains(category)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}
```

**3. Video Modal**
```javascript
function openVideoModal(videoId) {
  const modal = document.getElementById('videoModal');
  const iframe = document.getElementById('videoFrame');
  iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
  modal.style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

function closeVideoModal() {
  const modal = document.getElementById('videoModal');
  const iframe = document.getElementById('videoFrame');
  iframe.src = '';
  modal.style.display = 'none';
  document.body.style.overflow = 'auto';
}

// Close pada klik di luar
document.getElementById('videoModal').addEventListener('click', function(event) {
  if (event.target === this) closeVideoModal();
});

// Close pada tekan Escape
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') closeVideoModal();
});
```

**4. Face Detection & Auto-center**
```javascript
async function centerFace(img) {
  if (!img.complete) await new Promise(r => img.onload = r);
  try {
    if ('FaceDetector' in window) {
      const detector = new FaceDetector({fastMode: true, maxDetectedFaces: 1});
      const faces = await detector.detect(img);
      if (faces && faces.length > 0) {
        const box = faces[0].boundingBox;
        const cx = box.x + box.width / 2;
        const cy = box.y + box.height / 2;
        const xPercent = (cx / img.naturalWidth) * 100;
        const yPercent = (cy / img.naturalHeight) * 100;
        img.style.objectPosition = `${xPercent}% ${yPercent}%`;
        return;
      }
    }
  } catch (e) {
    console.warn('Face detection failed:', e);
  }
  img.style.objectPosition = '50% 40%'; // Fallback
}

// Apply ke semua pembina photos
document.querySelectorAll('.pembina-photo').forEach(img => centerFace(img));
```

**5. Intersection Observer (Scroll Animation)**
```javascript
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.scroll-effect, .fade-in').forEach(el => {
  observer.observe(el);
});
```

---

## 📱 RESPONSIVE DESIGN

### Breakpoints Overview

| Device | Width | Grid | Font | Layout |
|--------|-------|------|------|--------|
| Desktop | > 1200px | 3 columns | 1rem+ | Horizontal |
| Tablet | 768-1200px | 2 columns | 0.95rem | Wrapped |
| Mobile | 480-768px | 1 column | 0.9rem | Stacked |
| Very Small | < 480px | 1 column | 0.85rem | Compact |

### Media Query Patterns

**Navbar Mobile (992px and below):**
```css
@media (max-width: 992px) {
  .navbar-collapse {
    position: fixed;
    top: 75px;
    right: 20px;
    min-width: 220px;
  }
  
  .navbar-nav .nav-link {
    padding: 0.75rem 1.5rem !important;
  }
}
```

**Blog Cards Mobile (768px and below):**
```css
@media (max-width: 768px) {
  .blog-card.expanded {
    flex-direction: column;
  }
  
  .blog-card.expanded .blog-card-image {
    width: 100%;
    height: 250px;
  }
}
```

**Very Small Devices (480px and below):**
```css
@media (max-width: 480px) {
  .carousel-caption-custom {
    font-size: 1.2rem;
  }
  
  .blog-card.expanded .blog-card-content h3 {
    font-size: 1rem;
  }
}
```

### Testing Responsive Design

**Chrome DevTools:**
1. Tekan `F12`
2. Klik `Ctrl + Shift + M` (Toggle Device Toolbar)
3. Pilih device dari dropdown
4. Test interaksi dan layout

**Common Test Devices:**
- iPhone 12 (390x844)
- iPad (768x1024)
- Samsung Galaxy S21 (360x800)
- Desktop (1920x1080)

---

## 🛠️ PANDUAN MAINTENANCE

### Regular Tasks

#### 1. Update Blog Content
**File:** `blog.html`

**Cara menambah blog baru:**
1. Buka `blog.html`
2. Di section `.blog-grid`, copy salah satu `.blog-card`
3. Update:
   - `.blog-card-image img src` (path gambar)
   - `<h3>` judul
   - `.blog-card-meta` tanggal
   - First `<p>` preview text
   - Second `<p class="full-content">` full content
   - Additional `<p class="full-content">` untuk paragraf tambahan
4. Save dan test

**Template Blog Card:**
```html
<div class="blog-card" onclick="toggleExpand(this)">
  <div class="blog-card-image">
    <img src="path/to/image.jpg" alt="Blog Title">
  </div>
  <div class="blog-card-content">
    <h3>Judul Blog</h3>
    <div class="blog-card-meta">Tanggal</div>
    <p>Preview paragraph (2 lines clamp)...</p>
    <p class="full-content">Full content paragraph 1...</p>
    <p class="full-content">Full content paragraph 2...</p>
    <a href="#" class="read-more" onclick="toggleExpand(this.closest('.blog-card')); event.stopPropagation(); event.preventDefault();">Baca Selengkapnya →</a>
  </div>
</div>
```

#### 2. Update Gallery
**File:** `index.html`

**Tambah Foto:**
```html
<a href="timeline.html" class="galeri-card galeri-item semua foto" style="text-decoration: none;">
  <img src="x/photo.png" alt="Description" style="width: 100%; height: 100%; object-fit: cover;">
  <div class="galeri-overlay">
    <div class="galeri-icon">
      <i class="bi bi-image"></i>
    </div>
  </div>
</a>
```

**Tambah Video:**
```html
<div class="galeri-card galeri-item semua video" style="cursor: pointer;" onclick="openVideoModal('VIDEO_ID')">
  <img src="https://img.youtube.com/vi/VIDEO_ID/maxresdefault.jpg" alt="Video" style="width: 100%; height: 100%; object-fit: cover;">
  <div class="galeri-overlay">
    <div class="galeri-icon">
      <i class="bi bi-play-circle"></i>
    </div>
  </div>
</div>
```

#### 3. Update Team Information
**File:** `Tentang-Ksr.html`

**Lokasi team members:**
```html
<!-- Kepengurusan section - grid dengan member cards -->
<div class="kepengurusan-grid">
  <div class="member-card">
    <img src="foto.jpg" alt="Nama" class="member-photo">
    <h4>Nama Lengkap</h4>
    <p class="position">Posisi/Jabatan</p>
  </div>
</div>
```

#### 4. Update Contact Information
**File:** `index.html`, `blog.html`, dll (Footer)

**Lokasi Contact:**
```html
<div class="col-lg-4 mb-4">
  <h4>Kontak</h4>
  <p><i class="bi bi-geo-alt-fill me-2"></i> ALAMAT</p>
  <p><i class="bi bi-telephone-fill me-2"></i> NOMOR</p>
  <p><i class="bi bi-envelope-fill me-2"></i> EMAIL</p>
</div>
```

#### 5. Update Social Media Links
**File:** Semua halaman (Footer)

```html
<a href="https://www.instagram.com/ksrpmipolije/" class="social-icon" target="_blank">
  <i class="bi bi-instagram"></i>
</a>
```

**Social Media Icons Available:**
- `bi-instagram`
- `bi-facebook`
- `bi-youtube`
- `bi-twitter`
- `bi-tiktok`
- `bi-linkedin`

#### 6. Image Optimization
**Best Practices:**
- Format: JPEG untuk foto, PNG untuk graphics
- Size: Max 2MB per image
- Dimensions: 
  - Carousel: 1920x600px (min)
  - Blog image: 400x300px
  - Galeri: 800x600px
  - Team photo: 500x600px

**Tools:**
- TinyPNG: https://tinypng.com
- ImageOptim: https://imageoptim.com

---

### Performance Optimization

#### 1. Image Lazy Loading
Tambahkan `loading="lazy"` ke `<img>` tags untuk halaman dengan banyak gambar:
```html
<img src="image.jpg" alt="alt" loading="lazy">
```

#### 2. CSS Minification
Pada production, minify CSS untuk mengurangi file size.

#### 3. JavaScript Bundling
Combine inline scripts menjadi file `.js` terpisah jika size membesar.

#### 4. Caching
Gunakan browser caching headers di server untuk aset statis.

---

### Security Best Practices

#### 1. Form Validation
```php
// Di ksr_pmi_form.php - validate semua input
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if (!$email) {
  die('Invalid email');
}
```

#### 2. XSS Prevention
```php
// Escape output
echo htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8');
```

#### 3. CSRF Protection
Implementasi token validation di form.

#### 4. Data Validation
- Email format check
- Phone number format
- Required fields validation
- Input length limits

---

## 🐛 TROUBLESHOOTING

### Issue 1: Blog Cards Not Expanding
**Symptom:** Klik "Baca Selengkapnya" tidak bekerja

**Solutions:**
1. Check browser console (F12) untuk JavaScript errors
2. Verify HTML structure - pastikan `onclick` handler ada
3. Check CSS - `.blog-card.expanded` styles ada?
4. Clear browser cache (Ctrl+F5)

**Debug Code:**
```javascript
console.log('Blog card clicked');
console.log('Expanded class:', card.classList.contains('expanded'));
```

---

### Issue 2: Mobile Menu Not Closing
**Symptom:** Hamburger menu tetap terbuka di mobile

**Solutions:**
1. Check Bootstrap JS sudah loaded
2. Verify navbar structure:
   - `.navbar-toggler` ada
   - `.navbar-collapse` punya `id="navbarNav"`
   - `data-bs-target="#navbarNav"` sesuai
3. Check CSS media query `@media (max-width: 992px)`

**Test:**
```javascript
// Console
console.log(typeof bootstrap); // Should be 'object'
document.querySelector('.navbar-collapse').classList.add('show');
```

---

### Issue 3: Images Not Displaying
**Symptom:** Broken image placeholder

**Solutions:**
1. Verify image path:
   - Relative path dari current HTML file
   - Case-sensitive (Linux/Mac)
   - Slash direction `/` bukan `\`
2. Check file exists di folder
3. Verify file permissions
4. Try absolute path untuk testing

**Image Path Examples:**
```html
<!-- Relative dari index.html di root -->
<img src="FotoBeranda/crousel1.JPG" alt="">

<!-- Relative dari Tentang-Ksr.html di root -->
<img src="FotoBeranda/photo.jpg" alt="">

<!-- Dari subfolder -->
<img src="../FotoBeranda/photo.jpg" alt="">
```

---

### Issue 4: Video Modal Not Opening
**Symptom:** Klik video tidak ada yang terjadi

**Solutions:**
1. Check browser console untuk errors
2. Verify video ID benar
3. Check modal HTML structure ada
4. Verify `openVideoModal()` function didefinisikan
5. Check iframe `src` attribute generate dengan benar

**Test Video Modal:**
```javascript
// Console
openVideoModal('Zyujq5QNC4g');
// Should see modal appear
```

---

### Issue 5: Styling Not Applied
**Symptom:** CSS styles tidak muncul

**Solutions:**
1. Check `<link>` tag untuk external CSS
2. Verify Bootstrap CDN link benar
3. Check inline `<style>` sudah diinclude
4. Verify class names match (case-sensitive)
5. Check CSS specificity - inline styles override

**Debug CSS:**
```javascript
// Console
const el = document.querySelector('.blog-card');
const styles = window.getComputedStyle(el);
console.log(styles.display);
console.log(styles.backgroundColor);
```

---

### Issue 6: Responsive Layout Broken
**Symptom:** Layout berantakan di mobile

**Solutions:**
1. Check viewport meta tag ada:
   ```html
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   ```
2. Verify media queries mobile-first
3. Check Bootstrap classes applied correctly
4. Test dengan Chrome DevTools device emulation
5. Check z-index conflicts

**Common Media Query Issues:**
```css
/* Wrong - desktop-first */
@media (max-width: 768px) { }

/* Better - mobile-first */
@media (min-width: 769px) { }
```

---

### Issue 7: Form Submission Not Working
**Symptom:** Submit button tidak mengirim data

**Solutions:**
1. Verify form `method="POST"` dan `action="ksr_pmi_form.php"`
2. Check PHP file path benar
3. Verify form fields punya `name` attribute
4. Check PHP error logs
5. Verify JSON file writable (`chmod 666 data_pendaftaran.json`)

**Test Form:**
```php
// Di ksr_pmi_form.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  error_log('Form submitted: ' . print_r($_POST, true));
}
```

---

### Issue 8: Face Detection Not Working
**Symptom:** Pembina photos tidak auto-center

**Solutions:**
1. Face Detection API tidak tersedia di semua browser
2. Check browser console untuk error
3. Fallback object-position akan digunakan
4. Verify image ada person's face
5. Try manual object-position adjustment

**Browser Support:**
- Chrome/Chromium: ✅ Full support
- Firefox: ❌ Not supported
- Safari: ❌ Not supported

**Fallback:**
```css
.pembina-photo {
  object-position: center 35%; /* Manual adjustment */
}
```

---

### Issue 9: Footer Maps Not Loading
**Symptom:** Google Maps embed kosong

**Solutions:**
1. Check internet connection
2. Verify Google Maps embed URL valid
3. Check for CORS issues
4. Verify iframe `allowfullscreen` attribute ada
5. Try updating embed URL

---

### Issue 10: Carousel Not Sliding
**Symptom:** Carousel stuck di slide pertama

**Solutions:**
1. Verify Bootstrap JS loaded:
   ```html
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
   ```
2. Check carousel HTML structure:
   - `.carousel` wrapper ada
   - `.carousel-inner` ada
   - `.carousel-item` punya content
   - Indicators punya `data-bs-slide-to`
3. Check `data-bs-ride="carousel"` ada
4. Verify image paths valid

---

## 📋 QUICK REFERENCE

### Frequently Used Classes

```css
/* Layout */
.container               /* Bootstrap container */
.row                     /* Bootstrap row */
.col-md-4               /* Bootstrap grid - 4/12 on medium+ */
.g-4                    /* Bootstrap gutter/gap */

/* Cards */
.blog-card              /* Blog card wrapper */
.blog-card.expanded     /* Expanded state */
.service-card           /* Service card */
.news-card              /* News card */
.galeri-card            /* Gallery card */

/* Text */
.text-center            /* Center align */
.text-uppercase         /* Uppercase text */
.text-white             /* White text */
.font-weight-bold       /* Bold text */

/* Utilities */
.mb-4                   /* Margin bottom */
.mt-4                   /* Margin top */
.p-4                    /* Padding */
.d-flex                 /* Display flex */
.align-items-center     /* Align flex items */
.justify-content-center /* Center justify */
```

### Common Color Usages

```css
Headers/Footers:        --dark-maroon (#5a1414)
Accents/Links:          --primary-maroon (#6B1717)
Main text:              #333
Secondary text:         #666
Meta/date text:         #999
```

### Common Breakpoint Widths

```
> 1200px    Desktop
768-1200px  Tablet
480-768px   Mobile
< 480px     Very Small Mobile
```

---

## 📞 CONTACT & SUPPORT

**Project Owner:** KSR PMI Politeknik Negeri Jember

**Developer Team:** Kelompok 3D Nakama

**Last Updated:** 6 Desember 2025

**Documentation Version:** 1.0

---

## 📌 IMPORTANT FILES CHECKLIST

- [ ] `index.html` - Home page working
- [ ] `blog.html` - Blog with expand feature
- [ ] `Tentang-Ksr.html` - About page
- [ ] `pendaftaran.html` - Registration form
- [ ] `ksr_pmi_form.php` - Form handler
- [ ] `data_pendaftaran.json` - Data storage
- [ ] `FotoBeranda/` folder - Images present
- [ ] `FOTOKSR/` folder - Team photos
- [ ] `Gambar/` folder - General images
- [ ] `x/` folder - Gallery photos
- [ ] `o/` folder - News photos
- [ ] Logo files present (LogoKSR.jpg, LogoPolije.jpg, logoPMI.png)
- [ ] All links working
- [ ] Mobile responsive tested
- [ ] Forms submitting correctly
- [ ] Videos playing in modal
- [ ] Gallery filter working

---

## 🎓 ADDITIONAL RESOURCES

### External Documentation
- Bootstrap 5: https://getbootstrap.com/docs/5.3
- MDN Web Docs: https://developer.mozilla.org
- CSS Tricks: https://css-tricks.com
- Web.dev: https://web.dev

### Tools
- VS Code: Code editor
- Chrome DevTools: Browser debugging
- Git: Version control
- ImageOptim: Image compression

### Best Practices
- Always test on mobile
- Validate HTML/CSS
- Optimize images
- Clear comments di code
- Backup files sebelum edit besar
- Test di berbagai browsers

---

**END OF GUIDE BOOK**

*Dokumen ini dibuat untuk memudahkan maintenance dan development KSR PMI POLIJE website. Silakan update saat ada perubahan signifikan pada project.*

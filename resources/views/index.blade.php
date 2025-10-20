@extends('components.layouts.partials.template-welcome')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="py-5 py-xl-6" aria-labelledby="hero-heading">
        <div class="container">
            <div class="row align-items-center gy-5 gx-lg-5">
                <div class="col-lg-6">
                    <div class="d-flex flex-column gap-3 text-center text-lg-start">
                        <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold align-self-center align-self-lg-start px-3 py-2 text-uppercase">
                            Perpustakaan Digital
                        </span>
                        <div>
                            <h1 id="hero-heading" class="display-4 fw-bold mb-3">Selamat Datang di Pusat Belajar Anda</h1>
                            <p class="lead text-muted mb-0">Jelajahi ribuan buku, sumber belajar, dan program yang dirancang untuk menginspirasi perjalanan belajar Anda.</p>
                        </div>
                        <form class="input-group input-group-lg shadow-sm mx-auto mx-lg-0" style="max-width: 420px;" role="search" aria-label="Pencarian buku">
                            <label for="search-books" class="visually-hidden">Cari buku atau penulis</label>
                            <input id="search-books" type="search" class="form-control" placeholder="Cari buku, penulis..." aria-describedby="submit-search">
                            <button id="submit-search" class="btn btn-primary" type="submit" aria-label="Mulai pencarian">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                        <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center justify-content-lg-start">
                            <a href="#books" class="btn btn-primary btn-lg px-4">Jelajahi Sekarang</a>
                            <a href="#services" class="btn btn-outline-primary btn-lg px-4">Pelajari Lebih Lanjut</a>
                        </div>
                        <ul class="list-unstyled small text-muted d-flex flex-column gap-2 mb-0">
                            <li class="d-flex align-items-center gap-2 justify-content-center justify-content-lg-start">
                                <i class="fa-solid fa-circle-check text-primary"></i>
                                <span>Akses digital 24/7 dengan koleksi buku lengkap</span>
                            </li>
                            <li class="d-flex align-items-center gap-2 justify-content-center justify-content-lg-start">
                                <i class="fa-solid fa-circle-check text-primary"></i>
                                <span>Kurasi pustakawan dan program literasi aktif</span>
                            </li>
                            <li class="d-flex align-items-center gap-2 justify-content-center justify-content-lg-start">
                                <i class="fa-solid fa-circle-check text-primary"></i>
                                <span>Terintegrasi dengan kegiatan belajar di kelas</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative hero-visual mx-auto">
                        <img src="{{ asset('assets/img/capybara.png') }}" alt="Ilustrasi pembaca" class="hero-illustration img-fluid" decoding="async" fetchpriority="high" width="480" height="480">
                        <div class="position-absolute top-0 start-0 translate-middle-y bg-white rounded-4 shadow-sm p-3 d-none d-md-flex flex-column gap-1 text-start">
                            <span class="small text-uppercase text-muted">Anggota Aktif</span>
                            <strong class="h5 text-primary mb-0">2K+</strong>
                            <span class="small text-muted">Siswa bergabung setiap bulan</span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 translate-middle bg-white rounded-4 shadow-sm p-3 d-none d-md-flex flex-column gap-1 text-start">
                            <span class="small text-uppercase text-muted">Koleksi Buku</span>
                            <strong class="h5 text-primary mb-0">50K+</strong>
                            <span class="small text-muted">Cetak &amp; digital siap dipinjam</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-light" aria-labelledby="statistics-heading">
        <div class="container">
            <div class="text-center mb-5">
                <h2 id="statistics-heading" class="fw-bold mb-3">Perpustakaan Yang Tumbuh Bersama Anda</h2>
                <p class="text-muted mb-0">Angka-angka berikut menunjukkan komitmen kami untuk menghadirkan pengalaman belajar terbaik.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                <div class="col">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex gap-3 align-items-start">
                        <span class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center" style="width: 3.25rem; height: 3.25rem;">
                            <i class="fa-solid fa-book-open"></i>
                        </span>
                        <div>
                            <h3 class="fw-bold text-primary mb-1">50K+</h3>
                            <p class="text-muted mb-0">Judul buku fisik dan digital yang siap dieksplorasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex gap-3 align-items-start">
                        <span class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center" style="width: 3.25rem; height: 3.25rem;">
                            <i class="fa-solid fa-user-graduate"></i>
                        </span>
                        <div>
                            <h3 class="fw-bold text-primary mb-1">2K+</h3>
                            <p class="text-muted mb-0">Siswa aktif memanfaatkan ruang baca dan layanan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex gap-3 align-items-start">
                        <span class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center" style="width: 3.25rem; height: 3.25rem;">
                            <i class="fa-solid fa-calendar-check"></i>
                        </span>
                        <div>
                            <h3 class="fw-bold text-primary mb-1">100+</h3>
                            <p class="text-muted mb-0">Acara literasi dan workshop tematik sepanjang tahun.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex gap-3 align-items-start">
                        <span class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center" style="width: 3.25rem; height: 3.25rem;">
                            <i class="fa-solid fa-wifi"></i>
                        </span>
                        <div>
                            <h3 class="fw-bold text-primary mb-1">24/7</h3>
                            <p class="text-muted mb-0">Akses portal digital kapan saja untuk mendukung belajar mandiri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Books Section -->
    <section id="books" class="py-5" aria-labelledby="books-heading">
        <div class="container">
            <div class="row gy-4 align-items-start">
                <div class="col-lg-4">
                    <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3 py-2 text-uppercase">Koleksi Terpilih</span>
                    <h2 id="books-heading" class="fw-bold mt-3 mb-3">Buku Unggulan</h2>
                    <p class="text-muted mb-4">Pilihan pustakawan untuk menemani tugas sekolah, eksplorasi topik baru, maupun bacaan santai.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge rounded-pill text-bg-light border">Sains</span>
                        <span class="badge rounded-pill text-bg-light border">Soft Skills</span>
                        <span class="badge rounded-pill text-bg-light border">Sejarah</span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <article class="h-100 bg-white rounded-4 shadow-sm overflow-hidden d-flex flex-column">
                                <div class="book-image bg-gradient-1 position-relative">
                                    <img src="{{ asset('assets/img/capybara.png') }}" alt="Sampul Langit Pengetahuan" class="book-thumbnail" loading="lazy" decoding="async" width="320" height="420">
                                </div>
                                <div class="p-4 d-flex flex-column gap-3 flex-grow-1">
                                    <div>
                                        <h3 class="h5 fw-bold mb-1">Langit Pengetahuan</h3>
                                        <p class="text-muted small mb-2">Oleh Diah Ramadhani</p>
                                        <div class="d-flex align-items-center gap-2 text-warning small" aria-label="Rating 4 dari 5">
                                            <span>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </span>
                                            <span class="text-muted small">4.0 · 860 ulasan</span>
                                        </div>
                                    </div>
                                    <p class="text-muted small mb-0">Eksplorasi astronomi populer dengan ilustrasi menarik dan eksperimen sederhana.</p>
                                    <a class="btn btn-primary btn-sm mt-auto" href="#">Pinjam Sekarang</a>
                                </div>
                            </article>
                        </div>
                        <div class="col">
                            <article class="h-100 bg-white rounded-4 shadow-sm overflow-hidden d-flex flex-column">
                                <div class="book-image bg-gradient-2 position-relative">
                                    <img src="{{ asset('assets/img/capybara.png') }}" alt="Sampul Strategi Belajar Efektif" class="book-thumbnail" loading="lazy" decoding="async" width="320" height="420">
                                </div>
                                <div class="p-4 d-flex flex-column gap-3 flex-grow-1">
                                    <div>
                                        <h3 class="h5 fw-bold mb-1">Strategi Belajar Efektif</h3>
                                        <p class="text-muted small mb-2">Oleh Kevin Mahendra</p>
                                        <div class="d-flex align-items-center gap-2 text-warning small" aria-label="Rating 3.5 dari 5">
                                            <span>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </span>
                                            <span class="text-muted small">3.5 · 640 ulasan</span>
                                        </div>
                                    </div>
                                    <p class="text-muted small mb-0">Panduan praktis menyusun jadwal belajar, mencatat efektif, dan menjaga fokus.</p>
                                    <a class="btn btn-primary btn-sm mt-auto" href="#">Pinjam Sekarang</a>
                                </div>
                            </article>
                        </div>
                        <div class="col">
                            <article class="h-100 bg-white rounded-4 shadow-sm overflow-hidden d-flex flex-column">
                                <div class="book-image bg-gradient-3 position-relative">
                                    <img src="{{ asset('assets/img/capybara.png') }}" alt="Sampul Kronik Sejarah" class="book-thumbnail" loading="lazy" decoding="async" width="320" height="420">
                                </div>
                                <div class="p-4 d-flex flex-column gap-3 flex-grow-1">
                                    <div>
                                        <h3 class="h5 fw-bold mb-1">Kronik Sejarah</h3>
                                        <p class="text-muted small mb-2">Oleh Emma Williams</p>
                                        <div class="d-flex align-items-center gap-2 text-warning small" aria-label="Rating 4.5 dari 5">
                                            <span>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </span>
                                            <span class="text-muted small">4.5 · 1.120 ulasan</span>
                                        </div>
                                    </div>
                                    <p class="text-muted small mb-0">Narasi sejarah dunia dengan infografis ringkas dan fakta menarik.</p>
                                    <a class="btn btn-primary btn-sm mt-auto" href="#">Pinjam Sekarang</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light" aria-labelledby="services-heading">
        <div class="container">
            <div class="row gy-4 align-items-start">
                <div class="col-lg-5">
                    <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3 py-2 text-uppercase">Layanan Kami</span>
                    <h2 id="services-heading" class="fw-bold mt-3 mb-3">Fasilitas Literasi yang Selalu Terbuka</h2>
                    <p class="text-muted mb-4">Kami menghadirkan ruang baca modern dengan koleksi terpercaya, pendampingan akademik, hingga program literasi yang mendorong kebiasaan membaca.</p>
                    <p class="text-muted mb-0">Reservasi ruang kolaborasi, akses portal digital, dan keikutsertaan program dapat diatur langsung melalui staf perpustakaan.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col">
                            <div class="service-card h-100 p-4 text-center text-sm-start bg-white rounded-4 shadow-sm">
                                <div class="service-icon mb-3">
                                    <i class="fa-solid fa-book-open"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Koleksi Luas</h5>
                                <p class="text-muted mb-0">Akses ke 50.000+ buku dari berbagai genre dan mata pelajaran.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-card h-100 p-4 text-center text-sm-start bg-white rounded-4 shadow-sm">
                                <div class="service-icon mb-3">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Kelompok Belajar</h5>
                                <p class="text-muted mb-0">Ruang belajar kolaboratif untuk kerja kelompok.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-card h-100 p-4 text-center text-sm-start bg-white rounded-4 shadow-sm">
                                <div class="service-icon mb-3">
                                    <i class="fa-solid fa-laptop"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Sumber Digital</h5>
                                <p class="text-muted mb-0">E-book, jurnal, dan basis data daring tersedia 24/7.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-card h-100 p-4 text-center text-sm-start bg-white rounded-4 shadow-sm">
                                <div class="service-icon mb-3">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Program Membaca</h5>
                                <p class="text-muted mb-0">Program interaktif untuk meningkatkan kebiasaan membaca.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-5" aria-labelledby="events-heading">
        <div class="container">
            <div class="row gy-4 align-items-start">
                <div class="col-lg-5">
                    <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3 py-2 text-uppercase">Agenda Literasi</span>
                    <h2 id="events-heading" class="fw-bold mt-3 mb-3">Acara Mendatang</h2>
                    <p class="text-muted mb-4">Ikuti kegiatan terbaru untuk memperluas jejaring belajar dan mengasah keterampilan literasi Anda.</p>
                    <a class="btn btn-outline-primary btn-sm" href="#contact">Butuh bantuan pendaftaran?</a>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex flex-column gap-3">
                        <article class="event-card p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex gap-3 align-items-start">
                                <div class="event-date text-center px-3 py-2 rounded-3">
                                    <div class="fw-bold fs-4">15</div>
                                    <div class="small text-uppercase">Nov</div>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold mb-2">Pertemuan Klub Buku</h3>
                                    <p class="text-muted mb-1"><i class="fa-regular fa-clock me-2"></i>14.00 - 15.30</p>
                                    <p class="text-muted mb-0"><i class="fa-solid fa-location-dot me-2"></i>Aula Perpustakaan</p>
                                </div>
                            </div>
                        </article>
                        <article class="event-card p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex gap-3 align-items-start">
                                <div class="event-date text-center px-3 py-2 rounded-3">
                                    <div class="fw-bold fs-4">22</div>
                                    <div class="small text-uppercase">Nov</div>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold mb-2">Jumpa Penulis</h3>
                                    <p class="text-muted mb-1"><i class="fa-regular fa-clock me-2"></i>15.00 - 17.00</p>
                                    <p class="text-muted mb-0"><i class="fa-solid fa-location-dot me-2"></i>Aula Utama</p>
                                </div>
                            </div>
                        </article>
                        <article class="event-card p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex gap-3 align-items-start">
                                <div class="event-date text-center px-3 py-2 rounded-3">
                                    <div class="fw-bold fs-4">29</div>
                                    <div class="small text-uppercase">Nov</div>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold mb-2">Peluncuran Tantangan Membaca</h3>
                                    <p class="text-muted mb-1"><i class="fa-regular fa-clock me-2"></i>13.00 - 14.00</p>
                                    <p class="text-muted mb-0"><i class="fa-solid fa-location-dot me-2"></i>Aula Perpustakaan</p>
                                </div>
                            </div>
                        </article>
                        <article class="event-card p-4 bg-white rounded-4 shadow-sm">
                            <div class="d-flex gap-3 align-items-start">
                                <div class="event-date text-center px-3 py-2 rounded-3">
                                    <div class="fw-bold fs-4">05</div>
                                    <div class="small text-uppercase">Des</div>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold mb-2">Orientasi Perpustakaan</h3>
                                    <p class="text-muted mb-1"><i class="fa-regular fa-clock me-2"></i>10.00 - 11.00</p>
                                    <p class="text-muted mb-0"><i class="fa-solid fa-location-dot me-2"></i>Ruang Rapat</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light" aria-labelledby="testimonials-heading">
        <div class="container">
            <div class="text-center mb-5">
                <h2 id="testimonials-heading" class="fw-bold mb-3">Kata Para Siswa</h2>
                <p class="text-muted mb-0">Cerita nyata dari pembaca yang menjadikan perpustakaan sebagai ruang belajar favorit.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
                <div class="col">
                    <blockquote class="testimonial-card h-100 p-4 bg-white rounded-4 shadow-sm">
                        <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                        <div class="mb-3 text-warning" aria-label="Rating 4 dari 5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="mb-4">"Perpustakaan ini membuat belajar menjadi menyenangkan. Koleksi bukunya lengkap dan ruangannya nyaman!"</p>
                        <footer class="author d-flex align-items-center gap-3">
                            <div class="avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Alya Pratiwi</h6>
                                <small class="text-muted">Kelas 11</small>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div class="col">
                    <blockquote class="testimonial-card h-100 p-4 bg-white rounded-4 shadow-sm">
                        <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                        <div class="mb-3 text-warning" aria-label="Rating 5 dari 5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="mb-4">"Program membaca bulanannya seru sekali! Banyak kegiatan yang mendorong kami untuk rajin membaca."</p>
                        <footer class="author d-flex align-items-center gap-3">
                            <div class="avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Bima Nugraha</h6>
                                <small class="text-muted">Kelas 10</small>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div class="col">
                    <blockquote class="testimonial-card h-100 p-4 bg-white rounded-4 shadow-sm">
                        <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                        <div class="mb-3 text-warning" aria-label="Rating 4 dari 5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p class="mb-4">"Aplikasi pinjam bukunya memudahkan saya untuk mengatur jadwal bacaan tanpa takut terlambat."</p>
                        <footer class="author d-flex align-items-center gap-3">
                            <div class="avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Citra Dewi</h6>
                                <small class="text-muted">Kelas 12</small>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div class="col">
                    <blockquote class="testimonial-card h-100 p-4 bg-white rounded-4 shadow-sm">
                        <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                        <div class="mb-3 text-warning" aria-label="Rating 4 dari 5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p class="mb-4">"Petugas perpustakaannya ramah dan selalu siap membantu. Sangat nyaman untuk belajar."</p>
                        <footer class="author d-flex align-items-center gap-3">
                            <div class="avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Dimas Putra</h6>
                                <small class="text-muted">Kelas 8</small>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div class="col">
                    <blockquote class="testimonial-card h-100 p-4 bg-white rounded-4 shadow-sm">
                        <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                        <div class="mb-3 text-warning" aria-label="Rating 4 dari 5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="mb-4">"Koleksi referensinya lengkap. Saya sering meminjam buku untuk tugas sekolah dan lomba."</p>
                        <footer class="author d-flex align-items-center gap-3">
                            <div class="avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Eka Wardani</h6>
                                <small class="text-muted">Kelas 12</small>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div class="col">
                    <blockquote class="testimonial-card h-100 p-4 bg-white rounded-4 shadow-sm">
                        <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                        <div class="mb-3 text-warning" aria-label="Rating 5 dari 5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="mb-4">"Sumber digitalnya lengkap. Saya bisa mengakses jurnal ilmiah kapan saja tanpa khawatir kuota perpustakaan."</p>
                        <footer class="author d-flex align-items-center gap-3">
                            <div class="avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">James Chen</h6>
                                <small class="text-muted">Kelas 9</small>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5" aria-labelledby="newsletter-heading">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="newsletter-card position-relative overflow-hidden text-center text-white rounded-4 p-5">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.15), transparent 55%);"></div>
                        <div class="position-relative">
                            <h2 id="newsletter-heading" class="fw-bold mb-3">Tetap Terinformasi</h2>
                            <p class="mb-4">Berlangganan buletin kami untuk rekomendasi buku, acara, dan kabar terbaru perpustakaan.</p>
                            <form class="d-flex flex-column flex-sm-row gap-2 justify-content-center" novalidate>
                                <label for="newsletter-email" class="visually-hidden">Email</label>
                                <input id="newsletter-email" type="email" class="form-control" placeholder="Masukkan email Anda" required aria-label="Masukkan email Anda untuk berlangganan">
                                <button type="submit" class="btn btn-light fw-semibold px-4">Berlangganan</button>
                            </form>
                            <p class="small text-white-50 mb-0 mt-3">Kami hanya mengirim kabar penting. Anda dapat berhenti berlangganan kapan saja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Library Info Section -->
    <section id="contact" class="py-5 bg-light" aria-labelledby="contact-heading">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3 py-2 text-uppercase">Hubungi Kami</span>
                <h2 id="contact-heading" class="fw-bold mt-3 mb-3">Library Information</h2>
                <p class="text-muted mb-0">Tim perpustakaan siap membantu melalui kanal berikut untuk kebutuhan referensi dan reservasi.</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="info-card text-center h-100 p-4 bg-white rounded-4 shadow-sm">
                        <i class="fas fa-map-marker-alt text-primary mb-3 fs-3"></i>
                        <h5 class="fw-bold mb-2">Location</h5>
                        <p class="text-muted mb-0">123 Education Street<br>Sekolah Harapan, Kota 12345</p>
                    </div>
                </div>
                <div class="col">
                    <div class="info-card text-center h-100 p-4 bg-white rounded-4 shadow-sm">
                        <i class="fas fa-phone text-primary mb-3 fs-3"></i>
                        <h5 class="fw-bold mb-2">Phone</h5>
                        <p class="text-muted mb-0">(555) 123-4567<br>Sen-Jum: 08.00 - 18.00</p>
                    </div>
                </div>
                <div class="col">
                    <div class="info-card text-center h-100 p-4 bg-white rounded-4 shadow-sm">
                        <i class="fas fa-envelope text-primary mb-3 fs-3"></i>
                        <h5 class="fw-bold mb-2">Email</h5>
                        <p class="text-muted mb-0">info@schoollibrary.edu<br>support@schoollibrary.edu</p>
                    </div>
                </div>
                <div class="col">
                    <div class="info-card text-center h-100 p-4 bg-white rounded-4 shadow-sm">
                        <i class="fas fa-clock text-primary mb-3 fs-3"></i>
                        <h5 class="fw-bold mb-2">Hours</h5>
                        <p class="text-muted mb-0">Sen-Jum: 08.00 - 18.00<br>Sab: 10.00 - 16.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Announcements Section -->
    <section class="py-5" aria-labelledby="announcements-heading">
        <div class="container">
            <div class="text-center mb-5">
                <h2 id="announcements-heading" class="fw-bold mb-3">Pengumuman Terbaru</h2>
                <p class="text-muted mb-0">Tetap up-to-date dengan informasi penting dari perpustakaan.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <article class="announcement-card p-4 h-100 bg-white rounded-4 shadow-sm border-top border-primary border-3">
                        <span class="badge bg-primary mb-3">Baru</span>
                        <h3 class="h5 fw-bold">Basis Data Digital Baru Tersedia</h3>
                        <p class="text-muted small mb-2"><i class="fa-regular fa-calendar me-2"></i>10 November 2024</p>
                        <p class="mb-0">Kami dengan senang hati mengumumkan akses ke basis data jurnal akademik baru dengan lebih dari 10.000 artikel teruji sejawat.</p>
                    </article>
                </div>
                <div class="col">
                    <article class="announcement-card p-4 h-100 bg-white rounded-4 shadow-sm border-top border-success border-3">
                        <span class="badge bg-success mb-3">Pembaruan</span>
                        <h3 class="h5 fw-bold">Jam Operasional Perpustakaan Diperpanjang</h3>
                        <p class="text-muted small mb-2"><i class="fa-regular fa-calendar me-2"></i>8 November 2024</p>
                        <p class="mb-0">Mulai pekan depan, perpustakaan buka hingga pukul 19.00 pada hari kerja untuk melayani lebih banyak siswa.</p>
                    </article>
                </div>
                <div class="col">
                    <article class="announcement-card p-4 h-100 bg-white rounded-4 shadow-sm border-top border-info border-3">
                        <span class="badge bg-info mb-3 text-dark">Acara</span>
                        <h3 class="h5 fw-bold">Donasi Buku Bersama</h3>
                        <p class="text-muted small mb-2"><i class="fa-regular fa-calendar me-2"></i>5 November 2024</p>
                        <p class="mb-0">Bantu kami menambah koleksi! Donasikan buku bekas layak baca Anda dan dapatkan pembatas buku spesial.</p>
                    </article>
                </div>
                <div class="col">
                    <article class="announcement-card p-4 h-100 bg-white rounded-4 shadow-sm border-top border-warning border-3">
                        <span class="badge bg-warning text-dark mb-3">Pengingat</span>
                        <h3 class="h5 fw-bold">Batas Pengembalian Buku</h3>
                        <p class="text-muted small mb-2"><i class="fa-regular fa-calendar me-2"></i>3 November 2024</p>
                        <p class="mb-0">Jangan lupa mengembalikan semua buku yang dipinjam sebelum 15 November agar terhindar dari denda.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection

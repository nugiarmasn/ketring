@extends('layouts.public')

@section('title', 'RM Bu Astuti - Katering Terbaik di Brebes')

@section('content')
<!-- Hero Section dengan Slider 2 Gambar -->
<section class="hero">
    <div class="hero-background hero-bg-1"></div>
    <div class="hero-background hero-bg-2"></div>
    <div class="hero-content">
        <h1 data-aos="fade-up">HIDANGAN LEZAT<br>UNTUK ACARA ANDA</h1>
        <p data-aos="fade-up" data-aos-delay="100">Katering berkualitas dengan cita rasa terbaik untuk setiap momen spesial Anda</p>
        <a href="{{ route('blog.index') }}" class="btn-primary" data-aos="fade-up" data-aos-delay="200">LIHAT MENU</a>
    </div>
</section>

<!-- Services Section -->
<section class="services">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">LAYANAN KAMI</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Solusi katering terpercaya untuk berbagai kebutuhan acara Anda</p>
        
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">💍</div>
                <div class="service-content">
                    <h3>Katering Pernikahan</h3>
                    <p>Paket lengkap untuk hari bahagia Anda. Menu premium dengan pelayanan profesional yang membuat acara pernikahan Anda berkesan.</p>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">🏢</div>
                <div class="service-content">
                    <h3>Katering Korporat</h3>
                    <p>Solusi praktis untuk meeting, seminar, dan acara perusahaan. Paket fleksibel dengan menu bervariasi untuk tim Anda.</p>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">🍱</div>
                <div class="service-content">
                    <h3>Nasi Box</h3>
                    <p>Menu nasi box ekonomis dan praktis. Cocok untuk berbagai acara dengan porsi pas dan cita rasa yang tetap istimewa.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="location">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">LOKASI KAMI</h2>
        <div class="location-grid">
            <div class="location-map" data-aos="fade-right">
                <iframe 
                    src="https://maps.google.com/maps?q=-6.8669352,108.8365647&hl=id&z=15&output=embed" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
            <div class="location-info" data-aos="fade-left">
                <h3>KUNJUNGI KAMI</h3>
                
                <div class="info-item">
                    <strong>📍 ALAMAT</strong>
                    <p>Jl. raya losari tanjung, jawa tengah</p>
                </div>
                
                <div class="info-item">
                    <strong>⏰ JAM OPERASIONAL</strong>
                    <p>Senin - Jumat: 08.00 - 17.00<br>
                    Sabtu: 08.00 - 14.00<br>
                    Minggu: Tutup</p>
                </div>
                
                <div class="info-item">
                    <strong>📞 HUBUNGI KAMI</strong>
                    <p>Telp: 0895383222953<br>
                    WA: 0895383222953<br>
                    Email: nugiarmasnurizky@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
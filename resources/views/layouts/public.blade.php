<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RM. IBU ASTUTI - Layanan Katering Profesional')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="{{ route('home') }}">RM IBU ASTUTI</a>
            </div>
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Galeri</a></li>
                <li><a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a></li>
                @auth
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>RM. IBU ASTUTI</h3>
                    <p>Layanan katering profesional untuk berbagai acara Anda.</p>
                </div>
                <div class="footer-col">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('gallery') }}">Galeri</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Kontak</h4>
                    <p>Jl. raya losari tanjung, jawa tengah</p>
                    <p>Email: nugiarmasnurizky@gmail.com</p>
                    <p>Telp: 0895383222953</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 RM. IBU ASTUTI. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            offset: 100
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            offset: 100
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            offset: 100
        });
    </script>

    <!-- Tombol WhatsApp Floating -->
    <a href="https://wa.me/62895383222953?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20katering" class="whatsapp-float" target="_blank" title="Chat WhatsApp">
        <div class="whatsapp-icon">
            <svg viewBox="0 0 32 32" fill="white" width="28" height="28">
                <path d="M16.002 3.2c-7.067 0-12.802 5.735-12.802 12.8 0 2.24.582 4.347 1.602 6.179l-2.002 7.421 7.621-1.984c1.766.941 3.773 1.484 5.911 1.484 7.067 0 12.8-5.733 12.8-12.8s-5.733-12.8-12.8-12.8h-.33zm6.246 18.237c-.256.72-1.51 1.318-2.078 1.403-.552.082-1.27.116-2.048-.128-.472-.147-.904-.293-1.578-.512-2.848-1.238-4.712-4.103-4.856-4.289-.144-.186-1.176-1.568-1.176-2.992s.744-2.123 1.008-2.413c.264-.29.576-.362.768-.362h.554c.178 0 .416-.068.652.498.24.576.816 2.002.888 2.146.072.144.12.312.024.498-.096.186-.144.302-.288.464-.144.162-.302.362-.432.486-.144.144-.294.298-.126.584.168.278.744 1.23 1.598 1.992 1.098.982 2.022 1.288 2.31 1.432.288.144.456.12.624-.072.168-.192.72-.84.912-1.128.192-.288.384-.24.648-.144.264.096 1.68.792 1.968.936.288.144.48.216.552.336.072.12.072.696-.184 1.416z"/>
            </svg>
        </div>
        <div class="whatsapp-text">
            <span class="whatsapp-title">Butuh Konsultasi?</span>
            <span class="whatsapp-subtitle">Hubungi Kami Sekarang!</span>
        </div>
    </a>

</body>
</html>
</body>
</html>
</body>
</html>
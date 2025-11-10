@extends('layouts.public')

@section('title', 'Galeri - Katering Pro')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 data-aos="fade-up">Galeri Kami</h1>
        <p data-aos="fade-up" data-aos-delay="100">Koleksi hidangan terbaik kami</p>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <div class="gallery-grid">
            @php
                $images = [
                    'https://jasanpwp.net/wp-content/uploads/2025/06/Daftar-KBLI-Catering-Lengkap-untuk-Pelaku-Usaha-Catering.webp',
                    'https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/105/2025/05/10/resep-ayam-geprek-ekonomis-dan-murah-4264155839.jpg',
                    'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=800',
                    'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=800',
                    'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=800',
                    'https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?w=800',
                    'https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=800',
                    'https://images.unsplash.com/photo-1547592166-23ac45744acd?w=800',
                    'https://images.unsplash.com/photo-1551782450-a2132b4ba21d?w=800',
                ];
            @endphp

            @foreach($images as $index => $image)
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                    <img src="{{ $image }}" alt="Hidangan {{ $index + 1 }}">
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
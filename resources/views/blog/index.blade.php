@extends('layouts.public')

@section('title', 'Blog - RM Bu Astuti')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 data-aos="fade-up">Blog Kami</h1>
        <p data-aos="fade-up" data-aos-delay="100">Tips dan informasi seputar katering</p>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <div class="blog-grid">
            @php
                $blogImages = [
                    'https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=800',
                    'https://images.unsplash.com/photo-1585032226651-759b368d7246?w=800',
                    'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=800',
                    'https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800',
                    'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=800',
                    'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=800',
                    'https://images.unsplash.com/photo-1555244162-803834f70033?w=800',
                    'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=800',
                ];
            @endphp

            @foreach($posts as $index => $post)
                <article class="blog-card-modern" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="blog-card-image">
                        <img src="{{ $blogImages[$index % count($blogImages)] }}" alt="{{ $post->title }}">
                        <div class="blog-card-overlay"></div>
                    </div>
                    <div class="blog-card-content">
                        <p class="blog-date">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                        <h3>{{ $post->title }}</h3>
                        <p class="blog-excerpt">{{ Str::limit($post->content, 120) }}</p>
                        <a href="{{ route('blog.show', $post) }}" class="btn-read-more">
                            Baca Selengkapnya 
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="pagination-wrapper">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection
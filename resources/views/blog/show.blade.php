@extends('layouts.public')

@section('title', $post->title . ' - Katering Pro')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 data-aos="fade-up">{{ $post->title }}</h1>
        <p data-aos="fade-up" data-aos-delay="100">Dipublikasikan pada {{ $post->created_at->format('d M Y') }}</p>
    </div>
</section>

<section class="blog-detail">
    <div class="container">
        <article class="blog-content" data-aos="fade-up">
            <div class="blog-meta">
                <span>Oleh {{ $post->user->name }}</span>
            </div>
            <div class="blog-text">
                {!! nl2br(e($post->content)) !!}
            </div>
            <div class="blog-back">
                <a href="{{ route('blog.index') }}" class="btn-secondary">← Kembali ke Blog</a>
            </div>
        </article>
    </div>
</section>
@endsection
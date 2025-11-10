@extends('layouts.admin')

@section('title', 'Edit Post')
@section('header', 'Edit Post')

@section('content')
<div class="admin-card">
    <div class="admin-card-header">
        <h3>Formulir Edit Postingan</h3>
    </div>
    <div class="admin-card-body">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Judul Post</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="Contoh: 5 Tips Memilih Katering Pernikahan" required>
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea id="content" name="content" rows="10" placeholder="Tulis konten blog Anda di sini..." required>{{ old('content', 'Tulis konten blog Anda di sini...') }}</textarea>
                @error('content')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="form-actions">
                <a href="{{ route('admin.posts.index') }}" class="btn-secondary">Batal</a>
                <button type="submit" class="btn-primary">Update Post</button>
            </div>
        </form>
    </div>
</div>
@endsection
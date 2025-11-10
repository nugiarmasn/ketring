@extends('layouts.admin')

@section('title', 'Tambah Post Baru')
@section('header', 'Tambah Post Baru')

@section('content')
<div class="admin-card">
    <div class="admin-card-header">
        <h3>Formulir Postingan Baru</h3>
    </div>
    <div class="admin-card-body">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="title">Judul Post</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Contoh: 5 Tips Memilih Katering Pernikahan" required>
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea id="content" name="content" rows="10" placeholder="Tulis konten blog Anda di sini..." required>{{ old('content') }}</textarea>
                @error('content')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="form-actions">
                <a href="{{ route('admin.posts.index') }}" class="btn-secondary">Batal</a>
                <button type="submit" class="btn-primary">Simpan Post</button>
            </div>
        </form>
    </div>
</div>
@endsection
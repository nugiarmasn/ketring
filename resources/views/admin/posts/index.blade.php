@extends('layouts.admin')

@section('title', 'Kelola Blog')
@section('header', 'Kelola Blog')

@section('content')
<div class="admin-actions">
    <a href="{{ route('admin.posts.create') }}" class="btn-primary">+ Tambah Post Baru</a>
</div>

<div class="table-container">
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d M Y') }}</td>
                    <td class="table-actions">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align:center;">Belum ada postingan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="pagination-wrapper">
    {{ $posts->links() }}
</div>
@endsection
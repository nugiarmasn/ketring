@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('header', 'Dashboard')

@section('content')
<div class="dashboard-welcome">
    <h2>Selamat datang, {{ auth()->user()->name }}!</h2>
    <p>Kelola konten website Katering Pro dari panel admin ini.</p>
</div>

<div class="dashboard-stats">
    <div class="stat-card">
        <h3>Total Postingan</h3>
        <p class="stat-number">{{ \App\Models\Post::count() }}</p>
    </div>
    <div class="stat-card">
        <h3>Postingan Terbaru</h3>
        <p class="stat-number">{{ \App\Models\Post::whereDate('created_at', today())->count() }}</p>
    </div>
</div>
@endsection
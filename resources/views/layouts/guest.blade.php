<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                position: relative;
                overflow: hidden;
            }
            
            body::before {
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1600') center/cover;
                opacity: 0.1;
                z-index: 0;
            }
            
            .auth-container {
                position: relative;
                z-index: 1;
                width: 100%;
                max-width: 450px;
                padding: 20px;
            }
            
            .auth-card {
                background: #fff;
                border-radius: 20px;
                box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                padding: 3rem;
                animation: slideUp 0.5s ease;
            }
            
            @keyframes slideUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .auth-logo {
                text-align: center;
                margin-bottom: 2rem;
            }
            
            .auth-logo h1 {
                font-size: 2rem;
                font-weight: 700;
                color: #667eea;
                margin-bottom: 0.5rem;
            }
            
            .auth-logo p {
                color: #64748b;
                font-size: 0.95rem;
            }
            
            .form-group {
                margin-bottom: 1.5rem;
            }
            
            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
                color: #334155;
                font-weight: 500;
                font-size: 0.9rem;
            }
            
            .form-group input[type="email"],
            .form-group input[type="password"],
            .form-group input[type="text"] {
                width: 100%;
                padding: 0.875rem 1rem;
                border: 2px solid #e2e8f0;
                border-radius: 10px;
                font-size: 0.95rem;
                transition: all 0.3s;
                font-family: 'Poppins', sans-serif;
            }
            
            .form-group input:focus {
                outline: none;
                border-color: #667eea;
                box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            }
            
            .form-checkbox {
                display: flex;
                align-items: center;
                margin-bottom: 1.5rem;
            }
            
            .form-checkbox input {
                margin-right: 0.5rem;
                width: 18px;
                height: 18px;
                cursor: pointer;
            }
            
            .form-checkbox label {
                color: #64748b;
                font-size: 0.9rem;
                cursor: pointer;
            }
            
            .btn-primary {
                width: 100%;
                padding: 0.875rem;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: #fff;
                border: none;
                border-radius: 10px;
                font-size: 1rem;
                font-weight: 600;
                cursor: pointer;
                transition: transform 0.2s, box-shadow 0.2s;
                font-family: 'Poppins', sans-serif;
            }
            
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            }
            
            .auth-links {
                margin-top: 1.5rem;
                text-align: center;
            }
            
            .auth-links a {
                color: #667eea;
                text-decoration: none;
                font-size: 0.9rem;
                transition: color 0.3s;
            }
            
            .auth-links a:hover {
                color: #764ba2;
                text-decoration: underline;
            }
            
            .divider {
                display: flex;
                align-items: center;
                margin: 1.5rem 0;
            }
            
            .divider::before,
            .divider::after {
                content: '';
                flex: 1;
                height: 1px;
                background: #e2e8f0;
            }
            
            .divider span {
                padding: 0 1rem;
                color: #94a3b8;
                font-size: 0.85rem;
            }
            
            .error-message {
                color: #ef4444;
                font-size: 0.85rem;
                margin-top: 0.25rem;
            }
            
            .success-message {
                background: #d1fae5;
                color: #065f46;
                padding: 0.75rem;
                border-radius: 8px;
                margin-bottom: 1rem;
                font-size: 0.9rem;
            }
            
            @media (max-width: 640px) {
                .auth-card {
                    padding: 2rem 1.5rem;
                }
                
                .auth-logo h1 {
                    font-size: 1.75rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-logo">
                    <h1>Katering Pro</h1>
                    <p>Selamat datang kembali!</p>
                </div>
                
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
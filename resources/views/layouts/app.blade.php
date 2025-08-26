<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/854/854929.png" type="image/x-icon">
    <title>@yield('title', 'Laravel Maps App')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

</head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        #map {
            height: 500px;
            width: 100%;
            border-radius: 8px;
        }
        .location-card {
            transition: transform 0.2s;
        }
        .location-card:hover {
            transform: translateY(-2px);
        }

        h1{
            color: #ffffffff;
        }

        .cabeca{
            background-color: #023c77ff;
        }

        img{
            height: 40px;
            width: 60px;
            padding-right: 20px;
        }

        .palavra{
            color: #ffffffff;
        }
        .topo{
            background-color: #cececeff;
        }
        

    </style>
    @yield('styles')
</head>
<body class="topo ">
    <nav class="navbar navbar-expand-lg navbar-dark cabeca">
        <div class="container">
            <a class="navbar-brand" href="{{ route('locations.index') }}">
                <img src="https://cdn-icons-png.flaticon.com/512/854/854929.png" alt="logo">
                Laravel Maps App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link palavra" href="{{ route('locations.index') }}">
                            <i class="fas fa-list me-1"></i>Locais
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link palavra" href="{{ route('locations.create') }}">
                            <i class="fas fa-plus me-1"></i>Adicionar Local
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @yield('scripts')
</body>
</html>

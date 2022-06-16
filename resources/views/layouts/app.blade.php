<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIMANIS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logobpom.png') }}" alt="Logo" width="50px;">
                    <span>
                        {{ config('app.name', 'SIMANIS') }}
                    </span>
                </a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                    @else
                        <ul class="navbar-nav">
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ndProfil" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ndProfil">
                                    @foreach($dataMenu as $item)
                                    @if($item->level === 1 && $item->parentId === 100)
                                        <li>
                                            <a class="dropdown-item" href="{{ $item->isParent ? '#' : route('doc.index', $item->id) }}">{{$item->name}} @if($item->isParent) &raquo; @endif</a>
                                                @if($item->isParent) <!-- <== hilangkan data kosong jika tidak ada sub -->
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                @endif
                                                @foreach($dataMenu as $item1)
                                                    @if($item1->level === 2 && $item1->parentId === $item->id)
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('doc.index', $item1->id) }}">{{$item1->name}} @if($item1->isParent) &raquo; @endif</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                @if($item->isParent)
                                                    </ul>
                                                @endif
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ndQualityAssurance" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Quality Assurance
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ndQualityAssurance">
                                    @foreach($dataMenu as $item)
                                    @if($item->level === 1 && $item->parentId === 200)
                                        <li>
                                            <a class="dropdown-item" href="{{ $item->isParent ? '#' : route('doc.index', $item->id) }}">{{$item->name}} @if($item->isParent) &raquo; @endif</a>
                                                @if($item->isParent) <!-- <== hilangkan data kosong jika tidak ada sub -->
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                @endif
                                                @foreach($dataMenu as $item1)
                                                    @if($item1->level === 2 && $item1->parentId === $item->id)
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('doc.index', $item1->id) }}">{{$item1->name}} @if($item1->isParent) &raquo; @endif</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                @if($item->isParent)
                                                    </ul>
                                                @endif
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ndProsesBisnis" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Proses Bisnis
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ndProsesBisnis">
                                    @foreach($dataMenu as $item)
                                    @if($item->level === 1 && $item->parentId === 300)
                                        <li>
                                            <a class="dropdown-item" href="{{ $item->isParent ? '#' : route('doc.index', $item->id) }}">{{$item->name}} @if($item->isParent) &raquo; @endif</a>
                                                @if($item->isParent) <!-- <== hilangkan data kosong jika tidak ada sub -->
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                @endif
                                                @foreach($dataMenu as $item1)
                                                    @if($item1->level === 2 && $item1->parentId === $item->id)
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('doc.index', $item1->id) }}">{{$item1->name}} @if($item1->isParent) &raquo; @endif</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                @if($item->isParent)
                                                    </ul>
                                                @endif
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ndManajemenRisiko" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Manajemen Risiko
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ndManajemenRisiko">
                                    @foreach($dataMenu as $item)
                                    @if($item->level === 1 && $item->parentId === 400)
                                        <li>
                                            <a class="dropdown-item" href="{{ $item->isParent ? '#' : route('doc.index', $item->id) }}">{{$item->name}} @if($item->isParent) &raquo; @endif</a>
                                                @if($item->isParent) <!-- <== hilangkan data kosong jika tidak ada sub -->
                                                    <ul class="dropdown-menu dropdown-submenu">
                                                @endif
                                                @foreach($dataMenu as $item1)
                                                    @if($item1->level === 2 && $item1->parentId === $item->id)
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('doc.index', $item1->id) }}">{{$item1->name}} @if($item1->isParent) &raquo; @endif</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                @if($item->isParent)
                                                    </ul>
                                                @endif
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <!-- Dropdown -->
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            Pembuatan Dokumen baru &raquo;
                                            </a>
                                            <ul class="dropdown-menu dropdown-submenu-left" aria-labelledby="ndPembuatanDok">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Formulir pengajuan</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">SOP Mikro</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">dll</a>
                                                    </li>
                                            </ul>
                                        </li>
                                        <!-- Dropdown -->
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            Revisi Dokumen &raquo;
                                            </a>
                                            <ul class="dropdown-menu dropdown-submenu-left" aria-labelledby="ndPembuatanDok">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Formulir pengajuan</a>
                                                    </li>
                                            </ul>
                                        </li>
                                        <!-- Dropdown -->
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            Dokumen Kadaluarsa
                                            </a>
                                        </li>
                                        <!-- Dropdown -->
                                        <li>
                                            <a class="dropdown-item" href="{{route('doc.form')}}">
                                            Upload Dokumen
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>

<!doctype html>
<html lang="id">
<head>
    @include('partials.head')
    <title>@yield('title') | Portofolio Fauzi</title>
</head>
<body>
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <script src="{{ asset('asset/script.js') }}"></script>
</body>
</html>

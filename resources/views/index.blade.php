<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Books-Laravel</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Books-Laravel</a>
            </div>
        </nav>

        <main>
            <ul class="list-group">
                @foreach ($authors as $author)
                <li class="list-group-item">
                    <p class="h5">{{ $author->name }} {{ $author->surname }}:</p>
                    @foreach ($author->books as $book)
                    <p class="mb-1">{{ $book->title }}</p>
                    @endforeach
                </li>
                @endforeach
            </ul>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>

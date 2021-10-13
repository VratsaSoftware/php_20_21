<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    {{-- <link rel="stylesheet" href=" {{ asset('styles/style.css') }}"> --}}
    @stack('head')

    <title>@yield('title')</title>
</head>
<body>
    <header>
    
    </header>

    <nav>
       <ul>
            <li>
                <a href=" {{ route('landing') }}">Homepage</a>
            </li>
            <li>
                <a href=" <?php echo route('posts') ?>">Posts</a>
            </li>
            <li></li>
       </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <aside>
        @yield('sidebar')
    </aside>

    <footer>
        @stack('foot')
    </footer>
    
</body>
</html>
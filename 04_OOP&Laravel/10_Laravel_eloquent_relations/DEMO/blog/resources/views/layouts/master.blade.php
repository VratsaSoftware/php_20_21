<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
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
            <li>
                <a href=" {{ route('allCategories') }}">Categories</a>
            </li>
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
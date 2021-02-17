<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacksレビュー</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous">
</head>
<body>
    <header class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('top')}}">
                Hacksレビュー
            </a>
        </div>
    </header>

    <main>
        <!-- テンプレート -->
        @yield('content')
    </main>

    <footer class="footer bg-dark">
        <div class="container-fluid">
            <p class="text-white text-center">
                🄫Daiki-Minaguchi All Rights Reserved
            </p>        
        </div>
    </footer>
</body>
</html>
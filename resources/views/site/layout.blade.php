<!DOCTYPE html>
<!-- Compiled and minified CSS -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('style')
    
</head>
<body>

    @yield('conteudo')
    @stack('script')
    

</body>
</html>
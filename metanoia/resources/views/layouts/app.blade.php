<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/app.css">

    <link href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.bubble.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.core.css" rel="stylesheet"/>

    @yield('css')
</head>
<body>
    <div class="container mx-auto px-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>
    
    @yield('js')
</body>
</html>
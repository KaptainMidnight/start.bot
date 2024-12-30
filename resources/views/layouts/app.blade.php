<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Автошкола на Хрустальной 35Б</title>
    <script src="https://telegram.org/js/telegram-web-app.js?56"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="telegram-safe-area">
    @yield('section')

    @stack('scripts')
</body>
</html>

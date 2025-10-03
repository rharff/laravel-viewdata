<!-- resources/views/components/layout.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel App' }}</title>
</head>

<body>
    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>
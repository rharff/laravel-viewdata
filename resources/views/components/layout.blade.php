<!-- resources/views/components/layout.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel App' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow-md p-8">
            {{ $slot }}
        </div>
    </main>

</body>

</html>

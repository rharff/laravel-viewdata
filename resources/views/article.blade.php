<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Blog</title>
</head>
<body>
<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
    
  <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900"> {{ $post['judul'] }} </h2>
    <div class="text-base text-gray-500">
      <a href="#"> {{ $post['author'] }} </a> | 30 September 2025
    </div>
    <p class="my-4 font-light"> {{ $post['body']}}</p>
    <a href="/blog" class="font-medium text-blue-500 hover:underline">Back to blog</a>
  </article>

</x-layout>
</body>
</html>


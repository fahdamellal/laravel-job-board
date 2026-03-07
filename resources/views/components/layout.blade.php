<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board --{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
</head>
<body>
    
    <nav>
        <x-nav-link href="/" :active="request()->is('/')" >Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link  href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </nav>
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
    
    {{ $slot }}
</body>
</html>
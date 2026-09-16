<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Toko Buku Multi-Tenant' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased min-h-screen flex flex-col">
    <!-- Header Publik -->
    <header class="bg-white shadow-sm border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <h1 class="text-xl font-bold text-indigo-600">📚 Toko Buku</h1>
            <nav class="flex items-center gap-4 text-sm font-medium">
                <a href="/" class="hover:text-indigo-600">Beranda</a>
                <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Masuk</a>
            </nav>
        </div>
    </header>

    <!-- Konten Utam Publik -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 py-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t py-4 text-center text-xs text-gray-500">
        &copy; {{ date('Y') }} Platform Toko Buku Multi-Tenant.
    </footer>
</body>
</html>
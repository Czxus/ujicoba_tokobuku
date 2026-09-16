<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Platform Toko Buku</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased min-h-screen flex">
    <!-- Sidebar Admin -->
    <aside class="w-64 bg-red-950 text-white min-h-screen p-4 flex flex-col justify-between">
        <div>
            <div class="font-bold text-lg mb-6 tracking-wide text-red-400">
                ⚙️ Admin Platform
            </div>
            <nav class="space-y-2 text-sm">
                <a href="#" class="block px-3 py-2 rounded bg-red-800 font-medium">Dashboard System</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-red-900 text-red-200">Kelola Toko Buku</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-red-900 text-red-200">Manajemen Pengguna</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-red-900 text-red-200">Laporan Transaksi</a>
            </nav>
        </div>
        <div class="border-t border-red-900 pt-4 text-xs text-red-300">
            Administrator: <span class="font-semibold text-white">{{ Auth::user()->name ?? 'Admin' }}</span>
        </div>
    </aside>

    <!-- Content Area -->
    <main class="flex-1 p-8">
        {{ $slot }}
    </main>
</body>
</html>
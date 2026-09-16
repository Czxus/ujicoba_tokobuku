<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Toko Buku | Tenant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen flex">
    <!-- Sidebar Navigation -->
    <aside class="w-64 bg-slate-900 text-white min-h-screen p-4 flex flex-col justify-between">
        <div>
            <div class="font-bold text-lg mb-6 tracking-wide text-indigo-400">
                📖 Panel Penjual
            </div>
            <nav class="space-y-2 text-sm">
                <a href="#" class="block px-3 py-2 rounded bg-indigo-600 font-medium">Dashboard</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-slate-800 text-slate-300">Katalog Buku</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-slate-800 text-slate-300">Pesanan Masuk</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-slate-800 text-slate-300">Pengemasan & Resi</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-slate-800 text-slate-300">Laporan Penjualan</a>
            </nav>
        </div>
        <div class="border-t border-slate-800 pt-4 text-xs text-slate-400">
            Login sebagai: <span class="font-semibold text-white">{{ Auth::user()->name ?? 'Penjual' }}</span>
        </div>
    </aside>

    <!-- Content Area -->
    <main class="flex-1 p-8">
        {{ $slot }}
    </main>
</body>
</html>
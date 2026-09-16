@props(['title' => 'Belum ada data', 'description' => 'Data yang kamu cari saat ini belum tersedia.'])

<div class="text-center py-12 px-4 border-2 border-dashed border-gray-200 rounded-lg">
    <div class="text-4xl mb-3">📭</div>
    <h3 class="text-sm font-semibold text-gray-900">{{ $title }}</h3>
    <p class="mt-1 text-xs text-gray-500">{{ $description }}</p>
    @if ($slot->isNotEmpty())
        <div class="mt-4">
            {{ $slot }}
        </div>
    @endif
</div>
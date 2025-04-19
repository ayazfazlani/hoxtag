<x-layouts.app.header :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
    <x-bottom-nav />

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons(); // auto-replaces all data-lucide="..." elements
    </script>

</x-layouts.app.header>
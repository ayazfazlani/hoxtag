<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
        {{--
        <x-bottom-nav class="absolute" /> --}}
    </flux:main>


    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons(); // auto-replaces all data-lucide="..." elements
    </script>

</x-layouts.app.sidebar>
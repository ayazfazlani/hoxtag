<div
  class="fixed bottom-0 left-0 w-full bg-white dark:bg-zinc-900 border-t border-gray-200 dark:border-gray-700 shadow-sm z-50">
  <div class="flex justify-around text-sm text-gray-600 dark:text-gray-300 py-2">
    <a href="{{ route('dashboard') }}" wire:navigate
      class="flex flex-col items-center gap-1 hover:text-blue-500 dark:hover:text-blue-400 {{ request()->routeIs('dashboard') ? 'text-blue-500 dark:text-blue-400' : '' }}">
      <i data-lucide="home" class="w-5 h-5"></i>
      Home
    </a>
    <a href="/" wire:navigate
      class="flex flex-col items-center gap-1 hover:text-blue-500 dark:hover:text-blue-400 {{ request()->routeIs('notifications') ? 'text-blue-500 dark:text-blue-400' : '' }}">
      <i data-lucide="bell" class="w-5 h-5" wire:navigate></i>
      Alerts
    </a>
    <a href="{{ route('settings.profile') }}" wire:navigate
      class="flex flex-col items-center gap-1 hover:text-blue-500 dark:hover:text-blue-400 {{ request()->routeIs('settings.profile') ? 'text-blue-500 dark:text-blue-400' : '' }}">
      <i data-lucide="user" class="w-5 h-5"></i>
      Profile
    </a>
  </div>
</div>
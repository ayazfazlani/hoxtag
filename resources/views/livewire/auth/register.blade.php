<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')"
        :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Your name</span>
            <flux:icon.user class="h-5 w-5 opacity-50" />
            <input type="text" class="input w-full rounded-md input-lg" wire:model="name" placeholder="John Doe"
                required />
        </label>
        <!-- Name -->

        <!-- Email Address -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Your email</span>
            <flux:icon.envelope class="h-5 w-5 opacity-50" />
            <input type="email" class="input w-full rounded-md input-lg" wire:model="email" placeholder="mail@site.com"
                required />

        </label>
        <!-- phone -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Your phone</span>
            <flux:icon.phone class="h-5 w-5 opacity-50" />
            <input type="text" class="input w-full rounded-md input-lg" wire:model="phone" placeholder="+123456789"
                required />
        </label>
        <!-- phone -->


        <!-- Password -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Your password</span>
            <flux:icon.lock-closed class="h-5 w-5 opacity-50" />
            <input type="password" class="input w-full rounded-md input-lg" wire:model="password" placeholder="********"
                required />
        </label>

        <!-- Confirm Password -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Confirm password</span>
            <flux:icon.lock-closed class="h-5 w-5 opacity-50" />
            <input type="password" class="input w-full rounded-md input-lg" wire:model="password_confirmation"
                placeholder="********" required />
        </label>

        <!-- referal code -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Referal code</span>
            <flux:icon.identification class="h-5 w-5 opacity-50" />
            <input type="text" class="input w-full rounded-md input-lg" wire:model="referral_code"
                placeholder="123456789" />
        </label>
        <!-- referal code -->

    </form>
    {{-- button --}}
    <div class="flex items-center justify-end">
        <button type="submit" class="btn btn-primary rounded-md w-full">
            {{ __('Create account') }}
        </button>
    </div>
    {{-- button --}}


    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <a href="{{ route('login') }}" class="link" wire:navigate>{{ __('Log in') }}</a>
    </div>
</div>
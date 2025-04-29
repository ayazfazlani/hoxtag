<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);

    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}; ?>

<div class="flex flex-col  gap-6">
    <x-auth-header :title="__('Log in to your account')"
        :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit.prevent="login" class="flex flex-col gap-6">
        <!-- Email -->
        <label class="floating-label  rounded-md w-full input-bordered flex items-center gap-2">
            <span>Your email</span>
            <flux:icon.envelope class="h-5 w-5 opacity-50" />
            <input type="email" class="input w-full rounded-md input-lg" wire:model="email" placeholder="mail@site.com"
                required />

        </label>



        <!-- Password -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Your password</span>
            <flux:icon.lock-closed class="h-5 w-5 opacity-50" />
            <input type="password" class="input rounded-md w-full input-lg" wire:model="password" placeholder="password"
                required />
        </label>
        <!-- Forgot Password -->
        @if (Route::has('password.request'))
        <a class="text-sm text-right link link-primary self-end" href="{{ route('password.request') }}" wire:navigate>
            {{ __('Forgot your password?') }}
        </a>
        @endif

        <!-- Remember Me -->
        <label className="label" class="text-pimary">
            <input type="checkbox" class="checkbox size-4 bg-base-200" wire:model="remember" />
            Remember me
        </label>

        <!-- Submit Button -->
        <div class="flex items-center justify-end">
            <button type="submit" class="btn btn-primary rounded-md w-full">
                {{ __('Log in') }}
            </button>
        </div>
    </form>


    @if (Route::has('register'))
    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Don\'t have an account?') }}
        <a href="{{ route('register') }}" class="link" wire:navigate>{{ __('Sign up') }}</a>
    </div>
    @endif
</div>
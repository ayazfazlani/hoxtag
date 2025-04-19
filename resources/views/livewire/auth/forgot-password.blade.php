<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        Password::sendResetLink($this->only('email'));

        session()->flash('status', __('A reset link will be sent if the account exists.'));
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Forgot password')"
        :description="__('Enter your email to receive a password reset link')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <label class="floating-label validator rounded-md w-full input-bordered flex items-center gap-2">
            <span>Your email</span>
            <flux:icon.envelope class="h-5 w-5 opacity-50" />
            <input type="email" class="input w-full rounded-md input-lg" wire:model="email" placeholder="mail@site.com"
                required />

        </label>

        <button type="submit"
            class="btn btn-primary btn-lg w-full rounded-md text-base-100 transition-colors duration-200 hover:bg-primary-focus">
            {{ __('Send password reset link') }}
        </button>
        <!-- Submit Button -->
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
        {{ __('Or, return to') }}
        <a href="{{ route('login') }}" class="link" wire:navigate>{{ __('log in') }}</a>
    </div>
</div>
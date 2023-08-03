<div>
    Your password is {{ $password }}
    <div>
        <input
            type="password"
            placeholder="Your password"
            wire:model.live="password"
            x-ref="password_field"
        >
        <div>
            @error('password')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div x-data="formPassword">
        <button
            type="button"
            title="Show password"
            x-on:click="toggleInputType()"
        >
            Show Password
        </button>
    </div>
</div>

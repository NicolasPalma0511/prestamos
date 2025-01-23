<x-guest-layout>
    <!-- Formulario -->
    <form method="POST" action="{{ route('password.store') }}" 
          style="background-color: #E5E7EB; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 24rem; margin: 0 auto;">
        @csrf

        <!-- Token de restablecimiento de contraseña -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Correo electrónico -->
        <div>
            <label for="email" style="color: #1E3A8A; font-weight: bold;">{{ __('Correo electrónico') }}</label>
            <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username"
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('email')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Contraseña -->
        <div style="margin-top: 1rem;">
            <label for="password" style="color: #1E3A8A; font-weight: bold;">{{ __('Contraseña') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('password')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirmar contraseña -->
        <div style="margin-top: 1rem;">
            <label for="password_confirmation" style="color: #1E3A8A; font-weight: bold;">{{ __('Confirmar contraseña') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('password_confirmation')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón de restablecer contraseña -->
        <div style="margin-top: 1.5rem; display: flex; justify-content: flex-end;">
            <button type="submit" 
                    style="background-color: #1E3A8A; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                {{ __('Restablecer contraseña') }}
            </button>
        </div>
    </form>
</x-guest-layout>

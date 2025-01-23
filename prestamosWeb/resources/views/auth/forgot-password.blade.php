<x-guest-layout>
    <!-- Descripción del Formulario -->
    <div style="font-size: 0.875rem; color: #4B5563; margin-bottom: 1rem; text-align: center;">
        {{ __('¿Olvidaste tu contraseña? No te preocupes. Ingresa tu correo electrónico y te enviaremos un enlace para que restablezcas tu contraseña.') }}
    </div>

    <!-- Mensaje de Estado de Sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Formulario -->
    <form method="POST" action="{{ route('password.email') }}" 
          style="background-color: #E5E7EB; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 24rem; margin: 0 auto;">
        @csrf

        <!-- Dirección de Correo Electrónico -->
        <div>
            <label for="email" style="color: #1E3A8A; font-weight: bold;">{{ __('Correo electrónico') }}</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('email')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón de Envío -->
        <div style="margin-top: 1.5rem; display: flex; justify-content: flex-end;">
            <button type="submit" 
                    style="background-color: #1E3A8A; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                {{ __('Enviar enlace de restablecimiento') }}
            </button>
        </div>
    </form>
</x-guest-layout>

<x-guest-layout>
    <!-- Descripción del Formulario -->
    <div style="font-size: 0.875rem; color: #4B5563; margin-bottom: 1rem; text-align: center;">
        {{ __('Esta es un área segura de la aplicación. Por favor confirma tu contraseña antes de continuar.') }}
    </div>

    <!-- Formulario -->
    <form method="POST" action="{{ route('password.confirm') }}" 
          style="background-color: #E5E7EB; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 24rem; margin: 0 auto;">
        @csrf

        <!-- Contraseña -->
        <div>
            <label for="password" style="color: #1E3A8A; font-weight: bold;">{{ __('Contraseña') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('password')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón de Confirmar -->
        <div style="margin-top: 1.5rem; display: flex; justify-content: flex-end;">
            <button type="submit" 
                    style="background-color: #1E3A8A; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                {{ __('Confirmar') }}
            </button>
        </div>
    </form>
</x-guest-layout>

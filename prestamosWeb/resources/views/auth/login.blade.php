<x-guest-layout>
    <!-- Título del Formulario -->
    <h2 style="font-size: 1.875rem; font-weight: bold; color: #1E3A8A; text-align: center; margin-bottom: 1.5rem;">
        {{ __('Cuenta Personal') }}
    </h2>

    <form method="POST" action="{{ route('login') }}" 
          style="background-color: #E5E7EB; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 24rem; margin: 0 auto;">
        @csrf
        <!-- Email Address -->
        <div>
            <label for="email" style="color: #1E3A8A; font-weight: bold;">{{ __('Correo electrónico') }}</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
        </div>

        <!-- Password -->
        <div style="margin-top: 1rem;">
            <label for="password" style="color: #1E3A8A; font-weight: bold;">{{ __('Contraseña') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" 
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
        </div>

        <!-- Forgot Password -->
        <div style="text-align: right; margin-top: 0.5rem;">
            <a href="{{ route('password.request') }}" style="font-size: 0.875rem; color: #2563EB; text-decoration: underline;">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
        </div>

        <!-- Botones -->
        <div style="margin-top: 1.5rem; display: flex; flex-direction: column; gap: 1rem;">
            <button type="submit" 
                    style="background-color: #1E3A8A; color: white; text-align: center; padding: 0.5rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                {{ __('Iniciar sesión') }}
            </button>
            <a href="{{ route('register') }}" 
               style="text-align: center; color: #1E3A8A; border: 1px solid #1E3A8A; padding: 0.5rem; border-radius: 0.375rem; text-decoration: none;">
                {{ __('Registrarse') }}
            </a>
        </div>
    </form>
</x-guest-layout>

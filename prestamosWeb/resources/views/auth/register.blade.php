<x-guest-layout>
    <!-- Título del Formulario -->
    <h2 style="font-size: 1.875rem; font-weight: bold; color: #1E3A8A; text-align: center; margin-bottom: 1.5rem;">
        {{ __('Registro') }}
    </h2>

    <form method="POST" action="{{ route('register') }}" 
          style="background-color: #E5E7EB; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 24rem; margin: 0 auto;">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" style="color: #1E3A8A; font-weight: bold;">{{ __('Nombre') }}</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('name')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div style="margin-top: 1rem;">
            <label for="email" style="color: #1E3A8A; font-weight: bold;">{{ __('Correo electrónico') }}</label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" 
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('email')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div style="margin-top: 1rem;">
            <label for="password" style="color: #1E3A8A; font-weight: bold;">{{ __('Contraseña') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" 
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('password')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div style="margin-top: 1rem;">
            <label for="password_confirmation" style="color: #1E3A8A; font-weight: bold;">{{ __('Confirmar contraseña') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" 
                   style="display: block; margin-top: 0.25rem; width: 100%; padding: 0.5rem; border: 1px solid #D1D5DB; border-radius: 0.375rem;" />
            @error('password_confirmation')
            <span style="color: #EF4444; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botones -->
        <div style="margin-top: 1.5rem; display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('login') }}" 
               style="color: #2563EB; font-size: 0.875rem; text-decoration: underline;">
                {{ __('¿Ya estás registrado?') }}
            </a>
            <button type="submit" 
                    style="background-color: #1E3A8A; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                {{ __('Registrar') }}
            </button>
        </div>
    </form>
</x-guest-layout>

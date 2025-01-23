<x-guest-layout>
    <!-- Descripción del mensaje de verificación -->
    <div class="mb-4 text-sm text-gray-600" style="font-size: 1rem; color: #4B5563; text-align: center;">
        {{ __('¡Gracias por registrarte! Antes de comenzar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que te enviamos? Si no recibiste el correo, con gusto te enviaremos otro.') }}
    </div>

    <!-- Mensaje de estado de enlace de verificación enviado -->
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600" style="font-size: 1rem; color: #10B981; text-align: center;">
            {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionaste durante el registro.') }}
        </div>
    @endif

    <!-- Botones de envío y cierre de sesión -->
    <div class="mt-4 flex items-center justify-between" style="display: flex; justify-content: space-between; gap: 1rem;">
        <!-- Formulario para reenvío de correo de verificación -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div style="text-align: center;">
                <x-primary-button style="background-color: #1E3A8A; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                    {{ __('Reenviar correo de verificación') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Formulario de cierre de sesión -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    style="font-size: 1rem; text-decoration: underline; padding: 0.5rem 1rem; cursor: pointer;">
                {{ __('Cerrar sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>

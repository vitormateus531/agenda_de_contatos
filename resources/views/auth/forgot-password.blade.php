<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!--<x-jet-authentication-card-logo />-->
            <i class="fa fa-address-book" aria-hidden="true" style="font-size:100px;color:#9D65EC"></i>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}
        </div>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="flex items-center justify-end mt-6">
                <x-jet-button>
                    {{ __('Enviar link de redefinição de senha') }}
                </x-jet-button>
            </div>
        </form>
        <div class="flex items-center justify-end mt-2">
            <a href="{{route('login')}}">
                {{ __('Voltar') }}
            </a>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
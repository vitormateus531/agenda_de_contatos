<nav x-data="{ open: false }" class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full" style="margin-top:0">
    <div class="mb-2 sm:mb-0 inner">

        <a href="{{ route('dashboard') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Agenda de
            Contatos</a><br>
        <a href="{{ route('profile.show') }}"  title="Editar Perfil"><span class="text-xs text-grey-dark">{{ Auth::user()->name }}</span></a>

    </div>

    <div class="sm:mb-0 self-center">
        <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
        <a href="{{route('dashboard')}}" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Home</a>
        <a href="{{route('edit-contact')}}" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Editar</a>
        <!-- </div> -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form').submit();" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Sair</a>

        <form method="POST" id="form" action="{{ route('logout') }}">
            @csrf
        </form>
    </div>
</nav>
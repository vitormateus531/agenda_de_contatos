<div class="overflow-hidden sm:rounded-lg">
    <!--<x-jet-welcome />--->
    <div class="flex justify-center p-4 px-3 py-10">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                    Contatos
                </div>
                <div class="flex items-center bg-gray-200 rounded-md search">
                    <div class="pl-2">
                        <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                        </svg>
                    </div>
                    <input wire:model="search" class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2" type="text" placeholder="Digite um nome...">
                </div>
                <br>
                <a href="{{route('insert-contact')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none">
                    Novo Contato
                </a>
                <div class="py-3 text-sm">

                    @foreach($listContact as $item)
                    <div class="flex justify-start text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        <span class="bg-green-400 h-2 w-2 m-2 rounded-full"></span>
                        <div class="flex-grow font-medium px-2">{{$item->nome}}</div>
                        <div class="text-sm font-normal text-gray-500 tracking-wide">
                            @if($item->telefone_fixo != '')
                            <p>{{ $item-> telefone_fixo}} - <b>Telefone fixo</b></p>
                            @endif
                            <p>{{ $item-> celular}} - <b>Celular</b></p>
                            <p>{{ $item-> email}} - <b>Email</b></p>
                            @if($item-> rede_social != '')
                            <p>{{$item-> rede_social}} - <b>Rede social</b></p>
                            @endif
                            <p><a style="color:green" href="{{route('edit-one-contact',['id' => $item->id ])}}">Alterar</a> <a style="color:red;cursor:pointer" wire:click="delete({{ $item->id }})">Excluir</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="block bg-white-200 text-sm text-right py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                    {{$listContact -> links()}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12" style="margin-top:-160px;background:transparent">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-8 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-relaxed">Novo Contato</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Formulário de inserção de novo contato.</p>
                    </div>
                </div>
                <form>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label class="leading-loose">Nome*</label>
                                <input type="text" name="nome" wire:model="nome" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Nome">
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Email*</label>
                                <input type="text" name="email" wire:model="email" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Email">
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Telefone fixo</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="text" name="telefone_fixo" wire:model="telefone_fixo" class="pr-4 pl-10 py-2 border fone focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Fixo">
                                        <div class="absolute left-3 top-2">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Celular*</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="text" name="celular" wire:model="celular" class="pr-4 pl-10 py-2 border fone focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Celular">
                                        <div class="absolute left-3 top-2">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Link rede social</label>
                                <input type="text" name="rede_social" wire:model="rede_social" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Link">
                            </div>
                        </div>
                        <input type="hidden" wire:model="id_user" name="id_user" value="{{ Auth::user()->id }}" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{route('dashboard')}}" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg> Cancelar
                            </a>
                            <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none" wire:click.prevent="store()">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
            @if(session()->has('message'))
            <p style="text-align:center;color:green;margin-top:10px"><b>{{session('message')}}</b></p>
            @endif
        </div>
    </div>
</div>
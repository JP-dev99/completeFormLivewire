<div>
    <div class="mt-10 text-2xl text-center text-gray-100 sm:text-4xl">
        Preencha o formulário abaixo
    </div>

        <form wire:submit.prevent="submitForm" class="flex justify-center">

            <div class="flex flex-col gap-4 sm:mt-6 sm:p-4 sm:border-2 sm:border-gray-300 sm:rounded-md sm:m-10">

                @if ('success')
                    <div class="flex w-full overflow-hidden bg-green-200 rounded-lg shadow-2xl">
                        <span class="w-full font-semibold text-center text-green-600">{{ $success }}</span>
                    </div>
                @endif

                <div class="flex flex-col">
                    <label for="name" class="mb-2 text-white sm:text-base">Nome:</label>
                    <input id="name" wire:model="name" type="text" placeholder="Digite seu nome aqui"
                        class="border-2 border-gray-300 px-3 py-2 w-38 rounded-lg shadow-sm h-10
                @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="city" class="mb-2 text-white">Cidade:</label>
                    <input id="city" wire:model.defer="city" type="text" placeholder="Digite o nome da sua cidade aqui"
                        class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm @error('city') border-red-500 @enderror">
                    @error('city')
                        <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="flex flex-col">
                        <label for="marital_status" class="mb-2 text-white">Estado civil:</label>
                        <select name="marital_status" id="marital_status" wire:model.defer="marital_status"
                            class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('marital_status') border-red-500 @enderror">
                            <option value="single">Solteiro</option>
                            <option value="married-in-civil">Casado no Civil</option>
                            <option value="widower">Viúvo</option>
                            <option value="divorced">Divorciado</option>
                        </select>
                        @error('marital_status')
                            <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="sex" class="mb-2 text-white">Sexo:</label>
                        <select name="sex" id="sex" wire:model.defer="sex"
                            class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('sex') border-red-500 @enderror"
                            requaire>
                            <option value="male">Feminino</option>
                            <option value="men">Masculino</option>
                        </select>
                        @error('sex')
                            <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="age" class="mb-2 text-white">Idade:</label>
                        <input type="number" id="age" wire:model.defer="age" name="age" placeholder="Preencha sua idade"
                            min="10" max="100"
                            class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                @error('age') border-red-500 @enderror">

                        @error('age')
                            <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="attends_some_cell" class="mb-2 text-white">Frequenta alguma célula?</label>
                        <select name="attends_some_cell" id="attends_some_cell" wire:model.defer="attends_some_cell"
                            class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                @error('attends_some_cell') border-red-500 @enderror">
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                        @error('attends_some_cell')
                            <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col">
                    <label for="leader_cell" class="mb-2 text-white">Líder da célula:</label>
                    <input id="leader_cell" wire:model.defer="leader_cell" type="text"
                        placeholder="Digite o nome do líder da célula"
                        class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                @error('leader_cell') border-red-500 @enderror">
                    @error('leader_cell')
                        <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 ">
                    <div class="flex flex-col">
                        <label for="baptized" class="mb-2 text-white">Batizado em alguma igreja evangélica?</label>
                        <select name="baptized" id="baptized" wire:model.defer="baptized"
                            class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('baptized') border-red-500 @enderror">
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                        @error('baptized')
                            <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="is_away" class="mb-2 text-white">Está afastado do evangelho?</label>
                        <select name="baptized" id="is_away" wire:model.defer="is_away"
                            class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('is_away') border-red-500 @enderror">
                            <option value="no">Não</option>
                            <option value="yes">Sim</option>
                        </select>
                        @error('is_away')
                            <p class="mt-1 text-xs text-red-500 "> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-center mt-4">
                    <button
                        class="w-full h-12 col-span-2 text-white bg-green-600 border border-green-600 rounded-lg hover:bg-green-500 hover:border-green-500 justify-items-center"
                        type="submit">Enviar</button>
                </div>
            </div>
        </form>

</div>

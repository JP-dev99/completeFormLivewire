<div>
    <div class="text-center text-gray-100 mt-16 font-mono font-extrabold">
        Preencha o formulário abaixo:
    </div>

    <form  wire:submit.prevent="submitForm" class="flex justify-center">

            <div class="flex flex-col">
                <label for="name" class="text-white mb-2">Nome:</label>
                <input id="name" wire:model="name" type="text" placeholder="Digite seu nome aqui" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                @error('name') border-red-500 @enderror">

                @error('name')
                    <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="city" class="text-white mb-2">Cidade:</label>
                <input id="city" wire:model.defer="city" type="text" placeholder="Digite o nome da sua cidade aqui" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm @error('city') border-red-500 @enderror">
                @error('city')
                    <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                @enderror
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="marital_status" class="text-white mb-2">Estado civil:</label>
                    <select id="marital_status" wire:model.defer="marital_status" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('marital_status') border-red-500 @enderror" >
                        <option value="single">Solteiro</option>
                        <option value="married-in-civil" checked>Casado no Civil</option>
                        <option value="widower">Viúvo</option>
                    </select>
                    @error('marital_status')
                        <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="sex" class="text-white mb-2">Sexo:</label>
                    <select id="sex" wire:model.defer="sex" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('sex') border-red-500 @enderror" requaire>
                        <option value="male">Feminino</option>
                        <option value="men">Masculino</option>
                    </select>
                    @error('sex')
                    <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                    @enderror
                </div>

            <div class="flex flex-col">
                <label for="age" class="text-white mb-2">Idade:</label>
                <input type="number" id="age" wire:model.defer="age" name="age" placeholder="Preencha sua idade"
                min="10" max="100" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                @error('age') border-red-500 @enderror" >

                @error('age')
                <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="attends_some_cell" class="text-white mb-2">Frequenta alguma célula?</label>
                <select id="attends_some_cell" wire:model.defer="attends_some_cell" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                @error('attends_some_cell') border-red-500 @enderror" >
                    <option value="no">Não</option>
                    <option value="yes">Sim</option>
                </select>
                @error('attends_some_cell')
                    <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                @enderror
            </div>
        </div>

            <div class="flex flex-col">
                <label for="leader_cell" class="text-white mb-2">Líder da célula:</label>
                <input id="leader_cell" wire:model.defer="leader_cell" type="text" placeholder="Digite o nome do líder da célula"
                class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                @error('leader_cell') border-red-500 @enderror" >
                @error('leader_cell')
                    <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="baptized" class="text-white mb-2">É batizado em alguma igreja evangélica?</label>
                    <select id="baptized" wire:model.defer="baptized" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('baptized') border-red-500 @enderror" >
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                    @error('baptized')
                        <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="is_away" class="text-white mb-2">Está afastado do evangelho?</label>
                    <select id="is_away" wire:model.defer="is_away" class="border-2 border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm
                    @error('is_away') border-red-500 @enderror" >
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                    @error('is_away')
                        <p class="text-xs text-red-500 mt-1 "> {{$message}} </p>
                    @enderror
                </div>
            </div>
            <div class="flex justify-center mt-4">
                <button class="bg-green-500 text-white border border-green-500 rounded-lg col-span-2 h-12 w-full justify-items-center" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>


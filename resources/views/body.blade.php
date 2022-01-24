<body>
    <div class="text-center text-gray-100 mt-16 font-mono font-extrabold">
        Preencha o formulário abaixo:
    </div>

    <form action="#" method:"post" class="flex justify-center">

        <div class="flex flex-col m-10 gap-4 p-4 border-2 mt-6 rounded-md border-gray-300 w-6/12">

            <div class="flex flex-col">
                <label for="name" class="text-white mb-2">Nome:</label>
                <input id="name" type="text" required class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm">
            </div>

            <div class="flex flex-col">
                <label for="city" class="text-white mb-2">Cidade:</label>
                <input id="city" type="text" required class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="marital-status" class="text-white mb-2">Estado civil:</label>
                    <select id="marital-status" class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm" require>
                      <option value="single">Solteiro</option>
                      <option value="married-in-civil">Casado no Civil</option>
                      <option value="widower">Viúvo</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="sex" class="text-white mb-2">Sexo:</label>

                    <select id="sex" require class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm">
                      <option value="male">Feminino</option>
                      <option value="men">Masculino</option>
                    </select>
                </div>

            <div class="flex flex-col">
                <label for="age" class="text-white mb-2">Idade:</label>
                <input type="number" id="age" name="age"
                min="10" max="100" class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm">
            </div>

            <div class="flex flex-col">
                <label for="attends-some-cell" class="text-white mb-2">Frequenta alguma célula?</label>

                <select id="attends-some-cell" class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm" require>
                    <option value="no">Não</option>
                    <option value="yes">Sim</option>
                </select>
            </div>
        </div>
            <div class="flex flex-col">
                <label for="leader-cell" class="text-white mb-2">Líder da célula:</label>
                <input id="leader-cell" type="text" class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="baptized" class="text-white mb-2">É batizado em alguma igreja envangélica?</label>

                    <select id="baptized" class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm" require>
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label for="is-away" class="text-white mb-2">Está afastado do envangelho?</label>

                    <select id="is-away" class="border border-gray-300 px-3 py-2 w-38 h-10 rounded-lg shadow-sm" require>
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-center mt-4">
                <button class="bg-green-500 text-white border border-green-500 rounded-lg col-span-2 h-12 w-full justify-items-center">Enviar</button>
            </div>
        </div>
    </form>
</body>




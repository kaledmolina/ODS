<div>
    <div class="bg-gray-100 py-10">
        <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Organizaciones</h2>

        <div class="max-w-7xl mx-auto">
            <form
                wire:submit.prevent='leerdatosform'>
                <div class="md:grid md:grid-cols-3 gap-5">
                    <div class="mb-5">
                        <label
                            class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                            for="termino">Nombre de la organización
                        </label>
                        <input
                            id="termino"
                            type="text"
                            wire:model="termino"
                            placeholder="Buscar por organización: ej. Transdigitalcoop"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        />
                    </div>

                    <div class="mb-5">
                        <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Tipo Organizacion</label>
                        <select  wire:model="tipo_organizacion"  class="border-gray-300 p-2 w-full">
                            <option value="" class="select-none">--Seleccione--</option>


                            <option>Cooperativa</option>
                            <option>Pre-coperativa</option>
                            <option>Fondo de empleados</option>
                            <option>Asociación mutual</option>
                            <option>Cooperativa de trabajo asociado</option>
                            <option>otra.</option>

                        </select>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Sector economico</label>
                        <select wire:model="sector_econmico" class="border-gray-300 p-2 w-full">
                            <option value="" class="select-none" >-- Seleccione --</option>

                            <option >Agricultura</option>
                                                <option>Sistema financiero</option>
                                                <option>Servicios de comunicaciones</option>
                                                <option>Almacenamiento y transporte</option>
                                                <option>Comercio y restaurantes</option>
                                                <option>Minas y canteras</option>
                                                <option>Agua y energía</option>
                                                <option>Construcción</option>
                                                <option>Manufacturas</option>

                        </select>
                    </div>
                </div>

                <div class="flex justify-end">
                    <input
                    type="submit"
                    class="bg-indigo-500 bg-gradient-to-r from-emerald-400 to-cyan-400 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                    />

                </div>
            </form>
        </div>
    </div>

</div>

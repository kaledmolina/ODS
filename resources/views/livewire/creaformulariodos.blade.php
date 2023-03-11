<div>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Segunda seccion') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $pages[$currentPage]['heading'] }}</h3>
                            <p class="mt-1 text-sm text-gray-600">{{ $pages[$currentPage]['subheading'] }}</p>
                        </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            @if ($errors->isNotEmpty())
                                <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                    <strong class="font-bold">Oops!</strong>
                                    <span class="block sm:inline">There are some errors with your submission.</span>
                                </div>
                            @endif
                            @if ($success)
                                <div class="text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                    <span class="block sm:inline">{{ $success }}</span>
                                    <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                </div>
                            @endif
                            <form wire:submit.prevent="submit">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        @if ($currentPage === 1)
                                            <div class="flex flex-col">
                                                <div class="w-full py-2">
                                                    <label for="asociad_h_org" class="block text-sm font-medium text-gray-700">¿Cuál es la cantidad de asociados hombres en la organización actualmente?</label>
                                                    <input wire:model.lazy="asociad_h_org"  type="number" name="asociad_h_org" id="asociad_h_org" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_h_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="asociad_f_org" class="block text-sm font-medium text-gray-700">¿Podrías proporcionar información sobre la cantidad de asociados mujeres que forman parte de la organización en la actualidad?</label>
                                                    <input wire:model.lazy="asociad_f_org" type="number"  name="asociad_f_org" id="asociad_f_org" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_f_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="asociad_29_55" class="block text-sm font-medium text-gray-700">¿Cuál es el número de asociados que se encuentran en el rango de edades de 29 a 55 años?</label>
                                                    <input wire:model.lazy="asociad_29_55" type="number" name="asociad_29_55" id="asociad_29_55" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_29_55') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="asociad_56" class="block text-sm font-medium text-gray-700">¿Cuál es el número de asociados que tienen más de 56 años?</label>
                                                    <input wire:model.lazy="asociad_56" type="number" name="asociad_56" id="asociad_56" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_56') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="asociad_disc" class="block text-sm font-medium text-gray-700">¿Cuál es el número de asociados que tienen alguna discapacidad?</label>
                                                    <input wire:model.lazy="asociad_disc" type="number" name="asociad_disc" id="asociad_disc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_disc') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>




                                            </div>
                                        @elseif ($currentPage === 2)
                                        <div class="flex flex-col ">
                                            <div class="w-full py-2">
                                                <label for="asociad_rural" class="block text-sm font-medium text-gray-700">¿Cuál es el número de asociados que viven en zonas rurales?</label>
                                                <input wire:model.lazy="asociad_rural" type="number" name="asociad_rural" id="asociad_rural" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_rural') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                                <div class="w-full py-2">
                                                    <label for="asociad_urban" class="block text-sm font-medium text-gray-700">¿Cuál es el número de asociados que viven en zonas urbanas?</label>
                                                    <input wire:model.lazy="asociad_urban" type="number" name="asociad_urban" id="asociad_urban" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_urban') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="asociadmen_1slm" class="block text-sm font-medium text-gray-700">¿Cuántos asociados ganan menos de 1 SMLVM?</label>
                                                    <input wire:model.lazy="asociadmen_1slm" type="number" name="asociadmen_1slm" id="asociadmen_1slm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociadmen_1slm') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="asociad_1slm2" class="block text-sm font-medium text-gray-700">¿Cuántos asociados ganan entre 1 Y 2 SMLVM?</label>
                                                    <input wire:model.lazy="asociad_1slm2" type="number" name="asociad_1slm2" id="asociad_1slm2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_1slm2') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="asociad_2slm3" class="block text-sm font-medium text-gray-700">¿Cuántos asociados ganan entre 2 Y 3 SMLVM?</label>
                                                    <input wire:model.lazy="asociad_2slm3" type="number" name="asociad_2slm3" id="asociad_2slm3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_2slm3') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>



                                        @elseif ($currentPage === 3)
                                        <div class="flex flex-col ">
                                                <div class="w-full py-2">
                                                    <label for="asociad_slm4" class="block text-sm font-medium text-gray-700">¿Cuántos asociados ganan mas de 4 SMLVM?</label>
                                                    <input wire:model.lazy="asociad_slm4" type="number" name="asociad_slm4" id="asociad_slm4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_slm4') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="w-full py-2">
                                                    <label for="asociad_segur" class="block text-sm font-medium text-gray-700">¿Cuál es el número de asociados que cuentan con afiliación al servicios de salud?</label>
                                                    <input wire:model.lazy="asociad_segur" type="number" name="asociad_segur" id="asociad_segur" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_segur') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="w-full py-2">
                                                    <label for="asociad_segurpen" class="block text-sm font-medium text-gray-700">¿Cuántos asociados están afiliados a la seguridad social para recibir una pensión?</label>
                                                    <input wire:model.lazy="asociad_segurpen" type="number" name="asociad_segurpen" id="asociad_segurpen" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_segurpen') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="w-full py-2">
                                                    <label for="asociad_segurpenarl" class="block text-sm font-medium text-gray-700">¿Cuántos asociados tienen afiliación a seguridad social-ARL?</label>
                                                    <input wire:model.lazy="asociad_segurpenarl" type="number" name="asociad_segurpenarl" id="asociad_segurpenarl" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    @error('asociad_segurpenarl') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>



                                                @elseif ($currentPage === 4)
                                                <div class="flex flex-col ">

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask1asosiativa" class="block text-sm font-medium text-gray-700">La convocatoria a los asociados para participar de las actividades y del proceso organizativo garantiza mayoría cualificada</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask1asosiativa" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" id="ask1asosiativa" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask1asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask2asosiativa" class="block text-sm font-medium text-gray-700">Los acuerdos para la toma de decisiones son claros y se aplican</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask2asosiativa" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" id="ask2asosiativa" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask2asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask3asosiativa" class="block text-sm font-medium text-gray-700">Realiza algún tipo de evaluación de la experiencia asociativa de manera periódica</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask3asosiativa" id="ask3asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask3asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask4asosiativa" class="block text-sm font-medium text-gray-700">Los comités y consejos definidos en los estatutos funcionan adecuadamente; se reunen, toman decisiones acorde a su función</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask4asosiativa" id="ask4asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask4asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask5asosiativa" class="block text-sm font-medium text-gray-700">Se promueve relación más allá de la comercial con los asociados</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask5asosiativa" id="ask5asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask5asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask6asosiativa" class="block text-sm font-medium text-gray-700">Se generan oportunidad para ocupar cargos directivos a mujeres, jóvenes y otros grupos poblacionales específicos</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask6asosiativa" id="ask6asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask6asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask7asosiativa" class="block text-sm font-medium text-gray-700">Se generan planes de renovación de liderazgos</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask7asosiativa" id="ask7asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask7asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask8asosiativa" class="block text-sm font-medium text-gray-700">Desarrollan planes de formación en asociatividad, trabajo en red, politicas públicas, participación	</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask8asosiativa" id="ask8asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask8asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask9asosiativa" class="block text-sm font-medium text-gray-700">Participan de dinámicas de red, integración en su territorio</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask9asosiativa" id="ask9asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask9asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask10asosiativa" class="block text-sm font-medium text-gray-700">La organizacion participa en espacios ciudadanos convocados por las instituciones	</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask10asosiativa" id="ask11asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask10asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask11asosiativa" class="block text-sm font-medium text-gray-700">RSe relacionan y mantiene proyectos comunes con organizaciones externas; públicas, privadas, del tercer sector</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask11asosiativa" id="ask11asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask11asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask12asosiativa" class="block text-sm font-medium text-gray-700">Participa de programas de capacitación o gestión en emprendimiento, comercialización, administrativos</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask12asosiativa" id="ask12asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask12asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask13asosiativa" class="block text-sm font-medium text-gray-700">Participa de espacios locales de gestión del territorio como planes de desarrollo, POT, presupuesto participativo, entre otros</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask13asosiativa" id="ask13asosiativa"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask13asosiativa') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    @elseif ($currentPage === 5)
                                                <div class="flex flex-col ">

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask1calidad" class="block text-sm font-medium text-gray-700">La actividad de la organización genera empleos directos</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask1calidad" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" id="ask1calidad" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask1calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask1calidad" class="block text-sm font-medium text-gray-700">Implementa contratación laboral para los empleados cumpliendo todos los requisitos legales</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask2calidad" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" id="ask2calidad" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask2calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask3calidad" class="block text-sm font-medium text-gray-700">Las actividades y estrategias de la organización le permite a sus asociados y familias generar ingresos permanentes</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask3calidad" id="ask3calidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask3calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask4calidad" class="block text-sm font-medium text-gray-700">La generación de ingresos le permite a los asociados vincularse a seguridad social</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask4calidad" id="ask4calidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask4calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask5calidad" class="block text-sm font-medium text-gray-700">Desarrollan políticas de inclusión de mujeres, jóvenes a las actividades de generación de ingresos</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask5calidad" id="ask5calidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask5calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask6calidad" class="block text-sm font-medium text-gray-700">Evalua el impacto en la calidad de vida de los asociados derivado de la participación en las actividades económicas de la organización</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask6calidad" id="ask6calidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask6calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask7calidad" class="block text-sm font-medium text-gray-700">La actividad económica de la organización permite la vinculación de todos los asociados para la generación de ingresos</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask7calidad" id="ask7calidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask7calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask8calidad" class="block text-sm font-medium text-gray-700">La actividad de generación de ingresos le permite a los asociados tenerr capacidades productivas propias</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask8calidad" id="ask8calidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask8calidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>



                                                    @elseif ($currentPage === 6)
                                                <div class="flex flex-col ">

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask1capacidad" class="block text-sm font-medium text-gray-700">Utilizan herramientas de gestión administrativa, contable, logísticos </label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask1capacidad" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" id="ask1capacidad" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask1capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask2capacidad" class="block text-sm font-medium text-gray-700">Realiza división de funciones y tareas según un organigrama de responsabilidades</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask2capacidad" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" id="ask2capacidad" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask2capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask3capacidad" class="block text-sm font-medium text-gray-700">Realiza actividades de rendición de cuentas a sus asociados y comunidad mediante balance social</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask3capacidad" id="ask3capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask3capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask4capacidad" class="block text-sm font-medium text-gray-700">La gestión administrativa se realiza mediante contratación laboral formal</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask4capacidad" id="ask4capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask4capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask5capacidad" class="block text-sm font-medium text-gray-700">Implementa modelos de planeación de largo plazo</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask5capacidad" id="ask5capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask5capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask6capacidad" class="block text-sm font-medium text-gray-700">Evalúa de forma periódica la planeación y los resultados</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask6capacidad" id="ask6capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask6capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask7capacidad" class="block text-sm font-medium text-gray-700">Utiliza TIC para la gestión de producción y comercialización</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask7capacidad" id="ask7capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask7capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>


                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask8capacidad" class="block text-sm font-medium text-gray-700">Implementa requisitos del SGSST</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask8capacidad" id="ask8capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask8capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask9capacidad" class="block text-sm font-medium text-gray-700">La organización accede a a recursos financieros externos (sector financiero, cooperación internacional, públicos)</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask9capacidad" id="ask9capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask9capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask10capacidad" class="block text-sm font-medium text-gray-700">La organización desarrolla mecanismos internos de finanzas solidarias (ahorro, crédito, trueque, etc)</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask10capacidad" id="ask10capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask10capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>


                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask11capacidad" class="block text-sm font-medium text-gray-700">La organización genera excedentes financieros (evaluar los últimos 3 años)</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask11capacidad" id="ask11capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask11capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask12capacidad" class="block text-sm font-medium text-gray-700">La organización eestá creando capacidad productiva  (activos productivos y capital de trabajo)</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask12capacidad" id="ask12capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask12capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask13capacidad" class="block text-sm font-medium text-gray-700">Utilizan estrategias de comunicación</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask13capacidad" id="ask13capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask13capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask14capacidad" class="block text-sm font-medium text-gray-700">Desarrolla algun tipo de herramientas de comunicación</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask14capacidad" id="ask14capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask14capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask15capacidad" class="block text-sm font-medium text-gray-700">Mantienen información sobre necesidades y oferta de los bienes y servicios a sus clientes	</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask15capacidad" id="ask15capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask15capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                        <div class="w-full py-2">
                                                            <div class="mb-4">
                                                                <label for="ask16capacidad" class="block text-sm font-medium text-gray-700">Actualiza la informacion sobre las cadenas de proveedores y clientes	</label>
                                                                <div class="flex justify-between items-center">
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                    <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                </div>
                                                                <div class="relative mt-2">
                                                                    <input wire:model.lazy="ask16capacidad" id="ask16capacidad"  class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                    <div class="flex justify-between absolute w-full top-4">
                                                                        <span class="text-gray-600 text-xs">1</span>
                                                                        <span class="text-gray-600 text-xs">3</span>
                                                                        <span class="text-gray-600 text-xs">5</span>
                                                                        <span class="text-gray-600 text-xs">7</span>
                                                                        <span class="text-gray-600 text-xs">10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @error('ask16capacidad') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                        </div>
                                                    </div>

                                                    @elseif ($currentPage === 7)
                                                    <div class="flex flex-col ">

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask1calidadmer" class="block text-sm font-medium text-gray-700">Aplica una metodología para establecer los precios de los productos o servicios	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask1calidadmer" id="ask1calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask1calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask2calidadmer" class="block text-sm font-medium text-gray-700">Identifica a la competencia y aliados como una acción sistemática para la toma de decisiones	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask2calidadmer" id="ask2calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask2calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask3calidadmer" class="block text-sm font-medium text-gray-700">Tiene mecanismos propios de comercialización	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask3calidadmer" id="ask3calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask3calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask4calidadmer" class="block text-sm font-medium text-gray-700">Tiene política de comercialización e incluye el comercio justo y el consumo responsable	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask4calidadmer" id="ask4calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask4calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask5calidadmer" class="block text-sm font-medium text-gray-700">Comercializan de manera colectiva la producción</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask5calidadmer" id="ask5calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask5calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>


                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask6calidadmer" class="block text-sm font-medium text-gray-700">La logística para la comercialización es propia (transporte, insumos, etc)	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask6calidadmer" id="ask6calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask6calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>


                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask7calidadmer" class="block text-sm font-medium text-gray-700">Tiene capacidad para diseñar estrategias de mercadeo propias	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask7calidadmer" id="ask7calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask7calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>


                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask8calidadmer" class="block text-sm font-medium text-gray-700">Conoce a los clientes y conoce sus intereses, gustos, necesidades</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask8calidadmer" id="ask8calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask8calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask9calidadmer" class="block text-sm font-medium text-gray-700">Participa de procesos articulados de comercialización con otras organizaciones	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask9calidadmer" id="ask9calidadmer" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask9calidadmer') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>



                                                    @elseif ($currentPage === 8)
                                                    <div class="flex flex-col ">

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask1capacidadprod" class="block text-sm font-medium text-gray-700">Realiza compra conjunta entre los asociados, de insumos o bienes de consumo	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask1capacidadprod" id="ask1capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask1capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask2capacidadprod" class="block text-sm font-medium text-gray-700">Genera producción continua y estable en volumen (evaluar el último año)		</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask2capacidadprod" id="ask2capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask2capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask3capacidadprod" class="block text-sm font-medium text-gray-700">Agrega valor a la producción (transformación, innovación, otra)	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask3capacidadprod" id="ask3capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask3capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>


                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask4capacidadprod" class="block text-sm font-medium text-gray-700">Compra a otros productores locales sus insumos	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask4capacidadprod" id="ask4capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask4capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>


                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask5capacidadprod" class="block text-sm font-medium text-gray-700">Analizalos orígenes de los productos, para la compra de insumos y productos para la producción 		</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask5capacidadprod" id="ask5capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask5capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>


                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask6capacidadprod" class="block text-sm font-medium text-gray-700">Conoce la capacidad productiva de los asociados (áreas, maquinaria, productividad, entre otros)	 		</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask6capacidadprod" id="ask6capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask6capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>



                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask7capacidadprod" class="block text-sm font-medium text-gray-700">Identifica los efectos negativos que genera la actividad productiva 		</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask7capacidadprod" id="ask7capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask7capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>


                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask8capacidadprod" class="block text-sm font-medium text-gray-700">Produce bajo principios de sustentabilidad ambiental	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask8capacidadprod" id="ask8capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask8capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                            <div class="w-full py-2">
                                                                <div class="mb-4">
                                                                    <label for="ask9capacidadprod" class="block text-sm font-medium text-gray-700">Consumen los asociados lo que producen	</label>
                                                                    <div class="flex justify-between items-center">
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                        <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                    </div>
                                                                    <div class="relative mt-2">
                                                                        <input wire:model.lazy="ask9capacidadprod" id="ask9capacidadprod" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                        <div class="flex justify-between absolute w-full top-4">
                                                                            <span class="text-gray-600 text-xs">1</span>
                                                                            <span class="text-gray-600 text-xs">3</span>
                                                                            <span class="text-gray-600 text-xs">5</span>
                                                                            <span class="text-gray-600 text-xs">7</span>
                                                                            <span class="text-gray-600 text-xs">10</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('ask9capacidadprod') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                            </div>
                                                        </div>

                                                        @elseif ($currentPage === 9)
                                                        <div class="flex flex-col ">

                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask1capacidadservi" class="block text-sm font-medium text-gray-700">Realiza compra a proveedores del sector solidario</label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask1capacidadservi" id="ask1capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask1capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>

                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask2capacidadservi" class="block text-sm font-medium text-gray-700">Genera una oferta de servidios continua y de calidad</label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask2capacidadservi" id="ask2capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask2capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>


                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask3capacidadservi" class="block text-sm font-medium text-gray-700">Agrega valor a los servicios respecto de otras empresas privadas</label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask3capacidadservi" id="ask3capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask3capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>

                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask4capacidadservi" class="block text-sm font-medium text-gray-700">Se articula el servicio con circuitos locales de comercialización</label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask4capacidadservi" id="ask4capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask4capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>

                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask5capacidadservi" class="block text-sm font-medium text-gray-700">Analiza los orígenes de los productos, para la compra de insumos y materiales	</label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask5capacidadservi" id="ask5capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask5capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>

                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask6capacidadservi" class="block text-sm font-medium text-gray-700">Su tamaño empresarial le permite competir con el sector privado	</label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask6capacidadservi" id="ask6capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask6capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>


                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask7capacidadservi" class="block text-sm font-medium text-gray-700">Identifica los efectos negativos que genera la actividad de servicios </label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask7capacidadservi" id="ask7capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask7capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>

                                                            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                                                                <div class="w-full py-2">
                                                                    <div class="mb-4">
                                                                        <label for="ask8capacidadservi" class="block text-sm font-medium text-gray-700">Tiene programas ambientales de reducción de huella de carbono, reciclaje, y específicos relacionados con su sector económico</label>
                                                                        <div class="flex justify-between items-center">
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Bajo</span>
                                                                            <span class="text-gray-600 text-sm font-bold">Muy Alto</span>
                                                                        </div>
                                                                        <div class="relative mt-2">
                                                                            <input wire:model.lazy="ask8capacidadservi" id="ask8capacidadservi" class="range-slider bg-gray-300 w-full h-3 rounded-full" type="range" min="0" max="10" step="1" value="0">

                                                                            <div class="flex justify-between absolute w-full top-4">
                                                                                <span class="text-gray-600 text-xs">1</span>
                                                                                <span class="text-gray-600 text-xs">3</span>
                                                                                <span class="text-gray-600 text-xs">5</span>
                                                                                <span class="text-gray-600 text-xs">7</span>
                                                                                <span class="text-gray-600 text-xs">10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @error('ask8capacidadservi') <span class="text-xs text-red-500 mt-1">El campo es requerido.</span> @enderror
                                                                </div>
                                                            </div>




















                                        @endif
                                    </div>
                                    <div class="flex items-center justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        @if ($currentPage === 1)
                                            <div></div>
                                        @else
                                            <button wire:click="goToPreviousPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                                Back
                                            </button>
                                        @endif
                                        @if ($currentPage === count($pages))
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Submit
                                            </button>
                                        @else
                                            <button wire:click="goToNextPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Next
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

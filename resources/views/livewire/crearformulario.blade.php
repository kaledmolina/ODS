<div>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        @if ($success)

@endif
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
                        <form wire:submit.prevent="submit" novalidate>
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">

                                    @if ($currentPage === 1)
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                                <label for="nit" class="block text-sm font-medium text-gray-700">Nit:</label>
                                                <input wire:model.lazy="nit" type="number" name="nit" id="nit" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('nit') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="first_name" class="block text-sm font-medium text-gray-700">¿Cuál es el nombre de la organización social y solidaria?</label>
                                                <input wire:model.lazy="firstName" type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="tipo_org" class="block mb-2 text-sm font-medium text-gray-900 ">¿Qué tipo de organización social y solidaria es? (Por ejemplo, cooperativa, asociación, fundación, etc.)</label>
                                                <select wire:model.lazy="tipo_org" id="tipo_org" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option  value="" class="select-none">--Seleccione--</option>
                                                <option>Cooperativa</option>
                                                <option>Pre-coperativa</option>
                                                <option>Fondo de empleados</option>
                                                <option>Asociación mutual</option>
                                                <option>Cooperativa de trabajo asociado</option>
                                                <option>otra.</option>
                                                </select>
                                                @error('tipo_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">¿Cuál es la actividad económica de la organización? (Usar los códigos CIIU del DANE para identificar la actividad principal de la organización).</label>
                                                <input wire:model.lazy="acti_economic" type="text" name="acti_economic" id="acti_economic" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('acti_economic') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>




                                    @elseif ($currentPage === 2)
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                                <label for="sect_economic" class="block mb-2 text-sm font-medium text-gray-900 ">¿En qué sector económico opera su organización?</label>
                                                <select  wire:model.lazy="sect_economic" id="sect_economic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option  value="" class="select-none">--Seleccione--</option>
                                                    <option>Agricultura</option>
                                                <option>Sistema financiero</option>
                                                <option>Servicios de comunicaciones</option>
                                                <option>Almacenamiento y transporte</option>
                                                <option>Comercio y restaurantes</option>
                                                <option>Minas y canteras</option>
                                                <option>Agua y energía</option>
                                                <option>Construcción</option>
                                                <option>Manufacturas</option>
                                                </select>
                                                @error('sect_economic') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="tipo_product" class="block text-sm font-medium text-gray-700">¿Qué tipos de productos/servicios ofrece su organización?</label>
                                                <input wire:model.lazy="tipo_product" type="text" name="last_name" id="tipo_product" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('tipo_product') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="situac_geo" class="block mb-2 text-sm font-medium text-gray-900 ">¿Situación geográfica de la organización?</label>
                                                <select  wire:model.lazy="situac_geo" id="situac_geo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="" class="select-none">--Seleccione--</option>
                                                    <option>Rural</option>
                                                <option>Urbana</option>
                                                <option>Urbana - Rural</option>
                                                <option>Centro poblado</option>
                                                <option>Rural disperso</option>
                                                <option>otra</option>
                                                </select>
                                                @error('situac_geo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="ubic_geo" class="block mb-2 text-sm font-medium text-gray-900 ">¿Cuál es la ubicación geográfica de la organización?</label>
                                                <select  wire:model.lazy="ubic_geo" id="ubic_geo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="" class="select-none">--Seleccione--</option>
                                                    <option>Barrial - Comunitaria </option>
                                                <option>Comuna o localidad</option>
                                                <option>Departamental</option>
                                                <option>Regional</option>
                                                <option>Municipal</option>
                                                </select>
                                                @error('ubic_geo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>




                                        @elseif ($currentPage === 3)
                                        <div class="flex flex-col">


                                            <div class="w-full py-2">
                                                <label for="taman_org" class="block mb-2 text-sm font-medium text-gray-900 ">¿Determina el tamaño de la organización en función de sus activos totales? </label>
                                                <select wire:model.lazy="taman_org" id="taman_org" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="" class="select-none">--Seleccione--</option>
                                                    <option>Micro</option>
                                                <option>Pequeño</option>
                                                <option>Mediano</option>
                                                <option>Grande</option>
                                                </select>
                                                @error('taman_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="taman_num_org" class="block mb-2 text-sm font-medium text-gray-900 ">¿Clasifica el tamaño de la organización en función del número de trabajadores que tiene?</label>
                                                <select wire:model.lazy="taman_num_org" id="taman_num_org" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="" class="select-none">--Seleccione--</option>
                                                <option>Micro</option>
                                                <option>Pequeño</option>
                                                <option>Mediano</option>
                                                <option>Grande</option>
                                                </select>
                                                @error('taman_num_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="empleados_h_org" class="block mb-2 text-sm font-medium text-gray-900 ">¿Cuál es el número actual de trabajadores hombres en la organización?</label>
                                            <input wire:model.lazy="empleados_h_org" type="number" name="empleados_h_org" id="empleados_h_org" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @error('empleados_h_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="empleados_f_org" class="block mb-2 text-sm font-medium text-gray-900 ">¿Cuál es el número actual de trabajadoras mujer en la organización?</label>
                                            <input wire:model.lazy="empleados_f_org" type="number" name="empleados_f_org" id="empleados_f_org" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @error('empleados_f_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>


                                            @elseif ($currentPage === 4)



                                            <div class="w-full py-2">
                                                <label for="n_emp_29_55" class="block text-sm font-medium text-gray-700">¿Cuál es el número de empleados que tienen edades comprendidas entre 29 y 55 años en la empresa?</label>
                                                <input wire:model.lazy="n_emp_29_55" type="number" name="n_emp_29_55" id="n_emp_29_55" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_29_55') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_29_55" class="block text-sm font-medium text-gray-700">¿Cuántos trabajadores en la empresa tienen 56 años o más?</label>
                                                <input wire:model.lazy="n_emp_56" type="number" name="n_emp_56" id="n_emp_56" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_56') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_disc" class="block text-sm font-medium text-gray-700">¿Cuál es el número actual de trabajadores con discapacidad?</label>
                                                <input wire:model.lazy="n_emp_disc" type="number" name="n_emp_disc" id="n_emp_disc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_disc') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_rural" class="block text-sm font-medium text-gray-700">¿Cuál es el número de personas que trabajan y viven en zonas rurales?</label>
                                                <input wire:model.lazy="n_emp_rural" type="number" name="n_emp_rural" id="n_emp_rural" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_rural') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>


                                            @elseif ($currentPage === 5)



                                           <div class="w-full py-2">
                                                <label for="n_emp_urban" class="block text-sm font-medium text-gray-700">¿Cuál es el número de personas que trabajan y viven en una zona urbana?</label>
                                                <input wire:model.lazy="n_emp_urban" type="number" name="n_emp_urban" id="n_emp_urban" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_urban') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_men_1slm" class="block text-sm font-medium text-gray-700">¿Cuántas personas trabajan y ganan menos de 1 SMLVM ?</label>
                                                <input wire:model.lazy="n_emp_men_1slm" type="number" name="n_emp_men_1slm" id="n_emp_men_1slm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_men_1slm') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_men_entre1slm2" class="block text-sm font-medium text-gray-700">¿Cuántas personas trabajan y ganan entre 1 y 2 salarios SMLVM?</label>
                                                <input wire:model.lazy="n_emp_men_entre1slm2" type="number" name="n_emp_men_entre1slm2" id="n_emp_men_entre1slm2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_men_entre1slm2') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_men_entre2slm3" class="block text-sm font-medium text-gray-700">¿Cuántas personas trabajan y ganan entre 2 y 3 salarios SMLVM?</label>
                                                <input wire:model.lazy="n_emp_men_entre2slm3" type="number" name="n_emp_men_entre2slm3" id="n_emp_men_entre2slm3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_men_entre2slm3') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_men_mas4slm" class="block text-sm font-medium text-gray-700">¿Cuál es el número de personas que trabajan Y ganan mas de 4  SALARIOS MLVM</label>
                                                <input wire:model.lazy="n_emp_men_mas4slm" type="number" name="n_emp_men_mas4slm" id="n_emp_men_mas4slm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_men_mas4slm') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>

                                            @elseif ($currentPage === 6)


                                              <div class="w-full py-2">
                                                <label for="n_emp_segsocial" class="block text-sm font-medium text-gray-700">¿Cuál es el número de personas que trabajan y tienen afiliación a seguridad social en el ámbito de la salud?</label>
                                                <input wire:model.lazy="n_emp_segsocial" type="number" name="n_emp_segsocial" id="n_emp_segsocial" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_segsocial') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_segsocialpen" class="block text-sm font-medium text-gray-700">¿Cuántas personas trabajan y están afiliadas a un sistema de  pensión? </label>
                                                <input wire:model.lazy="n_emp_segsocialpen" type="number" name="n_emp_segsocialpen" id="n_emp_segsocialpen" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_segsocialpen') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="n_emp_arl" class="block text-sm font-medium text-gray-700">¿Cuál es el número de personas que trabajan y tienen afiliación a la seguridad social y ARL?</label>
                                                <input wire:model.lazy="n_emp_arl" type="number" name="n_emp_arl" id="n_emp_arl" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('n_emp_arl') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        @elseif ($currentPage === 7)


                                              <div class="w-full py-2">

                                                <div class="flex flex-col mb-4">

                                                    <label for="pais" class="block mb-2 text-sm font-medium text-gray-900 ">Pais</label>
                                                <select wire:model.lazy="pais" id="pais" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option  value="" class="select-none">--Seleccione--</option>
                                                <option>Argentina</option>
                                                <option>Argentina</option>
                                                <option>Bolivia</option>
                                                <option>Brasil</option>
                                                <option>Chile</option>
                                                <option>Colombia</option>
                                                <option>Costa Rica</option>
                                                <option>Cuba</option>
                                                <option>República Dominicana</option>
                                                <option>Ecuador</option>
                                                <option>El Salvador</option>
                                                <option>Guatemala</option>
                                                <option>Haití</option>
                                                <option>Honduras</option>
                                                <option>Jamaica</option>
                                                <option>México</option>
                                                <option>Nicaragua</option>
                                                <option>Panamá</option>
                                                <option>Paraguay</option>
                                                <option>Perú</option>
                                                <option>Puerto Rico</option>
                                                <option>Trinidad y Tobago</option>
                                                <option>Uruguay</option>
                                                <option>Venezuela</option>
                                                </select>

                                                @error('pais') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror

                                                  </div>

                                                  <div class="flex flex-col mb-4">
                                                    <label class="font-bold text-gray-700" for="ciudad">Ciudad</label>
                                                    <input wire:model.lazy="ciudad" class="appearance-none w-full p-2 mt-1 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" id="ciudad" name="ciudad" placeholder="Ingrese el nombre de la ciudad">

                                                    @error('ciudad') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>

                                                  <div class="flex flex-col mb-4">
                                                    <label class="font-bold text-gray-700" for="departamento">Departamento</label>
                                                    <input  wire:model.lazy="departamento" class="appearance-none w-full p-2 mt-1 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" id="departamento" name="departamento" placeholder="Ingrese el nombre del departamento">

                                                    @error('departamento') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>

                                                  <div class="flex flex-col mb-4">
                                                    <label class="font-bold text-gray-700" for="direccion">Dirección</label>
                                                    <input wire:model.lazy="direccion" class="appearance-none w-full p-2
                                                  mt-1 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" id="direccion" name="direccion" placeholder="Ingrese la dirección completa">

                                                @error('Dirección') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                  </div>
                                                  <div class="flex flex-col mb-4">
                                                    <label class="font-bold text-gray-700" for="barrio">Barrio o Localidad</label>
                                                    <input wire:model.lazy="barrio" class="appearance-none w-full p-2 mt-1 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" id="barrio" name="barrio" placeholder="Ingrese el nombre del barrio o localidad">

                                                    @error('Barrio') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>


                                                @elseif ($currentPage === 8)
                                                         <div class="w-full py-2">
                                                        <label for="correocorp" class="block text-sm font-medium text-gray-700">Correo de contacto de la organizacion</label>
                                                        <input wire:model.lazy="correocorp" type="email" name="correocorp" id="correocorp" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        @error('correocorp') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                        </div>
                                                        <div class="w-full py-2">
                                                        <label for="telfonocorp" class="block text-sm font-medium text-gray-700">numero de contacto d ela organzacion</label>
                                                        <input wire:model.lazy="telfonocorp" type="tel" name="telfonocorp" id="telfonocorp" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        @error('telfonocorp') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                        </div>
                                                            <div class="w-full py-2">
                                                            <label for="pagina" class="block text-sm font-medium text-gray-700">Ingresa el link la pagina oficial de la organizacion (web, faceboook , intagram)</label>
                                                            <input wire:model.lazy="pagina" type="url" name="pagina" id="n_emp_arl" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            @error('pagina') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                            </div>
                                                            <div class="w-full py-2">
                                                                        <label for="descrip" class="block text-sm font-medium text-neutral-600"> Por favor, proporcione más información sobre la organización para que se pueda brindar una descripción precisa y relevante a los usuarios.</label>
                                                                        <textarea wire:model.lazy="descrip" class="block w-full px-5 py-3 mt-2 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Message..." required="" data-dl-input-translation="true"></textarea>
                                                                    @error('descrip')  <span class="text-xs text-red-500 mt-1">minimo 90 caracteres y maximo 120 </span> @enderror
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

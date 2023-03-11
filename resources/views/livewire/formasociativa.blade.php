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
                                                <label for="asociad_h_org" class="block text-sm font-medium text-gray-700">NÚMERO DE ASOCIADOS HOMBRES EN LA ORGANIZACIÓN:</label>
                                                <input wire:model.lazy="asociad_h_org"  type="number" name="asociad_h_org" id="asociad_h_org" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_h_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="asociad_f_org" class="block text-sm font-medium text-gray-700">NÚMERO DE ASOCIADOS MUJERES EN LA ORGANIZACIÓN:</label>
                                                <input wire:model.lazy="asociad_f_org" type="number"  name="asociad_f_org" id="asociad_f_org" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_f_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="asocid_total_org" class="block text-sm font-medium text-gray-700">NÚMERO TOTAL DE ASOCIADOS QUE TRABAJAN EN LA ORGANIZACIÓN:</label>
                                                <input  type="number" name="asocid_total_org" id="asocid_total_org" value="{{ $asociad_h_org + $asociad_f_org }}" disabled class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" >
                                                @error('asocid_total_org') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>



                                            <div class="w-full py-2">
                                                <label for="asociad_29_55" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS ENTRE 29 Y 55 AÑOS</label>
                                                <input wire:model.lazy="asociad_29_55" type="number" name="asociad_29_55" id="asociad_29_55" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_29_55') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="asociad_56" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS CON MAS DE 56 AÑOS</label>
                                                <input wire:model.lazy="asociad_56" type="number" name="asociad_56" id="asociad_56" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_56') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="asociad_disc" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS CON DISCAPACIDAD</label>
                                                <input wire:model.lazy="asociad_disc" type="number" name="asociad_disc" id="asociad_disc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_disc') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="asociad_rural" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA RURAL</label>
                                                <input wire:model.lazy="asociad_rural" type="number" name="asociad_rural" id="asociad_rural" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_rural') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="asociad_urban" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA URBANA</label>
                                                <input wire:model.lazy="asociad_urban" type="number" name="asociad_urban" id="asociad_urban" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociad_urban') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="asociadmen_1slm" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOSY QUE GANA MENOS DE 1 SMLVM</label>
                                                <input wire:model.lazy="asociadmen_1slm" type="number" name="asociadmen_1slm" id="asociadmen_1slm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('asociadmen_1slm') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>

                                        </div>
                                    @elseif ($currentPage === 2)
                                    <div class="flex flex-col ">
                                        <div class="w-full py-2">
                                            <label for="asociad_rural" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA RURAL</label>
                                            <input wire:model.lazy="asociad_rural" type="number" name="asociad_rural" id="asociad_rural" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociad_rural') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="asociad_urban" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA URBANA</label>
                                            <input wire:model.lazy="asociad_urban" type="number" name="asociad_urban" id="asociad_urban" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociad_urban') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="asociadmen_1slm" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOSY QUE GANA MENOS DE 1 SMLVM</label>
                                            <input wire:model.lazy="asociadmen_1slm" type="number" name="asociadmen_1slm" id="asociadmen_1slm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociadmen_1slm') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    @elseif ($currentPage === 3)
                                    <div class="flex flex-col ">
                                        <div class="w-full py-2">
                                            <label for="asociad_rural" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA RURAL</label>
                                            <input wire:model.lazy="asociad_rural" type="number" name="asociad_rural" id="asociad_rural" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociad_rural') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="asociad_urban" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA URBANA</label>
                                            <input wire:model.lazy="asociad_urban" type="number" name="asociad_urban" id="asociad_urban" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociad_urban') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="asociadmen_1slm" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOSY QUE GANA MENOS DE 1 SMLVM</label>
                                            <input wire:model.lazy="asociadmen_1slm" type="number" name="asociadmen_1slm" id="asociadmen_1slm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociadmen_1slm') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    @elseif ($currentPage === 4)
                                    <div class="flex flex-col ">
                                        <div class="w-full py-2">
                                            <label for="asociad_rural" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA RURAL</label>
                                            <input wire:model.lazy="asociad_rural" type="number" name="asociad_rural" id="asociad_rural" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociad_rural') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="asociad_urban" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOS QUE VIVEN EN ZONA URBANA</label>
                                            <input wire:model.lazy="asociad_urban" type="number" name="asociad_urban" id="asociad_urban" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociad_urban') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="w-full py-2">
                                            <label for="asociadmen_1slm" class="block text-sm font-medium text-gray-700">NUMERO DE ASOCIADOSY QUE GANA MENOS DE 1 SMLVM</label>
                                            <input wire:model.lazy="asociadmen_1slm" type="number" name="asociadmen_1slm" id="asociadmen_1slm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('asociadmen_1slm') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
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

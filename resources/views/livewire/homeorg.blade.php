<div>
    <livewire:filtrarorg/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">Organizaciones registradas</h3>
                    <div class="bg-white shadow-sm rounded-lg p-6 divide-y Idivide-gray-200 " >
                        @forelse ($formulario as $formulario)

                            <div class="md:flex md:justify-between md:items-center py-5">
                                <div>

                                    <article class="mt-7 mr-7 mb-7  ml-7">
                                        <div class="flex items-center mb-4 space-x-4">
                                        <h2 class="text-2xl font-bold mb-4"> {{$formulario->firstName}}</h2>
                                        <div class="space-y-1 font-medium ">
                                        <p> {{$formulario->tipo_org}}  <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500">{{$formulario->sect_economic}} </time></p>
                                        </div>
                                        </div>
                                        <div class="flex items-center mb-1">
                                        @foreach(range(1, 5) as $i)
                                        <svg aria-hidden="true" class="w-5 h-5 {{ $i <= $formulario->stars ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>{{ $i <= $formulario->stars ? 'Selected' : 'Unselected' }} star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        @endforeach
                                        <h3 class="ml-2 text-sm font-semibold text-gray-900 ">{{$formulario->pais}}  </h3>
                                        </div>
                                        <hr class="border-gray-200">
                                        <footer class="mb-5 text-sm text-gray-500"><p>{{$formulario->departamento}}-- {{$formulario->ciudad}} <time datetime="2017-03-03 19:00">- {{$formulario->direccion}}</time></p></footer>
                                        <p class="mb-2 font-light text-gray-500">{{$formulario->descrip}}</p>
                                        <aside>
                                        <p class="mt-1 text-xs text-gray-500 ">{{$formulario->pagina}}</p>
                                        <p class="mt-1 text-xs text-gray-500 ">{{$formulario->correocorp}}</p>
                                        <p class="mt-1 text-xs text-gray-500">{{$formulario->telfonocorp}}</p>
                                        </aside>
                                        </article>


                                </div>

                                <div>


                                </div>


                            </div>
                        @empty

                        <p class="p-3 text-center text-sm text-gray-600">No hay registros disponibles</p>

                        @endforelse
                    </div>


        </div>
    </div>

</div>





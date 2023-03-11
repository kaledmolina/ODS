
            @foreach ( $datos as $formulario )


                                        <div class="bg-white ">
                                        <div class="container px-4 mx-auto">
                                            <div class="xl:items-center xl:-mx-8 xl:flex">
                                                <div class="flex flex-col items-center xl:items-start xl:mx-8">
                                                    <h1 class="text-3xl font-medium text-gray-800 capitalize lg:text-4xl dark:text-white">Continua..</h1>

                                                    <div class="mt-4">
                                                        <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                                        <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                                                        <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                                                    </div>

                                                    <p class="mt-4 font-medium text-gray-500 dark:text-gray-300">
                                                        Recibe mas indicadores..
                                                    </p>

                                                    <a href="{{ route('Asociativa.create') }}" class="flex items-center mt-4 -mx-1 text-sm text-gray-700 capitalize dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                                        <span class="mx-1">clik aqui</span>
                                                        <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </a>
                                                </div>


                                                <div class="flex-1 xl:mx-8">

                                                    <div class="mt-8 space-y-8 md:-mx-4 md:flex md:items-center md:justify-center md:space-y-0 xl:mt-0">



                                                        <div class="max-w-sm mx-auto border rounded-lg md:mx-4  dark:border-gray-700">




                                            <article class="mt-7 mr-7 mb-7  ml-7">
                                                <div class="flex items-center mb-4 space-x-4">
                                                <h2 class="text-2xl font-bold mb-4"> {{$formulario->firstName}}</h2>
                                                <div class="space-y-1 font-medium dark:text-white">
                                                <p> {{$formulario->tipo_org}}  <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">{{$formulario->sect_economic}} </time></p>
                                                </div>
                                                </div>
                                                <div class="flex items-center mb-1">
                                                @foreach(range(1, 5) as $i)
                                                <svg aria-hidden="true" class="w-5 h-5 {{ $i <= $formulario->stars ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>{{ $i <= $formulario->stars ? 'Selected' : 'Unselected' }} star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                                @endforeach
                                                <h3 class="ml-2 text-sm font-semibold text-gray-900 dark:text-white">{{$formulario->pais}}  </h3>
                                                </div>
                                                <hr class="border-gray-200 dark:border-gray-700">
                                                <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400"><p>{{$formulario->departamento}}-- {{$formulario->ciudad}} <time datetime="2017-03-03 19:00">- {{$formulario->direccion}}</time></p></footer>
                                                <p class="mb-2 font-light text-gray-500 dark:text-gray-400">{{$formulario->descrip}}</p>
                                                <aside>
                                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{$formulario->pagina}}</p>
                                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{$formulario->correocorp}}</p>
                                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{$formulario->telfonocorp}}</p>
                                                </aside>
                                                </article>


                                            </div>





                                        <div class="container   px-10 py-10 mx-auto">

                                            <div class="max-w-sm  mx-auto border rounded-lg md:mx-4 dark:border-gray-700">

                                                                <article class=" mt-5 mr-6   ml-6 pt-10 pb-10">

                                                                 <div class=" ">
                                                                    <div class="flex items-center mb-3">@foreach(range(1, 5) as $i)
                                                                        <svg aria-hidden="true" class="w-5 h-5 {{ $i <= $formulario->stars ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>{{ $i <= $formulario->stars ? 'Selected' : 'Unselected' }} star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                                                        @endforeach
                                                                        <p class="ml-2 text-sm font-medium text-gray-900 dark:text-white">4.95 out of 5</p>
                                                                    </div>

                                                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">1,745 global ratings</p>
                                                                    <div class="flex items-center mt-4">
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">Diversidad Genero</span>
                                                                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded ">
                                                                            <div class="h-5 bg-yellow-400 rounded" style="width: {{$formulario->indiceDiversidadGenero}}%"></div>
                                                                        </div>
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{$formulario->indiceDiversidadGenero}}%</span>
                                                                    </div>
                                                                    <div class="flex items-center mt-4">
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">Equidad  Salarial </span>
                                                                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded ">
                                                                            <div class="h-5 bg-yellow-400 rounded" style="width:{{$formulario->indiceEquidadSalarial}}%"></div>
                                                                        </div>
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{$formulario->indiceEquidadSalarial}}%</span>
                                                                    </div>
                                                                    <div class="flex items-center mt-4">
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">Promedio en Salud</span>
                                                                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded ">
                                                                            <div class="h-5 bg-yellow-400 rounded" style="width:{{$formulario->porcentajeAfiliadosSalud}}%"></div>
                                                                        </div>
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{$formulario->porcentajeAfiliadosSalud}}%</span>
                                                                    </div>
                                                                    <div class="flex items-center mt-4">
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">Promedio en Pension</span>
                                                                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded ">
                                                                            <div class="h-5 bg-yellow-400 rounded" style="width:{{$formulario->porcentajeAfiliadosPension}}%"></div>
                                                                        </div>
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{$formulario->porcentajeAfiliadosPension}}%</span>
                                                                    </div>
                                                                    <div class="flex items-center mt-4">
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">Promedio Minusvalia</span>
                                                                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded ">
                                                                            <div class="h-5 bg-yellow-400 rounded" style="width: {{$formulario->porcentajeDiscapacitados}}%"></div>
                                                                        </div>
                                                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-500">{{$formulario->porcentajeDiscapacitados}}%</span>
                                                                    </div>

                                                                </div>
                                                                    </article>

                                                                </div>

                                                            </div>
                                                            </div>





                                                            </div>
                                                            </div>

                                                                        <div class="flex flex-row min-h-screen justify-center items-center">

        <div class="py-4 lg:py-8 relative">
            <img src="https://cdn.tuk.dev/assets/templates/radian/Back_Image.png" class="h-2/5 lg:h-full w-full lg:w-1/2 absolute inset-0 object-cover object-center xl:block hidden" alt="map" />
            <div class="xl:mx-auto xl:container relative">
                <div class="flex flex-wrap xl:mx-auto xl:container">
                    <div class="w-full relative lg:w-1/2 xl:mt-10 mb-10 2xl:pr-24 2xl:pl-0 xl:pl-12 pl-0">
                        <img src="https://cdn.tuk.dev/assets/templates/radian/Back_Image.png" class="h-full w-full xl:w-1/2 absolute inset-0 bg-cover bg-center xl:hidden" alt="map" />

                        <div class="w-full flex flex-col items-start xl:justify-start relative z-20 xl:px-0 px-4 xl:py-0 py-4">
                            <div class="w-full 2xl:pl-48 xl:pt-1">
                                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold tracking-wider text-gray-800">Aqui!</h1>
                                <div class="w-full md:w-10/12 mt-3">
                                    <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider">Caracterizacion de tus datos para geolocalizacion de manera publica para todos los usuarios</h2>
                                    <div class="mt-4 md:mt-8">
                                        <h2 class="text-sm md:text-base text-indigo-700 font-semibold">Dirección</h2>
                                        <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">{{$formulario->departamento}}</h2>
                                        <h3 class="text-gray-800 text-base md:text-lg leading-7 tracking-wider mt-2" >{{$formulario->ciudad}}</h3>

                                        <h3 class="text-gray-800 text-base md:text-lg leading-7 tracking-wider mt-2" >{{$formulario->barrio}} {{$formulario->direccion}}</h3>
                                    </div>
                                    <div class="mt-4 md:mt-8">
                                        <h2 class="text-sm md:text-base text-indigo-700 font-semibold">ContactO</h2>
                                        <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2">{{$formulario->telfonocorp}}(Phone)</h2>
                                    </div>
                                    <div class="mt-4 md:mt-8">
                                        <h2 class="text-sm md:text-base text-indigo-700 font-semibold">URL Y Email</h2>
                                        <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2"> {{$formulario->correocorp}} </h2>

                                        <h2 class="text-gray-800 text-base md:text-lg leading-8 tracking-wider mt-2"> {{$formulario->pagina}} </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 xl:pt-10 lg:pl-24">
                        <div class="flex flex-col items-start xl:justify-start 2xl:justify-end xl:px-0 px-4">
                            <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold tracking-wider text-indigo-700">Recuerda!</h1>
                            <div class="w-full 2xl:w-8/12 mt-3" role="form">
                                <div class="bg-gradient-to-r from-emerald-400 to-cyan-400 p-4 rounded-lg">
                                    <p class="font-bold">Tus datos están seguros con nosotros</p>
                                    <p class="text-sm mb-4">Guardamos tu información con extrema seguridad y solo para uso académico.</p>
                                    <div class="flex justify-between items-center">
                                      <a href="https://minciencias.gov.co/ciudadano/terminosycondiciones-datospersonales" target="_blank" class="text-blue-500 hover:underline">Ley de protección de datos en Colombia</a>
                                      <a href="https://minciencias.gov.co/ciudadano/terminosycondiciones-datospersonales"  target="_blank" class="text-blue-500 hover:underline">Términos y condiciones</a>
                                    </div>
                                  </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>









                                                                        </div>






                                                        </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach



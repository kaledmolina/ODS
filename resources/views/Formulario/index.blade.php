<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="w-full h-24 bg-gradient-to-r from-emerald-400 to-cyan-400 flex justify-center">

                </div>



                <div class="xl:mx-auto xl:container  xl:px-20 md:px-6  px-4 py-12"> <br><br>
                    <div class="lg:flex items-center  justify-center lg:space-x-12 2xl:space-x-6">
                        <div class="mb-10">
                            <p class="lg:text-4xl text-3xl font-extrabold leading-9 text-gray-800 dark:text-white">¡Bienvenidos a nuestra plataforma para organizaciones de economía social y solidaria!</p>
                            <p class="text-lg leading-7 text-gray-600 dark:text-gray-200 mt-4 xl:w-7/12 w-full">Nos complace invitarlos a participar en el cuestionario "Caracterizacion" y "Dinámica Asociativa", que forma parte del Proyecto "Observatorio del impacto social, económico y ambiental de las organizaciones, generando un sistema permanente y público de información. Para lograrlo, necesitamos su colaboración en la primera parte del cuestionario, que se enfoca en la caracterización de su organización.</p>

                            <div class="mt-6 md:mt-10 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6 lg:mt-6 2xl:mt-12">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 relative">
                                        <div class=" flex-shrink-0 z-20  w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_6_Svg1.svg" alt="clock">
                                        </div>
                                    </div>
                                    <div class="flex items-start flex-col ml-6 pt-8">
                                        <h2 class="text-lg font-semibold leading-4 text-gray-800 dark:text-white">Tiempo</h2>
                                        <p class="lg:w-40 2xl:w-52 text-base leading-6 mt-2 text-gray-600 dark:text-gray-200">Su participación es fundamental para lograr resultados y contribuir al avance y desarrollo de las organizaciones. El tiempo estimado es de 45 minutos.</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-16 h-16 relative">
                                        <div class=" flex-shrink-0 z-20  w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_6_Svg2.svg" alt="Friendly">
                                        </div>
                                    </div>
                                    <div class="flex items-start flex-col ml-6 pt-8">
                                        <h2 class="text-lg font-semibold leading-4 text-gray-800 dark:text-white">Sr Usuario</h2>
                                        <p class="lg:w-40 2xl:w-52 text-base leading-6 mt-2 text-gray-600 dark:text-gray-200">Sus datos serán tratadas con la máxima confidencialidad y los resultados serán utilizados únicamente para fines estadísticos. </p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-16 h-16 relative">
                                        <div class=" flex-shrink-0 z-20  w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_6_Svg3.svg" alt="Creative">
                                        </div>
                                    </div>
                                    <div class="flex items-start flex-col ml-6 pt-8">
                                        <h2 class="text-lg font-semibold leading-4 text-gray-800 dark:text-white">Su participación</h2>
                                        <p class="lg:w-40 2xl:w-52 text-base leading-6 mt-2 text-gray-600 dark:text-gray-200">Agradecemos de antemano su colaboración y su tiempo para completar este cuestionario.</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-16 h-16 relative">
                                        <div class=" flex-shrink-0 z-20  w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/feature_6_Svg4.svg" alt="Achievments">
                                        </div>
                                    </div>
                                    <div class="flex items-start flex-col ml-6 pt-8">
                                        <h2 class="text-lg font-semibold leading-4 text-gray-800 dark:text-white">Metas</h2>
                                        <p class="lg:w-40 2xl:w-52 text-base leading-6 mt-2 text-gray-600 d dark:text-gray-200">El objetivo es medir el impacto economico social y solidario con respecto a los Objetivos de Desarrollo Sostenible</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                        <div class="w-full  bg-gradient-to-r from-emerald-400 to-cyan-400 flex justify-center">
                            <div class="w-full md:w-11/12 xl:w-10/12 md:py-8 md:px-8 px-10 py-10 xl:px-12 xl:py-16 flex justify-center items-center">
                            <div class="md:w-2/3 w-full pb-6 md:pb-0 md:pr-6 flex-col md:block flex items-center justify-center md:pt-0 pt-4">
                                <div>
                                <h1 role="heading" class="text-xl md:text-2xl lg:text-4xl xl:text-4xl lg:w-10/12 text-white font-black leading-6 lg:leading-10 md:text-left text-center">Hazte a conocer y diligencia el primer formulario..</h1>
                                </div>
                                <a href="{{ route('Formulario.create') }}">
                                <button role="button" aria-label="Join the community" class="mt-5 lg:mt-8 py-3 lg:py-4 px-4 lg:px-8 bg-white font-bold text-indigo-700 rounded-lg text-sm lg:text-lg xl:text-xl hover:bg-opacity-90 focus:ring-2 focus:ring-offset-2 focus:ring-white focus:outline-none">únete aqui!</button>
                                </a>
                            </div>
                            <div class="md:w-1/3 w-2/3">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/CTA.png" alt="cartoon avatars">
                            </div>
                            </div>
                        </div>




            </div>

        </div>

    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Etapa Productiva</title>
    <style>
        #userMenu {
            top: 100%;
            margin-top: 0.5rem;
        }
        .user-status {
            text-align: center; /* Centrar el texto */
            color: #009e00; /* Color verde */
            margin-top: 5px; /* Espacio superior para alineación */
            font-size: 12px; /* Ajustar el tamaño de fuente */
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
  <header class="bg-white text-[#009e00] px-5 py-2.5 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">

        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <!-- Logo de SENA en el lado izquierdo -->
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo ">

                <!-- Espaciado entre los dos bloques -->
                <div class="flex-grow m-2"></div>

                <!-- Logo de Etapa Productiva y texto "Centro de Comercio y Servicios" en el lado derecho -->
                <div class="text-left">
                    <!-- Logo de Etapa Seguimiento -->
                    <a href="{{ route('administrator.home') }}" class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                        <div class="flex flex-col text-left">
                            <h2 class="text-[12px] m-0 text-[#009e00]">Etapa</h2>
                            <h2 class="text-[12px] m-0 text-[#009e00]">Productiva</h2>
                        </div>
                    </a>

                    <!-- Texto "Centro de Comercio y Servicios" debajo del logo y el texto de Etapa Productiva -->
                    <h2 class="text-sm mt-2 text-[#009e00]">Centro de Comercio y Servicios</h2>
                </div>
            </div>
            <div class="relative ml-auto flex items-center">
                <!-- Contenedor para la imagen y el ícono de los tres puntos -->
                <div class="relative">
                    <!-- Imagen de usuario -->
                    <img class="bg-white w-[45px] h-auto rounded-full border-2 " src="{{ asset('img/administrador/mujer.png') }}" alt="User Icon">

                    <!-- Botón de los tres puntos encima de la imagen -->
                    <button id="menuButton" class="absolute top-1 right-0 bg-transparent p-1 mr-[-46%]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" />
                        </svg>
                    </button>
                </div>
                 {{-- Menu --}}
                 <div id="userMenu" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                     <div class="p-4">
                         <div class="flex items-center mb-4">
                             <div>
                                 <p class="text-sm font-bold">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>
                                 <p class="text-sm mt-2">Administrador</p>
                             </div>


                         </div>
                         <ul>
                             <li class="mt-2"><a href="{{ route('administrator.Administrator-perfil') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>

                             <li class="mt-2"><a href="{{ route('administrator.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>


                             <li class="mt-2"><a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Plantillas</a>
                                 <ul class="hidden ml-4 mt-2 bg-[#EEEEEE] p-2 rounded-lg">
                                     <li class="mt-2 font-bold text-black border-b border-gray-300 pb-2">MODALIDAD</li>
                                     <li class="mt-2"><a href="{{ route('administrator.template')}}"class="block text-black hover:bg-white p-2 rounded-lg">Pasantía</a></li>
                                     <li>
                                        <a href="javascript:void(0)" class="block text-black hover:bg-white p-2 rounded-lg" id="contratoAprendizaje">Contrato de Aprendizaje</a>
                                        <ul id="sublistContrato" class="ml-4 mt-2 bg-[#D9D9D9] p-2 rounded-lg w-[250px] hidden">
                                            <li class="mt-2">
                                                <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Ver Plantilla</a>
                                            </li>
                                            <li class="mt-2">
                                                <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">+ Añadir Plantilla</a>
                                            </li>
                                        </ul>
                                    </li>
                                     <li class="mt-2"><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Vinculo Laboral</a></li>
                                     <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Unidad Productiva Familiar</a></li>
                                     <li><a href="{{ route('administrator.template')}}" class="block text-black hover:bg-white p-2 rounded-lg">Proyecto Productivo Empresarial</a></li>
                                 </ul></li>
                             <li class="mt-2"><a href="{{ route('administrator.graphic')}}" class="block text-black hover:bg-white p-2 rounded-lg">Graficas</a></li>
                         </ul>
                         <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                             @csrf
                             <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                         </form>
                 </div>
             </div>
        </header>
    <nav class="bg-[#009e00] px-2.5 h-14 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span> <!-- Ejemplo de contador de notificaciones -->
        </button>
    {{-- FIN Barra Azul --}}
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="{{ route('administrator.notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.notificaciones') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('administrator.notificaciones') }}"class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>





    </nav>
        {{-- FIN Menu --}}


    {{-- HOME --}}
    <main class="flex-nowrap p-10 flex justify-center items-center bg-white">
        <div class="grid grid-cols-4 gap-20 bg-[#f0f0f0] border-2 border-[#2F3E4C] p-[72px] rounded-[20px] max-w-[100%] mx-auto shadow-[0_0_10px_rgba(0,0,0,0.8)]">
            <a href="{{ route('administrator.instructor') }}" class="m-2.5 py-4 rounded-[15%] flex flex-col items-center text-center p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <img src="{{ asset('img/administrador/instructor.png') }}" alt="Instructores" class="w-[160px] h-[150px] mb-0">
                <span class="text-sm p-2">Instructores</span>
            </a>


            <!-- Botón de Aprendices -->

                <a href="{{ route('administrator.apprentice') }}" class="m-2.5 py-4 rounded-[15%] flex flex-col items-center text-center p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                    <img src="{{ asset('img/administrador/aprendiz.png') }}" alt="Aprendices" class="w-[130px] h-[120px] mb-0">
                    <span class="text-sm p-4">Aprendices</span>
                </a>

            <a href="{{ route('administrator.graphic') }}" class="m-2.5 rounded-[15%] flex flex-col items-center text-center py-10 p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
                <img src="{{ asset('img/administrador/graficas.png') }}" alt="Graficas" class="w-[120px] h-[110px] mb-2.5">
                <span class="text-sm p-4">Graficas</span>
            </a>
<!-- Botón de Plantillas -->
<div class="relative m-2.5 py-10 rounded-[15%] flex flex-col items-center p-5 bg-white border-[3px] border-black w-56 h-56 hover:border-green-600">
    <a href="javascript:void(0);" id="toggleMenu2" class="relative z-10 flex flex-col items-center text-center">
        <img src="{{ asset('img/plantilla.png') }}" alt="Plantilla" class="w-[120px] h-[110px] mb-2.5">
        <span class="text-sm p-4">Plantilla</span>
    </a>
    <ul id="menu2" class="hidden absolute top-12 left-1/2 transform -translate-x-1/2 bg-[#D3D3D3] p-4 rounded-lg shadow-lg z-20 w-[300px]">
        <li class="mt-2 font-bold text-black border-b border-gray-500 pb-2">MODALIDAD</li>
        <li class="mt-2">
            <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Pasantía</a>
        </li>
        <li class="mt-2">
            <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Vinculo Laboral</a>
        </li>
        <li>
            <a href="javascript:void(0);" class="block text-black hover:bg-white p-2 rounded-lg" onclick="toggleSublist(event)">Contrato de Aprendizaje</a>
            <ul class="hidden ml-4 mt-2 bg-[#D9D9D9] p-2 rounded-lg w-[250px]">
                <li class="mt-2">
                    <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Ver Plantilla</a>
                </li>
                <ul>
                    <li class="mt-2">
                        <button id="uploadButton" class="block text-black hover:bg-white p-2 rounded-lg">+ Añadir Plantilla</button>
                        <input type="file" id="fileUpload" class="hidden" name="fileUpload" accept=".txt,.doc,.docx,.pdf" />
                    </li>
                </ul>
            </ul>
        </li>
        <li class="mt-2">
            <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Unidad Productiva Familiar</a>
        </li>
        <li class="mt-2">
            <a href="{{ route('administrator.template') }}" class="block text-black hover:bg-white p-2 rounded-lg">Proyecto Productivo Empresarial</a>
        </li>
    </ul>
</div>


<script>
   document.addEventListener('DOMContentLoaded', function() {
    var menu = document.getElementById('menu2');
    var toggleButton = document.getElementById('toggleMenu2');

    // Evento para el toggle del menú 2
    toggleButton.addEventListener('click', function(event) {
        event.stopPropagation(); // Evitar que el clic en el botón cierre el menú
        menu.classList.toggle('hidden'); // Alternar la clase 'hidden'
    });

    // Cierra el menú si se hace clic fuera de él
    document.addEventListener('click', function(event) {
        if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
            menu.classList.add('hidden'); // Cierra el menú
        }
    });

    // Función para alternar sublistas
    function toggleSublist(event) {
        event.preventDefault(); // Evitar el comportamiento por defecto
        var sublist = event.target.nextElementSibling; // Obtener el siguiente elemento
        if (sublist) {
            sublist.classList.toggle('hidden'); // Alternar la clase 'hidden' de la sublista
        }
    }

    // Registro del evento para todos los enlaces que necesitan alternar un submenu
    document.querySelectorAll('a[onclick="toggleSublist(event)"]').forEach(function(link) {
        link.addEventListener('click', toggleSublist);
    });

    // Al hacer clic en el botón, activa el input file
    document.getElementById('uploadButton').addEventListener('click', function() {
        document.getElementById('fileUpload').click();
    });

    // Puedes manejar el evento change para hacer algo cuando se seleccione un archivo
    document.getElementById('fileUpload').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
        alert('File selected: ' + fileName);
    });
});


  </script>


<script src="{{ asset('js/SuperAdmin.js') }}"></script>

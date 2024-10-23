<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Etapa Seguimiento</title>
    <style>
    #userMenuTri {
            top: 100%;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex flex-col items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0']">
        <div class="flex justify-between w-full">
            <div class="flex items-center">
                <!-- Logo de SENA en el lado izquierdo -->
                <img class="w-[70px] h-[70px]" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo ">

                <!-- Espaciado entre los dos bloques -->
                <div class="flex-grow m-2"></div>

                <!-- Logo de Etapa Productiva y texto "Centro de Comercio y Servicios" en el lado derecho -->
                <div class="text-left">
                    <!-- Logo de Etapa Seguimiento -->
                    <a href="{{ route('icon') }}" class="flex items-center">
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
                    <button id="menuButtonTri" class="absolute top-1 right-0 bg-transparent p-1 mr-[-46%]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm0 5.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" />
                        </svg>
                    </button>
                </div>
    </header>
    <nav class="bg-[#009e00] px-2.5 h-14 py-1.5 flex justify-start items-center relative z-10">
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span> <!-- Ejemplo de contador de notificaciones -->
        </button>
        <div id="notifMenu" class="hidden absolute top-full mt-2 left-0 w-64 bg-white border border-gray-300 rounded-lg shadow-lg z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="{{ route('notification') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('notification') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="{{ route('notification') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Perfil Aprendiz</div>
        <div class="relative ml-auto flex items-center ">


            <div id="userMenuTri" class=" hidden absolute right-4  mt-2 w-64 bg-[#D9D9D9] border border-gray-300 rounded-lg shadow-lg z-20">
                <div class="p-4">
                    <div class="flex items-center mb-4">
                        <div>
                            <p class="text-sm font-bold">Nombre Usuario<p>
                            <p class="text-sm mt-2">Instructor</p>
                        </div>

                        <img src="{{ asset('img/administrador/mujer.png') }}" alt="User Icon" class="w-10 h-10 rounded-full mr-3 mx-10 bg-white border-black border-2">
                    </div>
                    <ul>
                        <a href="{{ route('username')}}" class="block text-center text-green-600 font-bold mt-4 bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">ver perfil</a>
                        <li class="mt-2"><a href="{{ route('configuracion')}}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
                        <li class="mt-2"><a href="{{ route('icon') }}" class="block text-black hover:bg-white p-2 rounded-lg">Aprendices</a></li>
                        <li class="mt-2"><a href="{{ route('cronograma') }}" class="block text-black hover:bg-white p-2 rounded-lg">Cronograma</a></li>

                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-2 w-full">Cerrar sesión</button>
                    </form>
            </div>
        </div>

        </nav>

        </div>
    </nav>
    <div class="w-full flex justify-between items-center mt-6">
        <a href="{{ route('icon') }}" class="ml-4">
            <img src="{{ asset('img/flecha.png') }}" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>
        <div class="flex justify-center">
    <main class=" bg-gray-100 m-2 px-2 rounded-lg max-height-100% w-5/7 border-2 border-black">


        <div class="container  mx-auto mt-6 p-6 bg-white rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-1 flex flex-col items-center space-y-4">
                    <div class="bg-gray-200 rounded-full p-6  border-2 border-black">
                        <img src="{{ asset('img/trainer/aprendiz_icono_tra.png') }}" alt="Avatar" class="h-28">
                    </div>
                    <div class="w-full">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombres</label>
                        <input type="text" id="nombre" value="Carolina" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 ">
                    </div>
                    <div class="w-full">
                        <label for="apellido" class="block text-sm font-medium text-gray-700">Apellidos</label>
                        <input type="text" id="apellido" value="Diaz" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="identificacion" class="block text-sm font-medium text-gray-700">N° identificación</label>
                        <input type="text" id="identificacion" value="1060435758" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="ficha" class="block text-sm font-medium text-gray-700">N° ficha</label>
                        <input type="text" id="ficha" value="2354781" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                        <input type="email" id="email" value="carolinadiaz@gmail.com" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                        <input type="text" id="departamento" value="Cauca" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="municipio" class="block text-sm font-medium text-gray-700">Municipio</label>
                        <input type="text" id="municipio" value="Popayán" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="genero" class="block text-sm font-medium text-gray-700">Género</label>
                        <input type="text" id="genero" value="Femenino" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="nivel_formacion" class="block text-sm font-medium text-gray-700">Nivel de Formación</label>
                        <input type="text" id="nivel_formacion" value="Tecnologo" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                    <div class="w-full">
                        <label for="programa" class="block text-sm font-medium text-gray-700">Nombre del Programa</label>
                        <input type="text" id="programa" value="Adso" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                    </div>
                </div>
                <div class="md:col-span-2 flex flex-col items-center space-y-4">
                    <div class="flex justify-between items-center w-full">
                        <div>
                            <a href="{{ route('bitacora') }}" class="m-2.5 py-10 rounded-[10%] flex flex-col items-center text-center p-5 w-56 h-56 hover:border-green-600">
                                <img src="{{ asset('img/trainer/bitacoras_1.png') }}" alt="Bitacora" class="m-2.5 py-5 rounded-[10%] flex flex-col items-center text-center p-2 bg-white border-[2px] border-black w-40 h-40 hover:border-green-600 object-cover">
                                <h2 class="text-center font-weight:300">Bitacora</h2>
                            </a>

                        </div>
                        <div>
                        <a href="{{ route('visita') }}" class="m-2.5 py-10 rounded-[10%] flex flex-col items-center text-center p-5 w-56 h-56 hover:border-green-600">
                            <img src="{{ asset('img/trainer/visitas_1.png') }}" alt="Visita" class="m-2.5 py-5 rounded-[10%] flex flex-col items-center text-center p-2 bg-white border-[2px] border-black w-40 h-40 hover:border-green-600 object-cover">
                            <h2 class="text-center font-weight:300">Visita</h2>
                        </a>

                    </div>
                        <div>
                            <select id="statusSelect" class="border-[2px] border-black p-4 rounded-md w-48 bg-white">
                                <option selected disabled>Selecciona Opción</option>
                                <option value="ACTIVO" data-color="green">ACTIVO</option>
                                <option value="NOVEDAD" data-color="orange">NOVEDAD</option>
                                <option value="FINALIZADA" data-color="red">FINALIZADA</option>
                            </select>
                        </div>
                    </div>
                    <div></div>
                    <div class="bg-gray-100 p-4 rounded-md w-full">
                        <h3>LINEA TEMPORAL (Etapa de seguimiento)</h3>
                        <img src="{{asset('img/lineatiempo.png')}}" alt="timeline" class='timeline'>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </main>
</div>
<script src="{{ asset('js/Trainer.js') }}"></script>
<script>



    document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('statusSelect');

    selectElement.addEventListener('change', function() {
        const selectedOption = selectElement.options[selectElement.selectedIndex];

        // Depuración: Verifica si el evento se dispara correctamente
        console.log('Opción seleccionada:', selectedOption.value);

        const selectedColor = selectedOption.getAttribute('data-color');

        // Depuración: Verifica si el atributo 'data-color' está presente
        console.log('Color seleccionado:', selectedColor);

        if (selectedColor) {
            // Cambia el color de fondo del select
            selectElement.style.backgroundColor = selectedColor;
        } else {
            // Restablece el color de fondo si no hay color
            selectElement.style.backgroundColor = '';
        }
    });
});

</script>
</body>
</html>

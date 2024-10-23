<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/Trainer.js') }}"></script>
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
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Bitacoras</div>
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
    <div class="w-full flex justify-between items-center mt-4">
        <a href="http://127.0.0.1:8000/trainer/perfilapre" class="ml-4">
            <img src="http://127.0.0.1:8000/img/flecha.png" alt="Flecha" class="w-5 h-auto">
        </a>
    </div>

    <main class=" bg-gray-100 m-2 px-2 rounded-lg max-height-100% w-5/7 border-2 border-black">

        <div class="flex flex-cols-4 gap-12 pb-4  items-between text-center mt-2">
                <div class="flex flex-col w-1/4 ">
                    <label class="font-bold">Nombre Del Aprendiz</label>
                    <p type="text" class="bg-[#009E00] bg-opacity-60 p-2 rounded-full text-white font-semibold">Marian Diaz</p>
                </div>
                <div class="flex flex-col  w-1/4">
                    <label class="font-bold">Programa</label>
                    <p type="text" class=" bg-[#009E00] bg-opacity-60 p-2 rounded-full text-white font-semibold">ADSO</p>
                </div>
                <div class="flex flex-col  w-1/4">
                    <label class="font-bold">N° Ficha</label>
                    <p type="text" class=" bg-[#009E00] bg-opacity-60 p-2 rounded-full text-white font-semibold">2654013</p>
                </div>
                <div class="flex flex-col  w-1/4">
                    <label class="font-bold">Correo Electrónico</label>
                    <p type="email" class=" bg-[#009E00] bg-opacity-60 p-2 rounded-full text-white font-semibold">mariandiaz@gmail.com</p>
                </div>
        </div>
    <div class="flex flex-cols-3">
        <div class="flex-cols-2 gap-2 p-4 w-2/5 text-center h-vg[60] border-2 border-black rounded-2xl">
            <label class="font-semibold text-center ">Bitacoras</label>
            <div class="flex flex-col text-center items-center">
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="1">
                    <span class="block px-4 py-2 border border-black rounded-md text-gray-700">1</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="2">
                    <span class="block px-4 py-2 border border-black  rounded-md text-gray-700">2</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="3">
                    <span class="block px-4 py-2 border border-black  rounded-md text-gray-700">3</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="4">
                    <span class="block px-4 py-2 border border-black rounded-md text-gray-700">4</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="5">
                    <span class="block px-4 py-2 border border-black rounded-md text-gray-700">5</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="6">
                    <span class="block px-4 py-2 border border-black  rounded-md text-gray-700">6</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="7">
                    <span class="block px-4 py-2 border border-black rounded-md text-gray-700">7</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="8">
                    <span class="block px-4 py-2 border border-black rounded-md text-gray-700">8</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3 ">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="9">
                    <span class="block px-4 py-2 border border-black rounded-md text-gray-700">9</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="10">
                    <span class="block px-4 py-2 border border-black  rounded-md text-gray-700">10</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="11">
                    <span class="block px-4 py-2 border border-black  rounded-md text-gray-700">11</span>
                </label>
                <label class="w-96 items-center cursor-pointer space-x-2 mb-3">
                    <input type="checkbox" class="bitacora-checkbox hidden" name="bitacora" value="12">
                    <span class="block px-4 py-2 border border-black  rounded-md text-gray-700">12</span>
                </label>
            </div>

        </div>
        {{-- Contenedor Fantasma --}}
        <div class=" w-1/5  ">
        </div>
        <div class=" w-2/5 border-2 rounded-2xl border-black h-86 mt-2">
            <div class="flex flex-col p-6 text-center">
                <label class="font-semibold ">Tipo de Modalidad de Etapa Productiva</label>
                <p type="text" class="border border-black  p-2 rounded-md bg-white">Pasantia</p>
            </div>
            <div class="flex flex-col p-6 text-center">
                <label class="font-semibold ">Descripcion De La Actividad</label>
                <textarea id="descripcion" class="border border-black p-2 rounded-md h-28 bg-white"></textarea>
            </div>
            <div class="flex flex-col p-6 text-center">
                <label class="font-semibold ">Bitacoras</label>
                <input type="file" class="border border-black p-2 rounded-md bg-white text-center" name="fileUpload" id="fileUpload">
            </div>
            <div class="flex flex-col p-6 text-center">
                <label class="font-bold">Fecha</label>
                <input type="date" class="border border-black -400 p-2 rounded-md w-48 bg-white ml-36 text-center">
            </div>
            <div class="flex flex-col p-6 text-center">
                <label class="font-semibold ">Observación/Inasistencia y/o Dificultades</label>
                <textarea id="observacion" class="border border-black p-2 rounded-md h-28 bg-white"></textarea>
            </div>
        </div>
    </div>
    <div class=" pt-2 px-[44%]">
        <button class="bg-[#009E00] h-8 w-44 rounded-2xl text-white mb-6"  id="registrar-btn">REGISTRAR</button>
      </div>
    </main>
    <script>
         document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.bitacora-checkbox');

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (checkbox.checked) {
                        checkbox.nextElementSibling.classList.add('bg-green-500', 'text-white');
                        checkbox.nextElementSibling.classList.remove('border-black', 'text-gray-700');
                    } else {
                        checkbox.nextElementSibling.classList.remove('bg-green-500', 'text-white');
                        checkbox.nextElementSibling.classList.add('border-black', 'text-gray-700');
                    }
                });
            });
        });
        // Esperar a que el DOM se cargue
    document.addEventListener("DOMContentLoaded", function() {
    // Obtener el botón por su ID
    const registrarBtn = document.getElementById("registrar-btn");

    // Agregar el evento de click
    registrarBtn.addEventListener("click", function() {
        // Mostrar un mensaje cuando el botón sea presionado
        alert("Bitacora Registrada");
    });
});
    </script>

</body>
</html>

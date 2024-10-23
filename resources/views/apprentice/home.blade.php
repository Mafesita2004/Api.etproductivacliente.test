<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Etapa Productiva</title>
    <style>
        /* Aquí se pueden agregar estilos personalizados si es necesario */
        #userMenu, #notifMenu {
            display: none;
            position: absolute;
            z-index: 20;
        }

        #userMenu.show, #notifMenu.show {
            display: block;
        }

        #userMenu {
            right: 0;
            top: 100%;
        }

        #notifMenu {
            left: 0;
            top: 100%;
        }
    </style>
</head>
<body class="font-['Arial',sans-serif] bg-white m-0 flex flex-col min-h-screen">
    <header class="bg-white text-[#009e00] px-5 py-2.5 flex justify-between items-center border-t-[5px] border-t-white border-b border-b-[#e0e0e0]">
        <div class="flex items-center justify-start">
            <img class="w-[45px] h-[45px] m-0" src="{{ asset('img/logo-sena.png') }}" alt="Sena Logo">
            <h2 class="text-sm m-0 text-[#009e00] m-2">Centro de Comercio y Servicios</h2>

        </div>
        <div class="flex items-center ml-[10%]">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="w-10 h-auto mr-1.5">
                <h2 class="text-[12px] m-0 text-[#009e00]" >Etapa <br>Productiva</h2>

        </div>
    </header>

    <!-- Navbar -->

    <nav class="bg-[#00324d]  px-2.5 py-1.5 flex justify-start items-center relative z-10">

        <!-- Notification Button -->
        <button id="notifButton" class="relative">
            <img class="w-[35px] h-auto mr-2.5 filter invert" src="{{ asset('img/notificaciones.png') }}" alt="Notificaciones">
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-600 text-white text-xs rounded-full flex items-center justify-center">5</span>
        </button>

        <!-- Notification Dropdown -->
        <div id="notifMenu" class="absolute bg-white border border-gray-300 rounded-lg shadow-lg w-64 hidden z-20">
            <div class="p-4">
                <h2 class="text-sm font-bold">Notificaciones</h2>
                <ul>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 2</a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 3</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Central Button -->
        <div class="text-white text-center absolute left-1/2 transform -translate-x-1/2">Inicio</div>

        <!-- User Menu -->
        <div class="relative ml-auto flex items-center">
            <div class="bg-white w-72 rounded-full px-8 py-1.5 text-sm text-black mr-2"></div>
            <button id="menuButton" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <!-- User Dropdown -->
            <div id="userMenu" class="bg-gray-200 border border-gray-300 rounded-lg shadow-lg w-64 hidden">
                <div class="p-4">

                            <p class="text-sm mb-2 font-bold"></p>
                            <p class="text-sm">Aprendiz</p>
                            <p class="text-sm">Programa: ADSO</p>
                            <p class="text-sm">Ficha: 2711891</p>

                    </div>
                    <ul>
                        <li><a href="{{ route('apprentice.profile') }}" class="block text-center m-4 text-green-600 font-bold bg-white border hover:bg-green-600 hover:text-white border-green-600 rounded-lg py-1">Ver perfil</a></li>
                        <li><a href="{{ route('apprentice.index') }}" class="block text-black hover:bg-white p-4 rounded-lg">Inicio</a></li>
                        <li><a href="{{ route('apprentice.calendar') }}" class="block text-black hover:bg-white p-4 rounded-lg">Calendario</a></li>
                    </ul>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="block text-center m-4 text-green-600 font-bold bg-white border hover:bg-green-600 hover:text-white border-green-600 rounded-lg py-1 w-56">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/vis-timeline/7.4.9/vis-timeline-graph2d.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis-timeline/7.4.9/vis-timeline-graph2d.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        .vis-item.completed {
            background-color: green;
            color: white;
        }
        .vis-item {
            background-color: #3498db;
            color: white;
        }
        .vis-item.vis-selected {
            background-color: #2ecc71;
        }
        .card {
            width: 300px; /* Ajusta el ancho según tus necesidades */
            height: 300px; /* Ajusta la altura según tus necesidades */
            position: relative; /* Necesario para posicionar el texto en el centro */
        }
        #percentage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2rem; /* Ajusta el tamaño de la fuente según tus necesidades */
            font-weight: bold;
            color: black; /* Color del porcentaje */
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
                    <a href="{{ route('apprentice') }}" class="flex items-center">
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
                    <p class="text-sm font-bold mr-[16px] bg-[#f5f4f4] p-1 rounded-lg  z-20">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</p>

                    <!-- Botón de los tres puntos encima de la imagen -->
                    <button id="menuButton" class="absolute top-[-4px] right-0 bg-transparent p-1 mr-[-15%]">
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
                                 <p class="text-sm mt-2">Aprendiz</p>
                             </div>


                         </div>
                         <ul>
                             <li class="mt-2"><a href="{{ route('apprentice.profile') }}" class="block text-center text-green-600 font-bold bg-white border hover:text-white hover:bg-green-600 border-green-600 rounded-lg py-1">Ver perfil</a></li>

                             <li class="mt-2"><a href="{{ route('apprentice.settings') }}" class="block text-black hover:bg-white p-2 rounded-lg">Configuración</a></li>
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
                        <a href="{{ route('apprentice.visit') }}" class="block text-gray-700 hover:bg-gray-100 p-2 rounded-lg">Notificación 1</a>
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
        <div class="w-full flex justify-center">
            <ul class="horizontal-list flex space-x-4 justify-center" >
                <li>
                    <a href="{{ route('apprentice.home') }}" class="block text-white text-center px-4 py-2 rounded-lg  hover:bg-green-700 transition font-bold
                              {{ request()->routeIs('apprentice.home') ? 'bg-green-600' : 'hover:bg-green-600' }}">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ route('apprentice.calendar') }}" class="block text-white text-center bg-transparent px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Calendario
                    </a>
                </li>
            </ul>
        </div>

    </nav>
        {{-- FIN Menu --}}

    <!-- Trainer Container -->
 <div class="flex flex-col md:flex-row w-full px-2 p-[2%] py-4 md:px-10 md:py-0 space-y-4 md:space-y-0 md:space-x-4">
    <div class="w-full max-w-screen-lg mx-auto p-3 bg-gray-100 rounded-lg shadow flex flex-col mt-[1%] ">
        <h2 class="text-lg font-bold">Instructor Asignado</h2>
        <ul class="mt-7 space-y-2 md:space-y-4 text-sm">
            <li><span class="font-semibold">Nombre:</span> Mariany Dorado</li>
            <hr class="border-white">
            <li><span class="font-semibold">Correo:</span> edusena10@gmail.com</li>
            <hr class="border-white">
            <li><span class="font-semibold">Teléfono:</span> 322 546 78 67</li>
            <hr class="border-white">
        </ul>
    </div>
     <!-- Blog Section -->
     <div class="card flex flex-col p-3 mb-1 bg-gray-100 rounded-lg shadow w-full md:w-[25%] md:p-6 mt-[0.5%]">
        <h4 class="text-center text-lg font-bold mb-0">Bitácoras</h4> <!-- Añadido mb-2 para margen inferior -->
        <div class="w-60 h-60 mx-auto flex justify-center items-center"> <!-- Añadido items-center para centrar verticalmente -->
            <canvas id="myChart" class="w-full h-full"></canvas> <!-- Añadido w-full h-full para que el canvas ocupe todo el contenedor -->
        </div>
    </div>
</div>
        <!-- Timeline Section -->
        <div class="w-full md:flex-1 mt-[0.5%] bg-gray-100 rounded-lg shadow mx-auto tarjeta flex flex-col items-center p-8 ">
            <h3 class="text-center text-lg font-bold mb-0">Línea Temporal (Etapa de seguimiento)</h3>
            <div id="timeline" class="w-full h-60 md:h-80 object-cover "></div>
        </div>



    <!-- Scripts for Dropdowns -->
    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            document.getElementById('userMenu').classList.toggle('show');
        });

        document.getElementById('notifButton').addEventListener('click', function() {
            document.getElementById('notifMenu').classList.toggle('show');
        });

        // Close dropdowns when clicking outside
        window.onclick = function(event) {
            if (!event.target.closest('#menuButton') && !event.target.closest('#notifButton')) {
                document.getElementById('userMenu').classList.remove('show');
                document.getElementById('notifMenu').classList.remove('show');
            }
        };
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Evento para el toggle del menú 2
          document.getElementById('toggleMenu2').addEventListener('click', function() {
              console.log('toggleMenu2 clicked'); // Verificar si se activa el evento
              var menu = document.getElementById('menu2');
              menu.classList.toggle('hidden'); // Alternar la clase 'hidden'
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
      });
      </script>


    <script src="{{ asset('js/SuperAdmin.js') }}"></script>
    <script>
        // Función para obtener actividades completadas
        function getCompletedActivities() {
            return JSON.parse(localStorage.getItem('completedActivities')) || []; // Se asegura de que retorne un array vacío si no hay datos
        }

        // Crear elementos para la línea de tiempo
        var items = new vis.DataSet([
            { id: 1, content: 'Asignación', start: '2023-12-29' },
            { id: 2, content: 'Inicio Etapa Productiva', start: '2024-01-01' }, // Completado
    { id: 3, content: 'Primera Visita', start: '2024-02-01' },
    { id: 4, content: 'Segunda Visita', start: '2024-04-01' },
    { id: 5, content: 'Tercera Visita', start: '2024-06-01' },
    { id: 6, content: 'Finalización de Etapa Productiva', start: '2024-08-01' }
]);

        // Opciones de la línea de tiempo
        var options = {
            width: '100%',
            height: '100%', // Ajusta la altura automáticamente
            start: new Date(),
            end: '2024-08-01',
            showCurrentTime: true, // Muestra una línea para el tiempo actual
            zoomMin: 1000 * 60 * 60 * 24 * 30, // Z'oom mínimo: 1 mes
            orientation: { axis: 'top', item:'top' }, // Coloca el eje temporal en la parte superior zoomMax: 1000 * 60 * 60 * 24 * 365 * 2, // Zoom máximo: 2 años
            editable: {
            updateTime: false, // No permite cambiar la hora de los eventos
            updateGroup: false, // No permite cambiar el grupo de los eventos
            add: false, // No permite añadir nuevos eventos
            remove: false // No permite eliminar eventos
            },
            margin: {
            item: 10, // Margen entre los elementos y el eje temporal
            axis: 5 // Margen entre el eje y el borde de la visualización
            },
            stack: true, // Permite apilar eventos que se solapan
            tooltip: {
            followMouse: true, // El tooltip sigue el puntero
           },
            locale: 'es', // Define el idioma como español
           format: {
           minorLabels: {
            minute: 'HH:mm', // Formato de horas y minutos en etiquetas menores
            hour: 'HH:mm', // Formato de horas en etiquetas menores
            day: 'DD-MM', // Formato de día en etiquetas menores
            },
            majorLabels: {
            day: 'MMMM YYYY', // Formato de mes y año en etiquetas mayores
        }
    }
};
        // Función para obtener actividades completadas
        function getCompletedActivities() {
            return JSON.parse(localStorage.getItem('completedActivities')) || [];
        }

        // Crear el contenedor de la línea de tiempo
        var container = document.getElementById('timeline');
        var timeline = new vis.Timeline(container, items, options);

        // Función para actualizar el estado de los eventos en la línea de tiempo
        function updateTimeline() {
            let completedActivities = getCompletedActivities();
            completedActivities.forEach(date => {
                let item = items.get({ filter: function (item) { return item.start === date; } });
                if (item.length > 0) {
                    items.update({ id: item[0].id, className: 'completed' });
                }
            });
        }

        // Actualizar la línea de tiempo al cargar la página
        updateTimeline();
    </script>

    <script>
        //BITACORAS:  Datos del checklist (ejemplo)
        const totalItems = 8; // Total de actividades
        const completedItems = 3; // Actividades completadas (esto debería actualizarse desde tu checklist)

        // Calcular el porcentaje
        const percentage = (completedItems / totalItems) * 100;

        // Colores según el porcentaje
        const getColor = (percentage) => {
            if (percentage < 50) return 'red';
            if (percentage < 75) return 'orange';
            return 'green';
        };

        // Crear gráfico circular
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Completado', 'Pendiente'],
                datasets: [{
                    data: [percentage, 100 - percentage],
                    backgroundColor: [getColor(percentage), '#E0E0E0'], // Color de fondo
                    borderWidth: 0,
                }]
            },
            options: {
                cutout: '70%', // Espacio central
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Ocultar leyenda
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2) + '%';
                            }
                        }
                    }
                }
            }
        });
    </script>

</body>
</html>

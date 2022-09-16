<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">
                    <div class=" md:grid  md:grid-cols-3 gap-y-3 gap-x-2">

                        <!-- Items  -->
                        <div
                            class="transition hover:-translate-y-1 ease-in-out  duration-300   bg-white p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <div>
                                <h2 class="font-extrabold text-gray-700 text-4xl">{{ auth()->user()->sinSolucionar()}}
                                </h2>
                                <p class="text-gray-500 text-xs">Intervenciones Pendientes</p>
                            </div>

                            <div class="bg-red-600 border rounded-lg p-1 ">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class=" w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>

                            </div>
                        </div>
                        <div
                            class="transition hover:-translate-y-1 ease-in-out  duration-300    bg-white p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <div>
                                <h2 class="font-extrabold text-gray-700  text-4xl">{{ auth()->user()->solucionado()}}
                                </h2>
                                <p class="text-gray-500  text-xs">Intervenciones Completadas</p>
                            </div>

                            <div class="bg-green-600 border rounded-lg p-1 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                </svg>


                            </div>
                        </div>
                        <div
                            class="transition hover:-translate-y-1 ease-in-out  duration-300    bg-white p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <div>
                                <h2 class="font-extrabold text-gray-700  text-4xl">{{$incidentes->count()}}</h2>
                                <p class="text-gray-500 text-xs">Total incidentes
                                </p>
                                <p class="text-gray-600 text-xs">Tipo uno: {{$totalTipoUno}},
                                    Tipo dos: {{$totalTipoDos}} </p>
                            </div>

                            <div class="bg-orange-600 border rounded-lg p-1 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                                </svg>



                            </div>
                        </div>

                        {{-- fila dos --}}

                        <div
                            class="transition hover:-translate-y-1 ease-in-out  duration-300    bg-white p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <div>
                                <h2 class="font-extrabold text-gray-700 text-1xl">{{$equipoMayor->nombre_equipo}}</h2>
                                <p class="text-gray-500 text-xs">Equipo con mas intervenciones: {{$cantidadEq}}</p>
                            </div>

                            <div class="bg-gray-600 border rounded-lg p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                                </svg>




                            </div>
                        </div>
                        <div
                            class="transition hover:-translate-y-1 ease-in-out  duration-300    bg-white p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <div>
                                <h2 class="font-extrabold text-gray-700 text-1xl">{{$areaMayorS->area}}</h2>
                                <p class="text-gray-500 text-xs">Area con mas incidentes software: {{$cantidadAreaS}}
                                </p>
                            </div>

                            <div class="bg-indigo-600 border rounded-lg p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
                                </svg>




                            </div>
                        </div>
                        <div
                            class="transition hover:-translate-y-1 ease-in-out  duration-300    bg-white p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <div>
                                <h2 class="font-extrabold text-gray-700 text-1xl">{{$equipoMayor->area->area}}</h2>
                                <p class="text-gray-500 text-xs">Area con mas incidentes Hardware: {{$cantidadEq}}</p>
                            </div>

                            <div class="bg-blue-600 border rounded-lg p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12  h-12 text-white ">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                </svg>




                            </div>
                        </div>
                        <div
                            class="bg-white col-span-1    p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <canvas id="myChart2" width="400" height="200"></canvas>

                        </div>
                        <div
                            class="bg-white col-span-2    p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <canvas id="myChart" width="400" height="200"></canvas>

                        </div>



                        <div
                            class="bg-white col-span-2    p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <canvas id="myChart3" width="400" height="200"></canvas>

                        </div>
                        <div
                            class="bg-white col-span-1    p-4 border rounded-lg shadow-lg flex justify-between items-center">
                            <canvas id="areas" width="400" height="200"></canvas>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="text-center m-2 text-gray-600 pb-2">
        OGTISE - UNIVERSIDAD SANTIAGO ANTUNEZ DE MAYOLO
    </div>



    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        obtenerDatos()
        let areas  = [];
        let gravedades  = [];
        let tipoUno  = [];
        let tipoDos  = [];
        let topEquipos  = [];
        
        async function obtenerDatos() {
            const url = 'api/incidentes'
            const respuesta = await fetch(url);
            datos = await respuesta.json();
            areas = datos.areas;
            gravedades = datos.gravedades;
            tipoUno = datos.tipoUno;    
            tipoDos = datos.tipoDos; 
            topEquipos = datos.topEquipos;   
            console.log(datos);
            mostrarAreas();
            mostrarGravedades();
            mostrarTipos();
            mostrarTopEquipos();
        }


function mostrarTipos(){

    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August","September", "October", "November", "December"];

    getLongMonthName = function(date) {
            return monthNames[date];
    }   
    const dataUno = [0,0,0,0,0,0,0,0,0,0,0,0];
    const dataDos = [0,0,0,0,0,0,0,0,0,0,0,0];

    for (let index = 0; index <= dataUno.length ; index++) {
        tipoUno.forEach(tipo => {
                if(tipo.mes === index ){  
                    dataUno.splice(index-1,0, tipo.total)    
                    dataUno.splice(index,1)      
                }       
        })
     
    }

    for (let index = 0; index <= dataDos.length ; index++) {
        tipoDos.forEach(tipo => {
                if(tipo.mes === index ){  
                    dataDos.splice(index-1,0, tipo.total)    
                    dataDos.splice(index,1)      
                }       
        })
     
    }

console.log(dataDos);

    const data = {
        labels: monthNames,
        datasets: [{
            type: 'line',
            label: 'Tipo 1',
            data: dataUno,
            borderColor: 'rgb(255, 99, 132)',
            
            fill: true,
        }, {
            type: 'line',
            label: 'Tipo 2',
            data: dataDos,
            fill: true,
            borderColor: 'rgb(54, 162, 235)'
        }]
};

    const config = {
        type: 'line',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
       }
    };


    const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx,  config);
}
      
function mostrarGravedades(){
    
    const ct = document.getElementById('myChart2');
        const myChart2 = new Chart(ct, {
            type: 'doughnut',
            data: {
                labels: gravedades.map(gravedad => gravedad.importancia),
                datasets: [{
             
                    data: gravedades.map(gravedad => gravedad.total),
                    backgroundColor: [ 
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                       
                        
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        
                        
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    title: {
                        display: true,
                       
                        text: 'CANTIDAD DE INCIDENTES POR GRAVEDAD'
                    }
                }
            }
        });

}

function mostrarAreas(){
    

    const c3 = document.getElementById('areas');
       
        const myChart3 = new Chart(c3, {      
            type: 'pie',
            data: {
                labels: areas.map(area => area.area),
                datasets: [{
                    label: '# of Votes', 
                    data: areas.map(area => area.total),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },plugins: {
                    title: {
                        display: true,
                       
                        text: 'CANTIDAD DE INCIDENTES POR AREA'
                    }
                }
            }
                
        });

}
function mostrarTopEquipos(){
    


    const c4 = document.getElementById('myChart3');
        const myChart4 = new Chart(c4, {
            type: 'bar',
            data: {
                labels: topEquipos.map(equipo => equipo.equipo),
                datasets: [{
                
                    data: topEquipos.map(equipo => equipo.total),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,    
                        text: 'TOP 5 EQUIPOS CON MAS INTERVENCIONES'
                    }
                }
            }
        });
}


    </script>
    @endpush
</x-app-layout>
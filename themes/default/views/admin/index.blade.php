<x-admin-layout>
    <x-slot name="title">
        {{ __('General') }}
    </x-slot>
    <div class="dark:bg-darkmode py-10">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-darkmode2 overflow-hidden bg-white shadow-sm sm:rounded-lg p-4 grid md:grid-cols-3">
                <!-- show ticketclosed, tickets, orders -->
                <div class="dark:bg-darkmode dark:border-darkmode p-10 bg-white border-2 rounded-xl border-grey-600 col-span-2">
                    <div class="grid grid-cols-3 p-2 pb-10">
                        <div class="dark:bg-darkmode2 bg-normal rounded-md mr-3 p-2">
                            <h1 class="dark:text-darkmodetext text-xl text-gray-500">Revenue today</h1>
                            <p class="dark:text-darkmodetext text-black font-bold text-2xl">20€</p>
                        </div>
                        <div class="dark:bg-darkmode2 bg-normal rounded-md mr-3 p-2">
                            <h1 class="dark:text-darkmodetext text-xl text-gray-500">Tickets today</h1>
                            <p class="dark:text-darkmodetext text-black font-bold text-2xl">5</p>
                        </div>
                        <div class="dark:bg-darkmode2 bg-normal rounded-md p-2">
                            <h1 class="dark:text-darkmodetext text-xl text-gray-500">Revenue Total</h1>
                            <p class="dark:text-darkmodetext text-black font-bold text-2xl">500$</p>
                        </div>
                    </div>
                    <canvas id="myChart" style="width:100%;max-height:400px;"></canvas>
                </div>
                <div class="dark:bg-darkmode dark:border-darkmode p-10 bg-white border-2 rounded-xl border-grey-600 ml-4">
                    <h1 class="dark:text-darkmodetext text-xl text-gray-500">Recent tickets</h1>
                    <div class="grid grid-cols-1 gap-4">
                    @foreach(App\Models\Tickets::all()->take(3) as $ticket)
                    <a href="/admin/tickets/{{$ticket->id}}">   
                        <div class="dark:hover:bg-darkbutton dark:bg-darkmode2 bg-normal rounded-md p-2">
                                <h1 class="dark:text-darkmodetext text-xl text-gray-500">Ticket #{{$ticket->id}}</h1>
                                <p class="dark:text-darkmodetext text-black font-bold text-2xl">{{ $ticket->title }} 
                                    @if($ticket->priority == 'high')
                                        <span class="bg-red-500 text-white rounded-full p-1 text-base">High</span>
                                    @elseif($ticket->priority == 'medium')
                                        <span class="bg-yellow-500 text-white rounded-full p-1 text-base" >Medium</span>
                                    @elseif($ticket->priority == 'low')
                                        <span class="bg-green-500 text-white rounded-full p-1 text-base">Low</span>
                                    @endif

                                    </p>
                            </div>
                        </a> 
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="dark:text-darkmodetext">

            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Revenue', 'Tickets', 'Orders', 
                ],
                datasets: [{
                        label: "Yesterday",
                        backgroundColor: "#CFE2FD",
                        data: [3, 7, 4]
                    },
                    {
                        label: "Today",
                        backgroundColor: "#5270FD",
                        data: [4, 3, 5]
                    },
                ]


            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-admin-layout>
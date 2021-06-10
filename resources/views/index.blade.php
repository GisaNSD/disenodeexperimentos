<!DOCTYPE html>
<html lang="es">
<x-head />
<body>
    <div class="flex justify-center flex-col">
        <h1 class="text-gray-600 text-center my-20 text-3xl md:text-4xl lg:text-6xl lg:my-32">Elija su fase y su grupo.</h1>
        <div class="flex mx-auto">
            <div>
                <button id="fase1" class="flex sm:block mx-32 px-20 py-3 lg:text-3xl text-gray-button transition duration-500 ease-in-out bg-blue-button hover:bg-gray-button hover:text-blue-button transform hover:-translate-y-1 hover:scale-110 ">Fase 1</button>
                
                <div id="groups1" class="flex justify-center mx-automy-12 my-5 animate-fade-in-down hidden">
                    <a href="{{route('fase1', 1)}}">
                        <x-button>Grupo 1</x-button>
                    </a>
                    <a href="{{route('fase1', 0)}}">
                        <x-button>Grupo 2</x-button>
                    </a>
                </div>
            </div>
            
            <div>

                <button id="fase2" class="flex sm:block mx-32 px-20 py-3 text-3xl text-gray-button transition duration-500 ease-in-out bg-blue-button hover:bg-gray-button hover:text-blue-button transform hover:-translate-y-1 hover:scale-110 ">Fase 11</button>
            
                <div id="groups2" class="grid grid-cols-3 absolute my-5 animate-fade-in-down hidden">

                    <a href="{{route('fase2Desc', 'ren')}}">
                        <x-button>Grupo 1</x-button>
                    </a>
                    <a href="{{route('fase2Asc', 'imp')}}">
                        <x-button>Grupo 2</x-button>
                    </a>
                    <a href="{{route('fase2Desc', 'exp')}}">
                        <x-button>Grupo 3</x-button>
                    </a>
                    <a href="{{route('fase2Asc', 'ren')}}">
                        <x-button>Grupo 4</x-button>
                    </a>
                    <a href="{{route('fase2Desc', 'imp')}}">
                        <x-button>Grupo 5</x-button>
                    </a>
                    <a href="{{route('fase2Asc', 'exp')}}">
                        <x-button>Grupo 6</x-button>
                    </a>
                    <a href="{{route('fase2DesInfo', 'ren')}}">
                        <x-button>Grupo 7</x-button>
                    </a>
                    <a href="{{route('fase2AsInfo', 'imp')}}">
                        <x-button>Grupo 8</x-button>
                    </a>
                    <a href="{{route('fase2DesInfo', 'exp')}}">
                        <x-button>Grupo 9</x-button>
                    </a>
                    <a href="{{route('fase2AsInfo', 'ren')}}">
                        <x-button>Grupo 10</x-button>
                    </a>
                    <a href="{{route('fase2DesInfo', 'imp')}}">
                        <x-button>Grupo 11</x-button>
                    </a>
                    <a href="{{route('fase2AsInfo', 'exp')}}">
                        <x-button>Grupo 12</x-button>
                    </a>
                </div>
        </div>
            
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<x-head />
<body>

    <x-title />
    
    <form action="{{ route('resultsFase2Asc')}}" action="send" method="POST">
    @csrf
        @foreach($images as $image)
        <div class="mb-20">
                <h3 class="text-xl text-center mt-10 mb-3 font-bold font-serif">"{{$image->title}}" - {{$image->author}}</h3>
                <figure>
                <img class="mx-auto mb-4 h-96 w-auto shadow-lg" src="{{asset($image->link)}}">
                <figcaption class="text-center">
                    <span class="font-bold ml-2">Location: </span>{{$image->location}} 
                    <span class="font-bold ml-2">Price: </span>{{$image->price}}</figcaption>
                </figure>
                
            <div class="flex flex-col justify-center">
                <x-puntuacion />
               
                <input name="points{{$image->id}}" id="myRange" class="h-auto w-3/6 m-auto" type="range" value="5" min=0 max=10 step="0.01">
               
                <x-numbers-range></x-numbers-range>

            </div>
        </div>
        @endforeach
        <input type="submit" class="flex mx-auto my-10 py-3 px-10 bg-blue-button text-gray-button"></input>
    </form>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
       <x-alert />
    </script>
</body>
</html>
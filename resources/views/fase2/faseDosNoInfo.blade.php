<!DOCTYPE html>
<html lang="en">
<x-head />
<body>

<x-title />
    
    <form action="{{ route('resultsFase2Asc')}}" method="POST">
    @csrf
        @foreach($images as $image)
        <img class="flex mx-auto mt-16 mb-4 h-96 w-auto shadow-lg" src="{{asset($image->link)}}">
        <div class="flex flex-col justify-center">
            <label for="points{{$image->id}}" class="text-center m-4 select-none">Puntuación:</label>
            
            <input name="points{{$image->id}}" id="myRange" class="h-auto w-3/6 m-auto" type="range" value="5" min=0 max=10 step="0.01">
          
           <x-numbers-range></x-numbers-range>
        
        </div>
        @endforeach
        <input class="flex mx-auto my-10 py-3 px-10 bg-blue-button text-gray-button" type="submit"></input>
    </form>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
      <x-alert />
    </script>
</body>
</html>
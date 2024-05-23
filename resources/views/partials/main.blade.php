{{-- @extends('layout.AppLayout')

@section('content')
<div>
    <p>ciao</p>
     @foreach ($movies as $movie)
        <p>{{$movie->title}}</p>
    @endforeach
    
</div>
   

@endsection

@section('title', 'movies') --}}

<div class="container">
    <div class="riga">
        @foreach ($movies as $movie)
        <div class="col">
            
             <p>{{$movie->title}}</p>
             <p>{{$movie->date}}</p>
             <p>{{$movie->vote}}</p>
        </div>
        @endforeach

    </div> 
</div>
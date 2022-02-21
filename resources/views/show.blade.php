@extends('guest.layout.base')

@section('documentTitle')
Treni
    
@endsection


@section('content')
<div class="card m-2  align-items-center justify-content-center">
    <h1>{{ $train->company }}</h1>
    <h2>Data Partenza: {{ $train->date_start }}</h2>
    <h2>Ora Partenza: {{ $train->hours_start }}</h2>
    <h2> Ora Arrivo: {{ $train->hours_end }}</h2>
    <h2>Data Arrivo: {{ $train->date_end }}</h2>
    <h2>{{ $train->code_train }}</h2>   
    

    @if ($train->deleted == true)
        <h2> treno cancellato</h2>
    @else
        @if ($train->on_time == true)
            <h2> in orario</h2>
        @else
            <h2>Treno in ritardo </h2> 
        @endif
    
    @endif

    <a href="{{ route('home', $train) }}" class="btn btn-primary">Return</a> 

</div>
    
@endsection
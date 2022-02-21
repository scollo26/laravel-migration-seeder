@extends('guest.layout.base')


@section('content')
@foreach ($trains as $train)
<div class="card m-2  align-items-center justify-content-center">
    
    <h1>Comapagina Treno: {{ $train->company }}</h1>
    <h4>Stazione Partenza: {{ $train->depart_station }}</h4>
    <h5>Stazione Arrivo: {{ $train->arrived_station }}</h5>
    {{-- <h2>Data Partenza: {{ $train->date_start }}</h2>
    <h2>Ora Partenza: {{ $train->hours_start }}</h2>
    <h2> Ora Arrivo: {{ $train->hours_end }}</h2>
    <h2>Data Arrivo: {{ $train->date_end }}</h2>
    <h2>{{ $train->code_train }}</h2> --}}
    <a href="{{ route('show', $train) }}" class="btn btn-primary">View Train</a>
</div>
@endforeach

@endsection
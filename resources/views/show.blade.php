@extends('layouts.base')

@section('documentTitle')
Treni
    
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{ $train->company }}</h1>
        </div>
    </div>
</div>
@endsection
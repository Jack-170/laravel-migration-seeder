@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="row">
    @foreach($trains as $train)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Azienda:{{ $train->azienda }}</p>
                    <p class="card-text">Stazione di Partenza: {{ $train->stazione_partenza }}</p>
                    <p class="card-text">Stazione di Arrivo: {{ $train->stazione_arrivo }}</p>
                    <p class="card-text">Orario di Partenza: {{ $train->orario_partenza }}</p>
                    <p class="card-text">Orario di Arrivo: {{ $train->orario_arrivo }}</p>
                    <p class="card-text">Data di Partenza: {{ $train->data_partenza }}</p>
                    <p class="card-text">Codice Treno: {{ $train->codice_treno }}</p>
                    <p class="card-text">Numero Carrozze: {{ $train->numero_carrozze }}</p>
                    <p class="card-text">In Orario: {{ $train->in_orario ? 'Sì' : 'No' }}</p>
                    <p class="card-text">Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

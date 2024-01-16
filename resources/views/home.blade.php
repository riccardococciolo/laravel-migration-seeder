@extends('layouts.app')

@section('content')
    <h1 class="text-center pb-5">Treni in partenza oggi</h1>
    <div class="row row-cols-4 g-0">
    @foreach ($trains as $train)
    <div class="col g-5">
        <div class="card">
            <div class="card-header">
                {{ $train->company }}
            </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Stazione di partenza: {{ $train->departure_station }}</li>
                  <li class="list-group-item">Stazione di arrivo: {{ $train->arrival_station }}</li>
                  <li class="list-group-item">Data di partenza: {{ $train->departure_date }}</li>
                  <li class="list-group-item">Ora della partenza: {{ $train->departure_time }}</li>
                  <li class="list-group-item">Data di arrivo: {{ $train->arrival_date }}</li>
                  <li class="list-group-item">Ora di arrivo: {{ $train->arrival_time }}</li>
                  <li class="list-group-item">Codice del treno: {{ $train->train_code }}</li>
                  <li class="list-group-item">Numero della carrozza: {{ $train->carriages_number }}</li>
                  <li class="list-group-item">In tempo: {{ $train->on_time }}</li>
                  <li class="list-group-item">Cancellato: {{ $train->canceled }}</li>
                </ul>
              </div>
    </div>
    @endforeach
    </div>
@endsection
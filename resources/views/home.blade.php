@extends('layouts.main')

@section('content')

@include('partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE']);
@include('partials.cards', ['cards' => $corte, 'title' => 'LE CORTE']);
@include('partials.cards', ['cards' => $cortissime, 'title' => 'LE CORTISSIME']);



{{-- @if (! empty($corte))
<section class="type container">
    <h2>LE LUNGHE</h2>

    <div class="cards">
        @foreach($lunghe as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>

                <a href="{{ route('product', $card['id']) }}">Vedi prodotto</a>
            </div>
        @endforeach
    </div>
</section>
@endif

@if (! empty($corte))
<section class="type container">
    <h2>LE CORTE</h2>

    <div class="cards">
        @foreach($corte as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>

                <a href="{{ route('product', $card['id']) }}">Vedi prodotto</a>
            </div>
        @endforeach
    </div>
</section>
@endif

@if (! empty($corte))
<section class="type container">
    <h2>LE CORTISSIME</h2>

    <div class="cards">
        @foreach($cortissime as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>

                <a href="{{ route('product', $card['id']) }}">Vedi prodotto</a>
            </div>
        @endforeach
    </div>
</section>
@endif --}}

@endsection
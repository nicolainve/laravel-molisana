@extends('layouts.main')

@section('content')

<main class="main-content">
    
    @include('partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE'])
    @include('partials.cards', ['cards' => $corte, 'title' => 'LE CORTE'])
    @include('partials.cards', ['cards' => $cortissime, 'title' => 'LE CORTISSIME'])

</main>

@endsection
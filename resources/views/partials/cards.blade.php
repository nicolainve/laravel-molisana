@if (! empty($cards))
<section class="type container">
    <h2>{{ $title }}</h2>

    <div class="cards">
        @foreach($cards as $card)
            <div class="card">
                <a href="{{ route('product', $card['id']) }}">
                    <img href="{{ route('product', $card['id']) }}" src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                </a>
            </div>
        @endforeach
    </div>
</section>
@endif
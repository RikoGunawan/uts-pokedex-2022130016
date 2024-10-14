@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($pokemons as $pokemon)
                <div class="col">
                    <div class="card photo-frame" style="width: 18rem;">
                        <a href="{{ route('pokemon.show', $pokemon) }}">
                            <img src="{{ Storage::url($pokemon->photo) }}" class="card-img-top photo-frame-img"
                                alt="Pokemon Image"
                                onerror="this.onerror=null;this.src='https://placehold.co/200';">
                        </a>

                        <div class="card-body">
                            <h8 class="card-text">{{ Str::padLeft($pokemon->id, 5, '#000') }}</h8>
                            <h5 class="card-title">
                                <a href="{{ route('pokemon.show', $pokemon) }}"
                                    style="text-decoration: none; color: inherit; font-weight: bold;">
                                    {{ $pokemon->name }}
                                </a>
                            </h5>
                            <span class="badge rounded-pill bg-success">{{ $pokemon->primary_type }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-4">
                {{ $pokemons->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection

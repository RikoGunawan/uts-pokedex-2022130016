@extends('layouts.app')
{{-- Made by: Riko Gunawan --}}
@section('content')
    <div class="container">
        <main>
            <h3 class="text-center">Create Your Pokemon</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('pokemon.store') }}" method="POST" enctype="multipart/form-data">
                <div class='row g-2'>
                    @csrf
                    <div class="row g-2">
                        <div class="col-5">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" placeholder="Pokemon name" value="{{ old('name') }}">
                        </div>
                        <div class="col-7">
                            {{-- grid kosong --}}
                        </div>

                        <div class="col-8">
                            <label class="form-label" for="species">Species</label>
                            <input class="form-control @error('species') is-invalid @enderror" type="text" id="species"
                                name="species" placeholder="Pokemon species" value="{{ old('species') }}">
                        </div>
                        <div class="col-4">
                            {{-- grid kosong --}}
                        </div>
                        <div class="col-8">
                            <label for="inputState" class="form-label">Primary Type</label>
                            <select class="form-select @error('primary_type') is-invalid @enderror"
                            id="primary_type" name="primary_type">
                            {{-- Note: Repopulate khusus @selected syntax blade untuk cek status selected --}}
                            <option value="" disabled @selected(old('primary_type') == '')>Choose primary type</option>
                            <option value="Grass" @selected(old('primary_type') == 'Grass')>Grass</option>
                            <option value="Fire" @selected(old('primary_type') == 'Fire')>Fire</option>
                            <option value="Water" @selected(old('primary_type') == 'Water')>Water</option>
                            <option value="Bug" @selected(old('primary_type') == 'Bug')>Bug</option>
                            <option value="Normal" @selected(old('primary_type') == 'Normal')>Normal</option>
                            <option value="Poison" @selected(old('primary_type') == 'Poison')>Poison</option>
                            <option value="Electric" @selected(old('primary_type') == 'Electric')>Electric</option>
                            <option value="Ground" @selected(old('primary_type') == 'Ground')>Ground</option>
                            <option value="Fairy" @selected(old('primary_type') == 'Fairy')>Fairy</option>
                            <option value="Fighting" @selected(old('primary_type') == 'Fighting')>Fighting</option>
                            <option value="Psychic" @selected(old('primary_type') == 'Psychic')>Psychic</option>
                            <option value="Rock" @selected(old('primary_type') == 'Rock')>Rock</option>
                            <option value="Ghost" @selected(old('primary_type') == 'Ghost')>Ghost</option>
                            <option value="Ice" @selected(old('primary_type') == 'Ice')>Ice</option>
                            <option value="Dragon" @selected(old('primary_type') == 'Dragon')>Dragon</option>
                            <option value="Dark" @selected(old('primary_type') == 'Dark')>Dark</option>
                            <option value="Steel" @selected(old('primary_type') == 'Steel')>Steel</option>
                            <option value="Flying" @selected(old('primary_type') == 'Flying')>Flying</option>
                            </select>
                        </div>

                        <div class="col-4">
                            {{-- grid kosong --}}
                        </div>

                        <div class="col-2">
                            <label class="form-label" for="weight">Weight</label>
                            <input class="form-control @error('weight') is-invalid @enderror" type="number" name = "weight"
                                placeholder="" value="{{ old('weight') }}">
                        </div>
                        <div class="col-2">
                            <label class="form-label" for="height">Height</label>
                            <input class="form-control @error('height') is-invalid @enderror" type="number" name = "height"
                                placeholder="" value="{{ old('height') }}">
                        </div>
                        <div class="col-8">
                            {{-- grid kosong --}}
                        </div>

                        <div class="col-1">
                            <label class="form-label" for="hp">HP</label>
                            <input class="form-control @error('hp') is-invalid @enderror" type="number"name="hp"
                                id="hp" value="{{ old('hp') }}" placeholder="">
                        </div>
                        <div class="col-1">
                            <label class="form-label" for="attack">ATK</label>
                            <input class="form-control @error('attack') is-invalid @enderror" type="number" name="attack"
                                placeholder="" value="{{ old('attack') }}">
                        </div>
                        <div class="col-1">
                            <label class="form-label" for="defense">Defense</label>
                            <input class="form-control @error('defense') is-invalid @enderror" type="number" name="defense"
                                value="{{ old('defense') }}">
                        </div>
                        <div class="col-9">
                            {{-- grid kosong --}}
                        </div>
                        <div class="col-2">
                            <label class="form-label" for="is_legendary">Rarity</label>
                            <div>
                                <input type="hidden" name="is_legendary" value="0">

                                <input class="form-check-input @error('is_legendary') is-invalid @enderror" type="checkbox"
                                name="is_legendary" id="is_legendary" value="1" {{ old('is_legendary') ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_legendary">Legendary</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <label class="form-label" for="photo">Photo</label>
                            <input class="form-control @error('photo') is-invalid @enderror" type="file"
                                name="photo" value="{{ old('photo') }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                    <button type="reset" class="btn btn-danger mt-4">Reset</button>

                </div>
        </main>
    </div>
@endsection

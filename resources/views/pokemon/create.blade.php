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
                            for="primary_type" id="primary_type" name="primary_type" value="{{ old('primary_type') }}">
                                <option value="" disabled selected>Choose primary type</option>
                                <option value="1">Grass</option>
                                <option value="2">Fire</option>
                                <option value="3">Water</option>
                                <option value="4">Bug</option>
                                <option value="5">Normal</option>
                                <option value="6">Poison</option>
                                <option value="7">Electric</option>
                                <option value="8">Ground</option>
                                <option value="9">Fairy</option>
                                <option value="10">Fighting</option>
                                <option value="11">Psychic</option>
                                <option value="12">Rock</option>
                                <option value="13">Ghost</option>
                                <option value="14">Ice</option>
                                <option value="15">Dragon</option>
                                <option value="16">Dark</option>
                                <option value="17">Steel</option>
                                <option value="18">Flying</option>
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
                                id="hp" value="{{ old('wholesale_price') }}" placeholder="">
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
                                <input class="form-check-input @error('is_legendary') is-invalid @enderror" type="checkbox" name="is_legendary" id="is_legendary">
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

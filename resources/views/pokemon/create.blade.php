@extends('layouts.app')
{{-- Made by: Riko Gunawan --}}
@section('content')
    <div class="container">
        <main>
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
                <div class='row'>
                    @csrf
                    <div class="row">
                        <div class="col-5">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                        </div>
                        <div class="col-7">
                            {{-- grid kosong --}}
                        </div>

                        <div class="col-8">
                            <label class="form-label" for="species">Species</label>
                            <input class="form-control @error('species') is-invalid @enderror" type="text" id="species" name="species" placeholder="species" value="{{ old('species') }}">
                        </div>
                        <div class="col-4">
                            {{-- grid kosong --}}
                        </div>
                        <div class="col-8">
                            <label class="form-label" for="primary_type">Primary Type</label>
                            <input class="form-control @error('primary_type') is-invalid @enderror" type="text" id="primary_type" name="primary_type" placeholder="primary_type" value="{{ old('primary_type') }}">
                        </div>
                        <div class="col-4">
                            {{-- grid kosong --}}
                        </div>

                        <div class="col-5">
                            <label class="form-label" for="weight">Weight</label>
                            <input class="form-control @error('weight') is-invalid @enderror" type="number" name = "weight" placeholder="" value="{{ old('weight') }}">
                        </div>
                        <div class="col-5">
                            <label class="form-label" for="height">Height</label>
                            <input class="form-control @error('height') is-invalid @enderror" type="number" name = "height" placeholder="" value="{{ old('height') }}">
                        </div>
                        <div class="col-2">
                            {{-- grid kosong --}}
                        </div>

                        <div class="col-4">
                            <label class="form-label" for="hp">HP</label>
                            <input class="form-control @error('hp') is-invalid @enderror" type="number"name="hp" id="hp" value="{{ old('wholesale_price') }}"
                                placeholder="">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="attack">ATK</label>
                            <input class="form-control @error('attack') is-invalid @enderror" type="number" name="attack" placeholder="" value="{{ old('attack') }}">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="defense">Defense</label>
                            <input class="form-control @error('defense') is-invalid @enderror" type="number" name="defense" value="{{ old('defense') }}">
                        </div>

                        <div class="col-3">
                            {{-- grid kosong --}}
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="photo">Photo</label>
                            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" value="{{ old('photo') }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                    <button type="reset" class="btn btn-danger mt-4">Reset</button>

                </div>
        </main>
    </div>
@endsection

@extends('layouts.app')

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

            <form action="{{ route('pokemons.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="form-label" for="retail_price">Retail Price</label>
                            <input class="form-control @error('retail_price') is-invalid @enderror" type="number" name = "retail_price" placeholder="" value="{{ old('retail_price') }}">
                        </div>
                        <div class="col-7">
                            {{-- grid kosong --}}
                        </div>
                        <div class="col-5">
                            <label class="form-label" for="wholesale_price">Wholesale Price</label>
                            <input class="form-control @error('wholesale_price') is-invalid @enderror" type="number"name="wholesale_price" id="wholesale_price" value="{{ old('wholesale_price') }}"
                                placeholder="">
                        </div>
                        <div class="col-2">
                            <label class="form-label" for="min_wholesale_qty">Min Wholesale Qty</label>
                            <input class="form-control @error('min_wholesale_qty') is-invalid @enderror" type="number" name="min_wholesale_qty" placeholder="" value="{{ old('min_wholesale_qty') }}">
                        </div>
                        <div class="col-2">
                            <label class="form-label" for="quantity">Quantity</label>
                            <input class="form-control @error('quantity') is-invalid @enderror" type="number" name="quantity" value="{{ old('quantity') }}">
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

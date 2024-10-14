@extends('layouts.app')

@section('content')

    <div class="container-fluid mt-3">
        <div class="container-fluid">
            <a class="btn btn-primary" href="{{ route('pokemon.create') }}">Add New</a>
            <main>
                <table class="table table-striped table-hover border-primary mt-3">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Species</th>
                            <th>Primary Type</th>
                            <th>Power</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pokemons as $pokemon)
                            <tr>
                                <td>{{ Str::padLeft($pokemon->id, 5, '#000') }}</td>
                                <td>
                                    <a href="{{ route('pokemon.show', $pokemon) }}">
                                        {{ $pokemon->name }}
                                    </a>
                                </td>
                                <td>{{ $pokemon->species }}</td>
                                <td>{{ $pokemon->primary_type }}</td>
                                <td>{{ $pokemon->hp + $pokemon->attack + $pokemon->defense }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class = "btn btn-warning" href="{{ route('pokemon.edit', $pokemon) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pokemons->links() }}
            </main>
            {{-- <button class="btn btn-primary" href="{{ route('book.form') }}">Tambah Buku</button> --}}
        </div>
    </div>
@endsection

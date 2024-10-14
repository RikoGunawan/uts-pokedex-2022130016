@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            <div class="row">
                {{-- POKEMON DETAIL CARD --}}
                <div class="col-md-5">
                    <div class="card photo-frame-detail" style="width: 100%; max-width: 350px;">
                        <img src="{{ Storage::url($pokemon->photo) }}" class="card-img-top photo-frame-detail-img" alt="{{ $pokemon->name }}">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; font-weight: bold">{{ $pokemon->name }}</h5>
                            <div class="stats-box">
                                <p style="text-align: left;">
                                    <span style="display: inline-block; width: 120px;"><strong>Species</strong></span> {{ $pokemon->species }}<br>
                                    <span style="display: inline-block; width: 120px;"><strong>Primary Type</strong></span> {{ $pokemon->primary_type }}<br>
                                    <span style="display: inline-block; width: 120px;"><strong>Weight</strong></span> {{ $pokemon->weight }}<br>
                                    <span style="display: inline-block; width: 120px;"><strong>Height</strong></span> {{ $pokemon->height }}<br>
                                    <span style="display: inline-block; width: 120px;"><strong>HP</strong></span> {{ $pokemon->hp }}<br>
                                    <span style="display: inline-block; width: 120px;"><strong>ATK</strong></span> {{ $pokemon->attack }}<br>
                                    <span style="display: inline-block; width: 120px;"><strong>DEF</strong></span> {{ $pokemon->defense }}<br>
                                    <span style="display: inline-block; width: 120px;"><strong>Rarity</strong></span> {{ $pokemon->is_legendary ? 'Legendary' : 'Normal' }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- POKEMON STATS --}}
                <div class="col-md-6">
                    <h2>Description</h2>
                    <br>
                    <table class="table table-bordered table-hover table-primary">
                        <tbody>
                            <tr>
                                <td><b>Name</b></td>
                                <td>{{ $pokemon->name }}</td>
                            </tr>
                            <tr>
                                <td><b>Species</b></td>
                                <td>{{ $pokemon->species }}</td>
                            </tr>
                            <tr>
                                <td><b>Primary Type</b></td>
                                <td>{{ $pokemon->primary_type }}</td>
                            </tr>
                            <tr>
                                <td><b>Weight</b></td>
                                <td>{{ $pokemon->weight }}</td>
                            </tr>
                            <tr>
                                <td><b>Height</b></td>
                                <td>{{ $pokemon->height }}</td>
                            </tr>
                            <tr>
                                <td><b>HP</b></td>
                                <td>{{ $pokemon->hp }}</td>
                            </tr>
                            <tr>
                                <td><b>ATK</b></td>
                                <td>{{ $pokemon->attack }}</td>
                            </tr>
                            <tr>
                                <td><b>DEF</b></td>
                                <td>{{ $pokemon->defense }}</td>
                            </tr>
                            <tr>
                                <td><b>Rarity</b></td>
                                <td>{{ $pokemon->is_legendary ? 'Legendary' : 'Normal' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
@endsection

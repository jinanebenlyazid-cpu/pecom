@extends('Master_page')
@section('title','Produits')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4 text-center">Liste des Produits</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td class="fw-semibold">{{ $item['nom'] }}</td>
                    <td>{{ $item['prix'] }} DH.</td>
                    <td>
                        <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['nom'] }}" class="img-thumbnail" style="width: 90px; height: 90px; object-fit: cover;">
                    {{ asset('images/' . $item['image']) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

@extends('layout')

@section('content')
    <h1 >Liste des Produits</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product['libelle'] }}</td>
                    <td>{{ $product['marque'] }}</td>
                    <td>{{ $product['prix'] }}</td>
                    <td>{{ $product['stock'] }}</td>
                    <td>
                        <a href="{{ route('products.show', $key) }}">Voir</a>
                        <a href="{{ route('products.edit', $key) }}">Modifier</a>
                        <form action="{{ route('products.destroy', $key) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Aucun produit trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('products.create') }}">Créer un nouveau produit</a>
@endsection

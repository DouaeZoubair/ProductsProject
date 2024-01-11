@extends('layout')

@section('content')
    <h1>Modifier le Produit</h1>

    <form action="{{ route('products.update', $id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="libelle">Libellé:</label>
        <input type="text" name="libelle" value="{{ $product['libelle'] }}" required><br>

        <label for="marque">Marque:</label>
        <input type="text" name="marque" value="{{ $product['marque'] }}" required><br>

        <label for="prix">Prix:</label>
        <input type="number" name="prix" step="0.01" value="{{ $product['prix'] }}" required><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $product['stock'] }}" required><br>

        <button type="submit">Mettre à jour le produit</button>
    </form>
    
    <a href="{{ route('products.index') }}">Retour à la liste des produits</a>
@endsection

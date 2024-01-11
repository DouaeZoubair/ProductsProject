@extends('layout')

@section('content')
    <h1>Créer un Nouveau Produit</h1>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="libelle">Libellé:</label>
        <input type="text" name="libelle" required><br>

        <label for="marque">Marque:</label>
        <input type="text" name="marque" required><br>

        <label for="prix">Prix:</label>
        <input type="number" name="prix" step="0.01" required><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" required><br>


        <button type="submit">Créer le produit</button>
    </form>
    
    <a href="{{ route('products.index') }}">Retour à la liste des produits</a>
@endsection

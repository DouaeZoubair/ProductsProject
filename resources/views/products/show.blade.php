@extends('layout')

@section('content')
    <h1>Détails du Produit</h1>

    <ul>
        <li><strong>Libellé:</strong> {{ $product['libelle'] }}</li>
        <li><strong>Marque:</strong> {{ $product['marque'] }}</li>
        <li><strong>Prix:</strong> {{ $product['prix'] }}</li>
        <li><strong>Stock:</strong> {{ $product['stock'] }}</li>
    </ul>

    <a href="{{ route('products.index') }}">Retour à la liste des produits</a>
@endsection

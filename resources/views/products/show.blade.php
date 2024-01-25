@extends('layout')

@section('content')
    <div class="container">
        <h2>Product Details</h2>

        <div>
            <strong>ID:</strong> {{ $product->id }}<br>
            <strong>Libelle:</strong> {{ $product->Libelle }}<br>
            <strong>Marque:</strong> {{ $product->Marque }}<br>
            <strong>Prix:</strong> {{ $product->Prix }}<br>
            <strong>Stock:</strong> {{ $product->Stock }}<br>
        </div>

        <div class="mt-3">
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>
        </div>
    </div>
@endsection

@extends('layout')

@section('content')
    <div class="container">
        <h2>Create Product</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Libelle">Libelle:</label>
                <input type="text" name="Libelle" class="form-control" required>
                <label for="marque">Marque:</label>
                <input type="text" name="marq" class="form-control" required>
                <label for="prix">Prix:</label>
                <input type="number" name="prx" class="form-control" required>
                <label for="Stock">Stock:</label>
                <input type="number" name="stck" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection

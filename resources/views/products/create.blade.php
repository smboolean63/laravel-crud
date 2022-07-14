@extends('layouts.base')

@section('page-title')
    Creazione nuovo prodotto
@endsection

@section('page-content')
    <h1>Crea un nuovo prodotto</h1>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia pasta</label>
            <select class="form-select" id="type" name="type">
                <option value="corta">Corta</option>
                <option value="cortissima">Cortissima</option>
                <option value="lunga">Lunga</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="cooking_time" class="form-label">Tempo cottura</label>
            <input type="number" class="form-control" id="cooking_time" name="cooking_time">
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso in gr</label>
            <input type="number" class="form-control" id="weight" name="weight">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection
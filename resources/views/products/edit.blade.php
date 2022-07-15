@extends('layouts.base')

@section('page-title')
    Modifica {{$product->title}}
@endsection

@section('page-content')
    <h1>Modifica {{$product->title}}</h1>

    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia pasta</label>
            <select class="form-select" id="type" name="type">
                <option value="corta" {{$product->type == 'corta' ? 'selected' : ''}}>Corta</option>
                <option value="cortissima" {{$product->type == 'cortissima' ? 'selected' : ''}}>Cortissima</option>
                <option value="lunga" {{$product->type == 'lunga' ? 'selected' : ''}}>Lunga</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="cooking_time" class="form-label">Tempo cottura</label>
            <input type="number" class="form-control" id="cooking_time" name="cooking_time" value="{{$product->cooking_time}}">
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso in gr</label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{$product->weight}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{$product->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$product->image}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" step="any" value="{{$product->price}}">
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection
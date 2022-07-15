@extends('layouts.base')

@section('page-title')
    Tutti i prodotti
@endsection

@section('page-content')
    <h1>Tutti i prodotti</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img width="100" src="{{$product->image ? $product->image : 'https://media.gettyimages.com/photos/pasta-variation-picture-id185065945'}}"></td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->type}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('products.show', $product->id)}}">Visualizza</a>
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Modifica</a>
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
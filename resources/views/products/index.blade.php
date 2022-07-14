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
                    <td><img width="100" src="{{$product->image}}"></td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->type}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('products.show', $product->id)}}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
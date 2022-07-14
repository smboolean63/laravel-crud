@extends('layouts.base')

@section('page-title')
    {{$product->title}}
@endsection

@section('page-content')
   <h1>{{$product->title}}</h1>
   <div>
        {!!$product->description!!}
   </div>
   <h2>Dettagli</h2>
   <ul>
        <li>Tempo cottura: {{$product->cooking_time}}</li>
        <li>Peso: {{$product->weight}}</li>
   </ul>
   <h3>Prezzo: {{$product->price}} €</h3>
   <p>
    <a href="{{route('products.index')}}">Torna alla pagina dei prodotti</a>
   </p>
@endsection
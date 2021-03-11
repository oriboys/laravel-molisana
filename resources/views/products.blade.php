@extends('layouts.app')

@section('content')
<div class="products">
  <div class="lista-prodotti">
    @foreach ($formati as $singolo)
    <div class="prodotto">

        <img src="{{$singolo['src']}}" alt="">

        <a href="#">
          <div class="hover-prodotto">

            <p>{{$singolo['titolo']}} - {{$singolo['tipo']}}</p>
          </div>

         </a>
    </div>
    @endforeach
  </div>
</div>
@endsection

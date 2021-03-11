@extends('layouts.app')

@section('content')
<div class="products">
  <div class="lista-prodotti">
    @foreach ($formati as $key => $singolo)
    <h2>{{$key}}</h2>
      @foreach ($singolo as $pasta)
        <div class="prodotto">

          <img src="{{$pasta['src']}}" alt="">

            <a href="#">
              <div class="hover-prodotto">

                <p>{{$pasta['titolo']}} - {{$pasta['tipo']}}</p>
              </div>

            </a>
    </div>
    @endforeach
    @endforeach

  </div>
</div>
@endsection

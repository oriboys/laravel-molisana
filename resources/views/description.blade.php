@extends('layouts.app')

@section('content')
<div class="detailes">
  <h1>{{$prodotto['titolo']}}</h1>
  <div class="immagini">
    <img src="{{$prodotto['src-h']}}" alt="">
    <img src="{{$prodotto['src-p']}}" alt="">
  </div>
  <div class="info">
      <ul>
        <li><i class="fas fa-info"></i>  {{$prodotto['tipo']}} </li>
        <li><i class="fas fa-clock"></i> {{$prodotto['cottura']}} </li>
        <li><i class="fas fa-weight"></i> {{$prodotto['peso']}} </li>
      </ul>
  </div>

<div class="desc">
  {!!$prodotto['descrizione']!!}
</div>


</div>
@endsection

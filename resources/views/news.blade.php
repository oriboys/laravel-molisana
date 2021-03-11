@extends('layouts.app')


@section('content')
<div class="news">
  <ul>
    @foreach ($formati as $singolo)
      <li>La nuova pasta {{$singolo['titolo']}} è ora disponibile</li>
          <img src="{{$singolo['src']}}" alt="">

    @endforeach
    </ul>
</div>
@endsection

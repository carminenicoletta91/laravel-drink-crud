@extends('layout.Custom-Layout')
@section('section-cube')

  <div class="box-drinks">
  @foreach ($values as  $value)
    <div class="box-drink">
      <p>Id: {{$value -> id}}</p>
      <p>Name: {{$value -> name}}</p>
      <p>Price: {{$value -> price}}</p>
      <p>Brand: {{$value -> brand}}</p>

    </div>

  @endforeach
  </div>
  <div class="box-max">
    <p>Max:{{$max}}</p>
  </div>
  <div class="box-min">
    <p>Min:{{$min}}</p>
  </div>
  <div class="box-avg">
    <p>Avg:{{$avg}}</p>
  </div>

@endsection

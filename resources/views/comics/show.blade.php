@extends('layout.base')

@section('pageContent')
    <h1>{{$comic["title"]}}</h1>
    <img src="{{$comic["thumb"]}}" alt="">
    <p>{{$comic["description"]}}</p>
    <h3>{{$comic["price"]}} $</h3>
    <h4>{{$comic["series"]}}</h4>
    <h4>{{$comic["sale_date"]}}</h4>
    <h4>{{$comic["type"]}}</h4>
@endsection
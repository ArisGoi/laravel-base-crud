@extends('layout.base')

@section('pageContent')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            {{-- <th scope="col">Description</th> --}}
            <th scope="col">thumb</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic["id"]}}</th>
                <td>{{$comic["title"]}}</td>
                {{-- <td>{{$comic["description"]}}</td> --}}
                <td>{{$comic["thumb"]}}</td>
                <td>{{$comic["price"]}} $</td>
                <td>{{$comic["series"]}}</td>
                <td>{{$comic["sale_date"]}}</td>
                <td>{{$comic["type"]}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}">
                        <button type="button" class="btn btn-primary">V</button>
                    </a>
                    {{-- <a href="{{route('comics.show', $comic->id)}}">
                        <button type="button" class="btn btn-warning">M</button>
                    </a> --}}
                    {{-- <a href="{{route('comics.show', $comic->id)}}">
                        <button type="button" class="btn btn-danger">Del</button>
                    </a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection
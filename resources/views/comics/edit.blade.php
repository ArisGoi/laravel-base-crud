@extends('layout.base')

@section('pageContent')
    <h1>Edit Comic: {{$comic['title']}}</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{old('title') ?? $comic['title']}}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description">{{old('description') ?? $comic['description']}}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{old('price') ?? $comic['price']}}">
        </div>
        
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Enter Series" value="{{old('series') ?? $comic['series']}}">
        </div>

        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Enter Sale date" value="{{old('sale_date') ?? $comic['sale_date']}}">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type" value="{{old('type') ?? $comic['type']}}">
        </div>

        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Enter Thumb" value="{{old('thumb') ?? $comic['thumb']}}">
        </div>
        
        
        <button type="submit" class="btn btn-warning">Modifica</button>
    </form>
@endsection
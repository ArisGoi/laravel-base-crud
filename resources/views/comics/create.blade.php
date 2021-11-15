@extends('layout.base')

@section('pageContent')
    <h1>Create new Comic</h1>

    <form action="{{route('comics.store')}}" method="POST">
    @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
        </div>
        
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Enter Series">
        </div>

        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Enter Sale date">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type">
        </div>

        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Enter Thumb">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
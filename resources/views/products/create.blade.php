@extends('layouts.app')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">
                Create Product
            </h5>
            <form method="POST" action="{{route('products.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                </div>


                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
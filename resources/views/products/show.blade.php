@extends('layouts.app')

@section('content')
    <h1 class="mt-5">
        {{$product->name}}
    </h1>

    <p>
        description : {{$product->description}}
    </p>

    <p>
        weight : {{$product->weight}}
    </p>

    <p>
        price : {{$product->price}}$
    </p>
@endsection
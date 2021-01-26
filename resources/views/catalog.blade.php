@extends('layouts.main')

@section('title')
    @parent Catalog
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h3><a class="display-1" href="{{ route('services') }}">Services</a></h3>

                <div class="card">
                    <ul class="list-group list-group-flush">
                        @foreach ($services as $service)
                            <li class="list-group-item">
                                <a href="{{ url("/catalog/services/{$service->id}") }}">{{ $service->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col text-center">
                <h3><a class="display-1" href="{{ route('products') }}">Products</a></h3>

                <div class="card">
                    <ul class="list-group list-group-flush">
                        @foreach ($products as $product)
                            <li class="list-group-item">
                                <a href="{{ url("/catalog/products/{$product->id}") }}">{{ $product->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
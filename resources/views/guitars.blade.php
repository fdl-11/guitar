@extends('layouts.main')

@section('container')
    <div class="text-center mt-5">
        <h4 class="mt-4 mb-5"><strong><br><br>Guitar Products</strong></h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                @foreach ($products as $product)
                    
                <div class="card d-flex">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                        <img src="https://source.unsplash.com/1200x400?{{ $product->category->name }}" class="w-100" />
                        <a href="#!">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100"></div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <a href="" class="text-reset">
                            <p>{{ $product->category->name }}</p>
                        </a>
                        <h6 class="mb-3">{{ $product->price }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
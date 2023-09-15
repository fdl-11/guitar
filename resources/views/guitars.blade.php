@extends('layouts.main')

@section('container')
    <div class="text-center container mt-5">
        <h4 class="mt-4 mb-5"><strong><br><br>Guitar Products</strong></h4>
  
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp" class="w-100" />
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
                        <a href="" class="text-reset">
                            <h5 class="card-title mb-3">Product name</h5>
                        </a>
                        <a href="" class="text-reset">
                            <p>Category</p>
                        </a>
                        <h6 class="mb-3">$61.99</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
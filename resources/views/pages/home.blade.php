@extends('layouts.app')

@section('main-content')

<div class="hero-container">
    
</div>

<section class="products bg-dark">
    <div class="container">
        <div class="row">
            <div class="row row-cols-12">
            
                @foreach ($products as $product )
                        
               
                    <div class="col p-1">
                        <div class="card bg-dark">
                            <img class="thumb" src="{{ $product['thumb']}}" alt="">
                                <div class="card-body bg-dark p-2 ">
                                    <h5 class="title">
                                        {{ $product['title'] }}
                                    </h5>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</section>


@endsection
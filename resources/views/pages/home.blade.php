@extends('layouts.app')

@section('main-content')

<div class="hero-container">
    
</div>

<section class="products">
    <div class="container">
        <div class="row">
            <div class="row row-cols-1">
            
                @foreach ($products as $product )
                        
               
                    <div class="col">
                        <div class="card">
                            <img src="" alt="">
                                <div class="card-body">
                                    <h3>
                                        {{ $product['title'] }}
                                    </h3>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</section>


@endsection
@extends('layouts.layout')

@section('content')

    <!-- Twój pozostały kod HTML dla strony sklepu -->

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{ $product->type }} Rarity: {{ $product->rarity }}</div>
                            <!-- Product image-->
                            <img src="https://picsum.photos/200/300?random={{ $product->id }}">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name -->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <p class="text-muted">{{ $product->group }}</p>
                                    <p class="fw-bold">${{ $product->price }}</p>
                                    <p class="text-muted">Left: {{ $product->storage }}</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form   action="{{ route('store.cart', $product->id) }}" method="POST">
@csrf
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                        <button type="submit" class="btn btn-outline-warning mt-auto">Add to cart</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                <div class="container px-4 px-lg-5 mt-5">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>

@endsection

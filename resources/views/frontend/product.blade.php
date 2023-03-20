
@extends('frontend.layout.main')

@section('main-countainer')
<!-- Portfolio Grid-->
 <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Products</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{url('frontend/assets/img/portfolio/1.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$product->Name}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$product->CategoryName}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    </div>
                </div>
            </div>
        </section>
        @endsection
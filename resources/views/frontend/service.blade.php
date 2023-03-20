@extends('frontend.layout.main')

@section('main-countainer')
 
 
 <!-- Services-->
  <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                @foreach($services as $serve)
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">{{$serve->Title}}</h4>
                        <p class="text-muted">{{$serve->Description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

@endsection
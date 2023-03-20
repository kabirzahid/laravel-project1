 @extends('frontend.layout.main')

 @section('main-countainer')
 <!-- About-->
  <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    @foreach( $abouts as $about)
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('frontend/assets/img/portfolio/1.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">{{$about->Title}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{$about->discription}}</p></div>
                        </div>
                    </li>
                    @endforeach
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    @endsection
@extends('main')

@section('content')
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Skateboards</h2>
            </div>

            <div class="row">
                @foreach($skateboards as $skateboard)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#{{$skateboard->name}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/'.$skateboard->img)}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$skateboard->name}}</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{$skateboards->links()}}
                </div>
            </div>
        </div>
    </section>


    @foreach($skateboards as $skateboard)
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="{{$skateboard->name}}" tabindex="0" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">{{$skateboard->name}}</h2>
                                <img class="img-fluid d-block mx-auto" src="{{asset('images/'.$skateboard->img)}}" alt="..." />
                                <ul class="list-inline">
                                    <li>
                                        <strong>Brand:</strong>
                                        {{$skateboard->brand}}
                                    </li>
                                    <li>
                                        <strong>Color:</strong>
                                        {{$skateboard->color}}
                                    </li>
                                    <li>
                                        <strong>Width:</strong>
                                        {{$skateboard->width}}
                                    </li>
                                    <li>
                                        <strong>Length:</strong>
                                        {{$skateboard->length}}
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>

                                <a class="btn btn-secondary btn-xl text-uppercase" type="button" href="{{route('skateboards.edit', $skateboard->id)}}">
                                    Update
                                </a>
                                <form method="POST" action="{{route('skateboards.destroy', $skateboard->id)}}" class="bt-2">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-xl text-uppercase" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach

@endsection

@extends('main')

@section('content')
    <section class="page-section" id="contact" >
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Create skateboard</h2>
            </div>
            <form id="contactForm" method="POST" action="{{route('skateboards.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- Name input-->
                            <label for="formFile" class="form-label text-white fw-bold">Name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="{{old('name')}}"/>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <!-- Brand input-->
                            <label for="formFile" class="form-label text-white fw-bold">Brand</label>
                            <input class="form-control" name="brand" id="brand" type="text" placeholder="Brand" data-sb-validations="required" value="{{old('brand')}}"/>
                            @error('brand')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <!-- Color input-->
                            <label for="formFile" class="form-label text-white fw-bold">Color</label>
                            <input class="form-control" id="color" type="text" name="color" placeholder="Color" data-sb-validations="required" value="{{old('color')}}"/>
                            @error('color')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <!-- width input-->
                            <label for="formFile" class="form-label text-white fw-bold">Width</label>
                            <input class="form-control" id="width" type="number" name="width" step="0.01" placeholder="Width" data-sb-validations="required" value="{{old('width')}}"/>
                            @error('width')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <!-- width input-->
                            <label for="formFile" class="form-label text-white fw-bold">Length</label>
                            <input class="form-control" id="length" name="length" type="number" step="0.01" placeholder="Length" data-sb-validations="required" value="{{old('length')}}" />
                            @error('length')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label text-white fw-bold">Image</label>
                            <input class="form-control" type="file" id="formFile" name="img">
                            @error('img')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Create</button></div>
            </form>
        </div>
    </section>

@endsection

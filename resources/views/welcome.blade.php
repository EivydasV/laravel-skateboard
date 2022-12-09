@extends('main')

@section('content')
    @include('_partials.mast-head')
    <!-- Services-->
    @include('_partials.services')
    <!-- Portfolio Grid-->
{{--    @include('_partials.portfolio')--}}
    <!-- About-->
    @include('_partials.about')
    <!-- Team-->
    @include('_partials.team')
    <!-- Clients-->
{{--    @include('_partials.clients')--}}
    <!-- Contact-->
{{--    @include('_partials.contact')--}}

@endsection

@extends('layouts.frontend')
@section('title')
    Hom page
@endsection
@section('content')
    @include('frontend.sections.homeSlider')
    @include('frontend.sections.homeAbout')
    @include('frontend.sections.homeFeature')
    @include('frontend.sections.homeService')
    @include('frontend.sections.homeStep')
    @include('frontend.sections.homeRequest')
    @include('frontend.sections.homeWork')
    @include('frontend.sections.homeReviews')
    @include('frontend.sections.homeBlog')
@endsection

@extends('layouts.master')
@section('title', 'Home Page')
@section('content')
    @include('frontend.menu')
    @include('frontend.slider')
    @include('frontend.content')
    @include('frontend.categories')
@endsection
